<?php
class ReservacionModel extends CI_Model{

	function guardar($data){
		$this->db->insert('reservaciones',$data);
	}

	function mostrarReservaciones(){		
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('reservaciones');
		return $query->result();
	}

	function cancelar($id){		
		$data = array(
			'status' => '0'
		);
		$this->db->where('id',$id);
		$this->db->update('reservaciones',$data);
	}
}