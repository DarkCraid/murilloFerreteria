<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proveedores extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getProveedores(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, proveedores.id, domicilio, numero');
        $this->db->from('proveedores');
        $this->db->join('telefonos','id_person = proveedores.id','right');
        $this->db->where('telefonos.tipo',"Proveedor");
        $this->db->where('proveedores.status',1);
        $this->db->group_by('nombre');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getPhonesFrom($id,$person){
        $this->db->select('numero');
        $this->db->from('telefonos');
        $this->db->where('telefonos.tipo',$person);
        $this->db->where('id_person',$id);
        $this->db->close();
        return $this->db->get()->result();
    }
}