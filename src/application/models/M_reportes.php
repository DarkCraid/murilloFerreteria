<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reportes extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getRetiros(){
    	$this->db->select('DATE_FORMAT(fecha,"%Y-%m-%d") AS fecha, total');
        $this->db->from('compras');
        $this->db->order_by('fecha','asc');
        $this->db->close();
        return $this->db->get()->result();
    }
}