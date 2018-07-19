<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_panel');
		$this->load->model('M_cliente');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Clientes',$data);
	}
	public function get()
	{
		$result = $this->M_cliente->getCliente();
    	echo json_encode($result);
	}

	public function push()
	{
		$queryCliente = array(
			'nombre' => $this->input->post('nombre'),
			'a_p' => $this->input->post('a_p'),
			'a_m' => $this->input->post('a_m'),
			'domicilio' => $this->input->post('domicilio'), 
		);

		$queryTelefono = array(
			'numero' => $this->input->post('numero'),
			'tipo' => $this->input->post('tipo'),
		);
		$this->M_cliente->pushCliente($queryCliente,$queryTelefono);

		echo '<form action="#" method="post">'
	.'<div class="row">'
	.'<div class="form-group col-md-12" style="text-align: center;">'
	.'<h2>Accion completada.</h2>'
	.'</div>'
	.'</div>'
	.'</form>';
	}
	public function update()
	{
		$cliente = $this->input->post('id');
		$queryCliente = array(
			'nombre' => $this->input->post('nombre'),
			'a_p' => $this->input->post('a_p'),
			'a_m' => $this->input->post('a_m'),
			'domicilio' => $this->input->post('domicilio'), 
		);

		$queryTelefono = array(
			'numero' => $this->input->post('numero'),
			'tipo' => $this->input->post('tipo'),
		);
		$this->M_cliente->updateCliente($cliente,$queryCliente,$queryTelefono);

		echo '<form action="#" method="post">'
	.'<div class="row">'
	.'<div class="form-group col-md-12" style="text-align: center;">'
	.'<h2>Accion completada.</h2>'
	.'</div>'
	.'</div>'
	.'</form>';
		
	}


}
