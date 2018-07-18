<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_caja extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

	function setCaja($Mentrada,$id,$nuevaRow){
		$this->db->query("update caja set monto_entrada='$Mentrada' where id='$id' ;");
		$this->db->trans_start();
 		$this->db->insert('caja',$nuevaRow);
        $this->db->trans_complete();
         if ($this->db->trans_status() === FALSE)
            return 'error al registrar la ganancias de hoy.';
        else
            return 'Se han regristado las ganancias exitosamente.';
        $this->db->close();	            		
	}
	function setMontoInicial($montoI,$id){
		$this->db->query("update caja set monto_inicial='$montoI' where id='$id' ;");
        $this->db->close();	
	}
	function setnewRow($Caja){
		$this->db->trans_start();
        $this->db->insert('caja',$Caja);
        $this->db->trans_complete();
         $this->db->close();	
	}
	function setNewRetiro($Caja,$id){
		$this->db->query("update caja set monto_salida=monto_salida+'$Caja' where id='$id' ;");

        $this->db->close();
	}
	function getMontoInicial(){
		$this->db->select('monto_inicial');
        $this->db->from('caja');
        $this->db->limit(1);
        $this->db->order_by('id','DESC');
        $this->db->close();
         return $this->db->get()->row();
	}
	function getLastId(){
		$this->db->select('id');
        $this->db->from('caja');
        $this->db->limit(1);
        $this->db->order_by('id','DESC');
        $this->db->close();
         return $this->db->get()->row();
	}
}