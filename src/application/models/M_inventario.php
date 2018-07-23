<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventario extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function pushInventario()
    {
    }
    public function getInventario()
    {
        $this->db->select('*');
        $this->db->from('inventario');
        $this->db->where(array('status' => '1'));
        return $this->db->get()->result();
    }
    public function updateInventario()
    {   
    }
    public function dropInventario()    
    {
    }


}