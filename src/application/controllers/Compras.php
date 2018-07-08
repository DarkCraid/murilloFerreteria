<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compras extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model("Restaurant/ReservacionModel");
		//$this->load->model("Restaurant/ContactoModel");
		$this->load->model('M_panel');
		$this->load->model('M_compras');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] 		= $this->M_panel->getMenu();
		$this->load->view('Panel/compras/index',$data);		
	}

	public function getProducts(){
		echo json_encode($this->M_panel->getProductos());
	}

	public function getView(){
		switch($this->input->post('page')){
			case "nuevoPedido":
				$data['proveedores']	= $this->M_panel->getProveedores();
				break;
			default:
				$data = null;
				break;
		}
	    $this->load->view('Panel/compras/'.$this->input->post('page'),$data);
	}
}
