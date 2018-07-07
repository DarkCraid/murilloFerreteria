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
        $this->db->close();
        return $this->db->get()->result();
    }

    function getProductos(){
        $this->db->select('*');
        $this->db->from('inventario');
        $this->db->close();
        return $this->db->get()->result();
    }
}