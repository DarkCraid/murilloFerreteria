<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_proveedores extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function getProveedores(){
        $this->db->select('CONCAT(nombre," ",a_p," ",a_m) AS nombre, proveedores.id, domicilio, numero');
        $this->db->from('proveedores');
        $this->db->join('telefonos','id_person = proveedores.id','right');
        $this->db->where('telefonos.tipo',"Proveedor");
        $this->db->where('proveedores.status',1);
        $this->db->group_by('nombre');
        $this->db->close();
        return $this->db->get()->result();
    }

    function getPhonesFrom($id,$person){
        $this->db->select('numero');
        $this->db->from('telefonos');
        $this->db->where('telefonos.tipo',$person);
        $this->db->where('id_person',$id);
        $this->db->close();
        return $this->db->get()->result();
    }

    function setProveedor($data,$tel){
        $this->db->trans_start();
        $this->db->insert('proveedores',$data);
        $id = $this->db->insert_id();
        for ($i=0; $i < count($tel) ; $i++) { 
            $data = array(
                'numero'        => $tel[$i],
                'id_person'     => $id,
                'tipo'          => 'Proveedor'
            );
            $this->db->insert('telefonos',$data);
        }
        $this->db->trans_complete();
        $this->db->close();
        if ($this->db->trans_status() === FALSE)
            return 'error al guardar la al proveedor.';
        else
            return 'Se ha guardado exitosamente al proveedor.';
    }

    function deleteProveedor($id){
        $this->db->trans_start();
        $this->db->where('id',$id);
        $this->db->set(array('status' => 0));
        $this->db->update('proveedores');
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
            return 'Error al eliminar el proveedor.';
        else
            return 'Se ha eliminado al proveedor exitosamente.';
    }
}