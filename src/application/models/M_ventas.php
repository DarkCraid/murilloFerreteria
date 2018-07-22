<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ventas extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getLastFolio(){
        $this->db->select('folio');
        $this->db->from('ventas');
        $this->db->limit(1);
        $this->db->order_by('fecha','DESC');
        $this->db->close();
        return $this->db->get()->row();
    }

    function setCompra($compra,$pedidos){
        $this->db->trans_start();
        $this->db->insert('compras',$compra);
        for ($i=0; $i < count($pedidos) ; $i++) { 
            $data = array(
                'articulo'          => $pedidos[$i]->nombre,
                'cantidad'          => $pedidos[$i]->cantidad,
                'costo_unitario'    => $pedidos[$i]->costo,
                'folio_compra'      => $compra['folio']
            );
            $this->db->insert('pedidos',$data);
        }
        $this->db->trans_complete();
        $this->db->close();
        if ($this->db->trans_status() === FALSE)
            return 'error al guardar la compra.';
        else
            return 'Se ha registrado la compra exitosamente.';
    }

    function getCompras(){
        $this->db->select('DATE_FORMAT(fecha,"%d %M, %Y") as fecha,folio,total');
        $this->db->from('ventas');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }

    function getPedidoFrom($folio){
        $this->db->select('*');
        $this->db->from('pedidos');
        $this->db->where('folio_compra',$folio);
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }

    function deleteCompra($folio){
        $this->db->trans_start();
        $this->db->where('folio',$folio);
        $this->db->set(array('status' => 0));
        $this->db->update('compras');
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
            return 'Error al canlear la compra.';
        else
            return 'Se ha cancelado la compra con folio: '.$folio.'.';
    }

    function getProveedor($folio){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, id');
        $this->db->from('compras');
        $this->db->join('proveedores','proveedores.id = compras.id_proveedor','left');
        $this->db->where('compras.folio',$folio);
        $this->db->close();
        return $this->db->get()->row();
    }
}