<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reportes extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getRetiros(){
    	$this->db->select('UNIX_TIMESTAMP(DATE_FORMAT(fecha,"%Y-%m-%d"))*1000 AS fecha, total');
        $this->db->from('compras');
        $this->db->order_by('fecha','asc');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getIngresos(){
        $this->db->select('UNIX_TIMESTAMP(DATE_FORMAT(fecha,"%Y-%m-%d"))*1000 AS fecha, total');
        $this->db->from('ventas');
        $this->db->order_by('fecha','asc');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getGanancias(){
        $this->db->select('UNIX_TIMESTAMP(DATE_FORMAT(updated_at,"%Y-%m-%d"))*1000 AS fecha, (monto_inicial + monto_entrada - monto_salida) AS total');
        $this->db->from('caja');
        $this->db->order_by('fecha','asc');
        $this->db->close();
        return $this->db->get()->result();
    }
}