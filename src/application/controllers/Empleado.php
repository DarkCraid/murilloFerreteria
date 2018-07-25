<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_panel');
		$this->load->model('M_empleado');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Empleados',$data);
	}

	public function get()
	{
		$result = $this->M_empleado->getEmpleado();
    	echo json_encode($result);
	}

	public function push()
	{
		$queryEmpleado = array(
			'nombre' => $this->input->post('nombre'),
			'a_p' => $this->input->post('a_p'),
			'a_m' => $this->input->post('a_m'),
			'domicilio' => $this->input->post('domicilio'), 
		);

		$queryTelefono = array(
			'numero' => $this->input->post('numero'),
			'tipo' => 'Empleado',
		);

		$queryUser = array(
			'user' => $this->input->post('usuario'),
			'tipo' => $this->input->post('tipo'),
			'pssw' => md5($this->input->post('contrasena')),
			'email' => $this->input->post('correo'),
		);
		$this->M_empleado->pushEmpleado($queryEmpleado,$queryTelefono,$queryUser);

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
		$this->M_empleado->updateEmpleado($cliente,$queryCliente,$queryTelefono);

		echo '<form action="#" method="post">'
	.'<div class="row">'
	.'<div class="form-group col-md-12" style="text-align: center;">'
	.'<h2>Accion completada.</h2>'
	.'</div>'
	.'</div>'
	.'</form>';
	}
	public function drop()
	{
		$this->M_empleado->dropEmpleado($this->input->post('idE'),$this->input->post('idU'));

		echo '<form action="#" method="post">'
	.'<div class="row">'
	.'<div class="form-group col-md-12" style="text-align: center;">'
	.'<h2>Accion completada.</h2>'
	.'</div>'
	.'</div>'
	.'</form>';
	}

		public function search()
	{

		if ($this->input->post('status') == 2) {
			$query = array(
				'empleados.nombre' => $this->input->post('data')
			);
		}
		if ($this->input->post('status') == 3) {
			$query = array(
				'telefonos.numero' => $this->input->post('data')
			);
		}
		$result = $this->M_empleado->getSearch($query);
    	echo json_encode($result);
	}
}
