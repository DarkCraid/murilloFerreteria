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

    function setVenta($venta,$pedidos){
        $this->db->trans_start();
        $this->db->insert('ventas',$venta);
        $cant = 0;
        for ($i=0; $i < count($pedidos) ; $i++) { 
            $data = array(
                'articulo'          => $pedidos[$i]->nombre,
                'cantidad'          => $pedidos[$i]->cantidad,
                'costo_unitario'    => $pedidos[$i]->costo,
                'folio_venta'      => $venta['folio']
            );
            $this->db->insert('productos_venta',$data);

            $this->db->select('cantidad');
            $this->db->from('inventario');
            $cant = (array) $this->db->get()->result();
            $cant[0]->cantidad -= $pedidos[$i]->cantidad;

            $this->db->set(array('cantidad' => $pedidos[$i]->existentes));
            $this->db->where('descripcion',$pedidos[$i]->nombre);
            $this->db->update('inventario');
        }
        
        $this->db->trans_complete();
        $this->db->close();
        if ($this->db->trans_status() === FALSE)
            return 'error al guardar la venta.';
        else
            return 'Venta realizada exitosamente.';
    }

    function getCompras(){
        $this->db->select('DATE_FORMAT(fecha,"%d %M, %Y") as fecha, folio, total');
        $this->db->from('ventas');
        $this->db->where('status',1);
        $this->db->order_by('ventas.fecha','DESC');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getVentaFrom($folio){
        $this->db->select('*');
        $this->db->from('productos_venta');
        $this->db->where('folio_venta',$folio);
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }

    function deleteVenta($folio){
        $this->db->trans_start();
        $this->db->where('folio',$folio);
        $this->db->set(array('status' => 0));
        $this->db->update('ventas');
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
            return 'Error al canlear la compra.';
        else
            return 'Se ha cancelado la venta con folio: '.$folio.'.';
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