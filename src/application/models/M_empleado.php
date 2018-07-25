<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_empleado extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function pushEmpleado($param1,$param2)
    {
        $this->db->insert('empleados', $param1);
        $this->db->insert('telefonos', array_merge($param2 , array('id_person' => $this->db->insert_id())));
    }
    public function getEmpleado()
    {
        $this->db->select('CONCAT(empleados.nombre," ",empleados.a_p," ",empleados.a_m) AS "fullName",
            empleados.id AS "cliente",
            telefonos.numero AS "telefono",
            empleados.puntos AS "punto"');
        $this->db->from('empleados');
        $this->db->join('telefonos','telefonos.id_person = empleados.id','left');
        $this->db->where(array('telefonos.tipo' => 'Empleado','empleados.status' => '1'));
        return $this->db->get()->result();
    }
    public function updateEmpleado($param1,$param2,$param3)
    {   
        $this->db->where(array('id' => $param1));
        $this->db->set($param2);
        $this->db->update('empleados');  

        $this->db->where(array('id_person' => $param1, 'tipo' => 'Empleado'));
        $this->db->set($param3);
        $this->db->update('telefonos');  
    }
    public function dropEmpleado($param1)    
    {
        $this->db->where(array('id' => $param1));
        $this->db->set(array('status' => 0));
        $this->db->update('empleados');  


        $this->db->where(array('id_person' => $param1, 'tipo' => 'Empleado'));
        $this->db->set(array('status' => 0));
        $this->db->update('telefonos');  
    }
    public function getSearch($param1)
    {
        $this->db->select('CONCAT(empleados.nombre," ",empleados.a_p," ",empleados.a_m) AS "fullName",
            empleados.id AS "cliente",
            telefonos.numero AS "telefono",
            empleados.puntos AS "punto"');
        $this->db->from('empleados');
        $this->db->join('telefonos','telefonos.id_person = empleados.id','left');
        $this->db->where(array('telefonos.tipo' => 'Empleado','empleados.status' => '1'))
        ->like($param1);
        return $this->db->get()->result();
    }


}