<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_caja extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

	function setCaja($Caja){
		$this->db->trans_start();
        $this->db->insert('caja',$Caja);
        $this->db->trans_complete();
         if ($this->db->trans_status() === FALSE)
            return 'error al registrar la ganancias de hoy.';
        else
            return 'Se han regristado las ganancias exitosamente.';
        $this->db->close();
	}
	function setMontoInicial($Caja){
		$this->db->trans_start();
        $this->db->insert('caja',$Caja);
        $this->db->trans_complete();
         if ($this->db->trans_status() === FALSE)
            return 'error al registrar la ganancias de hoy.';
        else
            return 'Se han regristado las ganancias exitosamente.';
        $this->db->close();		
	}
	function setNewRetiro($Caja){
		
	}
}