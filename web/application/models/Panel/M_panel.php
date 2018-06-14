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

    function getClientes(){
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('customers.status',1);
        $this->db->close();
        $this->db->order_by('nombre','asc');
        return $this->db->get()->result();
    }

    function getDataClient($id){
        $this->db->select('nombre,email,cuenta,battery_min,battery_max');
        $this->db->from('customers');
        $this->db->join('tipo_cuenta','tipo_cuenta.id = customers.tipo_cuenta','left');
        $this->db->where('customers.status',1);
        $this->db->where('customers.id',$id);
        $this->db->close();
        return $this->db->get()->result();
    }

    function getDataCategoriasH(){
        $this->db->select('*');
        $this->db->from('tipo_logs');
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->result();
    }

    function getLogs($id,$type){
        $condition = '';
        $this->db->select('logs_customers.id AS id_user, tipo_logs.tipo, descripcion,fecha, tipo_logs.id AS tipLogId, nivel_bateria');
        $this->db->from('logs_customers');
        $this->db->join('tipo_logs','tipo_logs.id = logs_customers.id_tipo','left');
        $this->db->join('customers','customers.id = logs_customers.id_customer','left');
        $this->db->where('customers.id',$id);
        if($type != 0)
            $this->db->where('id_tipo',$type);
        $this->db->order_by("fecha", "desc");
        $this->db->close();
        return $this->db->get()->result();
    }
}