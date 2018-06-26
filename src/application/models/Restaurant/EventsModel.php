<?php
class EventsModel extends CI_Model{

	function GetAllEvents(){
		$this->db->select('*');
		$this->db->from('eventos');
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		return $this->db->get()->result();
	}
	function GetEventsAfter($id){
		$this->db->select('*');
		$this->db->from('eventos');
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		$this->db->where('eventos.id >=',$id);
		return $this->db->get()->result();
	}

	function GetEvent($id){
		$this->db->select('*');
		$this->db->from('eventos');
		$this->db->join('fotos_eventos','ON fotos_eventos.eventos_id = eventos.id','left');
		$this->db->where('eventos.id',$id);
		return $this->db->get()->result();
	}

	function GetFeaturedEvents(){
		$this->db->select('*');
		$this->db->from('eventos_destacados');
		$this->db->join('eventos','eventos_destacados.id_evento = eventos.id','left');
		$this->db->join('fotos_eventos','fotos_eventos.eventos_id = eventos.id','left');
		$this->db->order_by('eventos.fecha','asc');
		$this->db->limit('3');
		return $this->db->get()->result();
	}
}