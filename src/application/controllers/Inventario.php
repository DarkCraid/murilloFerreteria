<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_panel');
		$this->load->model('M_inventario');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Inventario',$data);		
	}

	public function get()
	{
		$result = $this->M_inventario->getInventario();
    	echo json_encode($result);
	}


}
