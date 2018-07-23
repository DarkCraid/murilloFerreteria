<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_empleado extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function pushCliente($param1,$param2)
    {
        $this->db->insert('clientes', $param1);
        $this->db->insert('telefonos', array_merge($param2 , array('id_person' => $this->db->insert_id())));
    }
    public function getCliente()
    {
        $this->db->select('CONCAT(clientes.nombre," ",clientes.a_p," ",clientes.a_m) AS "fullName",
            clientes.id AS "cliente",
            telefonos.numero AS "telefono",
            clientes.puntos AS "punto"');
        $this->db->from('clientes');
        $this->db->join('telefonos','telefonos.id_person = clientes.id','left');
        $this->db->where(array('telefonos.tipo' => 'Cliente','clientes.status' => '1'));
        return $this->db->get()->result();
    }
    public function updateCliente($param1,$param2,$param3)
    {   
        $this->db->where(array('id' => $param1));
        $this->db->set($param2);
        $this->db->update('clientes');  

        $this->db->where(array('id_person' => $param1, 'tipo' => 'Cliente'));
        $this->db->set($param3);
        $this->db->update('telefonos');  
    }
    public function dropCliente($param1)    
    {
        $this->db->where(array('id' => $param1));
        $this->db->set(array('status' => 0));
        $this->db->update('clientes');  


        $this->db->where(array('id_person' => $param1, 'tipo' => 'Cliente'));
        $this->db->set(array('status' => 0));
        $this->db->update('telefonos');  
    }


}