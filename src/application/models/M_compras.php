<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_compras extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getProveedores(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, id');
        $this->db->from('proveedores');
        $this->db->close();
        return $this->db->get()->result();
    }
}