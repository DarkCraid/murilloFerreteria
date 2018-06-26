<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoModel extends CI_Model {

	function guardar($data){
		$this->db->insert('mensajes_contactos',$data);
	}
	
	function mostrarMensaje(){
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('mensajes_contactos');
		return $query->result();
	}

	function leido($id){
		$data = array(
			'status' => '0'
		);
		$this->db->where('id',$id);
		$this->db->update('mensajes_contactos',$data);
	}
}
