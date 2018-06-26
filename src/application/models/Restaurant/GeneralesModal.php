<?php
class GeneralesModal extends CI_Model{
	
	function GetHora(){
		$this->db->select('h_lunes_viernes,h_sabado_domingo');
		$this->db->from('datos_restaurante');
		return $this->db->get()->result();
	}
}