<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reportes extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getRetiros(){
    	$this->db->select('DATE_FORMAT(fecha,"%Y") AS year,DATE_FORMAT(fecha,"%m") AS mes ,DATE_FORMAT(fecha,"%d") AS dia, SUM(total) AS total');
        $this->db->from('compras');
        $this->db->where('status',1);
        $this->db->group_by('DATE_FORMAT(fecha,"%Y-%m-%d")');
        $this->db->order_by('fecha','asc');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getIngresos(){
        $this->db->select('DATE_FORMAT(fecha,"%Y") AS year,DATE_FORMAT(fecha,"%m") AS mes ,DATE_FORMAT(fecha,"%d") AS dia, SUM(total) AS total');
        $this->db->from('ventas');
        $this->db->where('status',1);
        $this->db->group_by('DATE_FORMAT(fecha,"%Y-%m-%d")');
        $this->db->order_by('fecha','asc');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getGanancias(){
        $this->db->select('DATE_FORMAT(updated_at,"%Y") AS year,DATE_FORMAT(updated_at,"%m") AS mes ,DATE_FORMAT(updated_at,"%d") AS dia, SUM(monto_inicial) + SUM(monto_entrada) - SUM(monto_salida) AS total');
        $this->db->from('caja');
        $this->db->where('status',1);
        $this->db->group_by('DATE_FORMAT(updated_at,"%Y-%m-%d")');
        $this->db->order_by('updated_at','asc');
        $this->db->close();
        return $this->db->get()->result();
    }
    function getUsers($tipe){
        $this->db->select('COUNT(id) AS total');
        if($tipe=="users")
            $this->db->where('tipo',"Administrador");
        $this->db->from($tipe);
        $this->db->where('status',1);
        $this->db->close();
        return $this->db->get()->row();
    }
}