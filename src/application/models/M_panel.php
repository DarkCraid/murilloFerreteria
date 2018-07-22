<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_panel extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getMenu(){
    	$this->db->select('*');
        $this->db->from('menu');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }

    function getProductos(){
        $this->db->select('*');
        $this->db->from('inventario');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }

    function getClientes(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre');
        $this->db->where('status',1);
        $this->db->from('clientes');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getProveedores(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, id');
        $this->db->from('proveedores');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }
}