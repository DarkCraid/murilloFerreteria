<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proveedores extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getProveedores(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, id, domicilio');
        $this->db->from('proveedores');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }
}