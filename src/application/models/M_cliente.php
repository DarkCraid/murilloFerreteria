<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cliente extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
   /* function getMenu(){
    	$this->db->select('*');
        $this->db->from('menu');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getProductos(){
        $this->db->select('*');
        $this->db->from('inventario');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getProveedores(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, id');
        $this->db->from('proveedores');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }*/

    public function pushCliente($stat,$param1,$param2,$param3,$param4)
    {
        $this->db->insert('clientes', $param1);
        $this->db->insert('telefonos', array_merge($param2 , array('id_person' => $this->db->insert_id())));
    }
    public function getCliente()
    {
        $this->db->select('CONCAT(clientes.nombre," ",clientes.a_p," ",clientes.a_m) AS "fullName",
            clientes.id AS "cliente",
            telefonos.numero AS "telefono"');
        $this->db->from('clientes');
        $this->db->join('telefonos','telefonos.id_person = clientes.id','left');
        return $this->db->get()->result();
    }


}