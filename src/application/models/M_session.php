<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_session extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getUser($email = ''){
    	$query = $this->db->get_where('users', array('user' => $email));
			if($query->num_rows() == 1) 
				return $query->row();
			else{
				$query = $this->db->get_where('users', array('email' => $email));
					if($query->num_rows() == 1) 
						return $query->row();
					else
						return null;
			}
    }
    function getidEmploye($iduser){
        $this->db->select('id');
        $this->db->from('empleados');
        $this->db->where('id_user',$iduser);
        return $this->db->get()->row();
    }

    function updatePassword($user,$pssw){
        $this->db->trans_start();
        $this->db->where('user',$user);
        $this->db->set(array('pssw' => md5($pssw)));
        $this->db->update('users');
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
            return 'error al actualizar.';
        else
            return 'Contraseña actualizada.';
    }

    function closeDB(){
    	$this->db->close();
    }
}