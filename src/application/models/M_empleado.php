<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_empleado extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function pushEmpleado($param1,$param2,$param3)
    {
        $this->db->insert('users', $param3);
        $this->db->insert('empleados', array_merge($param1 , array('id_user' => $this->db->insert_id())));
        $this->db->insert('telefonos', array_merge($param2 , array('id_person' => $this->db->insert_id())));
    }
    public function getEmpleado()
    {
        $this->db->select('CONCAT(empleados.nombre," ",empleados.a_p," ",empleados.a_m) AS "fullName",
            empleados.id AS "empleado",
            telefonos.numero AS "telefono",
            users.tipo AS "tipoC",
            users.id AS "user",
            empleados.nombre AS "nombreModal",
            empleados.a_p AS "apellidoP",
            empleados.a_m AS "apellidoM",
            empleados.domicilio AS "fullDomicilio",
            users.user AS "nameUser",
            users.email AS "correo"');

        $this->db->from('users');
        $this->db->join('empleados','empleados.id_user = users.id','left');
        $this->db->join('telefonos','telefonos.id_person = empleados.id','left');
        $this->db->where(array('telefonos.tipo' => 'Empleado','empleados.status' => '1'));
        return $this->db->get()->result();
    }
    public function updateEmpleado($param1,$param2,$param3,$param4,$param5)
    {   
        $this->db->where(array('id' => $param2));
        $this->db->set($param4);
        $this->db->update('empleados');


        $this->db->where(array('id_person' => $param2, 'tipo' => 'Empleado'));
        $this->db->set($param5);
        $this->db->update('telefonos');

        $this->db->where(array('id' => $param1));
        $this->db->set($param3);
        $this->db->update('users'); 
    }
    public function dropEmpleado($param1,$param2)    
    {
        $this->db->where(array('id' => $param1));
        $this->db->set(array('status' => 0));
        $this->db->update('empleados');


        $this->db->where(array('id_person' => $param1, 'tipo' => 'Empleado'));
        $this->db->set(array('status' => 0));
        $this->db->update('telefonos');

        $this->db->where(array('id' => $param2));
        $this->db->set(array('status' => 0));
        $this->db->update('users');  
    }
    public function getSearch($param1)
    {
        $this->db->select('CONCAT(empleados.nombre," ",empleados.a_p," ",empleados.a_m) AS "fullName",
            empleados.id AS "empleado",
            telefonos.numero AS "telefono",
            users.tipo AS "tipoC",
            users.id AS "user",
            empleados.nombre AS "nombreModal",
            empleados.a_p AS "apellidoP",
            empleados.a_m AS "apellidoM",
            empleados.domicilio AS "fullDomicilio",
            users.user AS "nameUser",
            users.email AS "correo"');

        $this->db->from('users');
        $this->db->join('empleados','empleados.id_user = users.id','left');
        $this->db->join('telefonos','telefonos.id_person = empleados.id','left');
        $this->db->where(array('telefonos.tipo' => 'Empleado','empleados.status' => '1'))
        ->like($param1);
        return $this->db->get()->result();



    }


}