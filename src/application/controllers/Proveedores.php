<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_panel');
		$this->load->model('M_proveedores');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] 		= $this->M_panel->getMenu();
		$this->load->view('Panel/proveedores/index',$data);		
	}

	public function getView(){
		switch($this->input->post('page')){
			case "listaProveedores":
				$data = $this->getDataListaProveedores();
				break;
			default:
				$data = null;
				break;
		}
	    $this->load->view('Panel/proveedores/'.$this->input->post('page'),$data);
	}

	private function getDataListaProveedores(){
		$data['proveedores']	= $this->M_proveedores->getProveedores();
		return $data;
	}

}
