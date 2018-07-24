<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_panel');
		$this->load->model('M_reportes');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] 			= $this->M_panel->getMenu();
		$data['TimelineRetiros'] 	= json_encode($this->M_reportes->getRetiros());
		$data['TimelineIngresos'] 	= json_encode($this->M_reportes->getIngresos());
		$data['TimelineGanancias'] 	= json_encode($this->M_reportes->getGanancias());
		$retiros	 				= (array) $this->M_reportes->getRetiros();
		$ingresos 				 	= (array) $this->M_reportes->getIngresos();
		$users['emp']			 	= $this->M_reportes->getUsers('empleados');
		$users['adm']			 	= $this->M_reportes->getUsers('users');
		$users['cli']			 	= $this->M_reportes->getUsers('clientes');
		$data['retiros']			= 0;
		$data['ingresos']			= 0;

		for ($i=0; $i < count($retiros); $i++) { 
			$data['retiros'] += intval($retiros[$i]->total);
		}
		for ($i=0; $i < count($ingresos); $i++) { 
			$data['ingresos'] += intval($ingresos[$i]->total);
		}

		$data['retiros']		= json_encode(array(
			array(
				'name' 	=> 'Compras (gastos de inversión)',
				'y'		=> $data['retiros'],
				'color'	=> '#ec7575'
			),
			array(
				'name' 	=> 'Ventas (ingresos)',
				'y'		=> $data['ingresos'],
				'color'	=> '#5bd05f'
			)
		));

		$data['users']		= json_encode(array(
			array(
				'name' 		=> 'Clientes frecuentes',
				'y'			=> intval($users['cli']->total),
				"drilldown"	=> "Clientes frecuentes"
			),
			array(
				'name' 		=> 'Empleados',
				'y'			=> intval($users['emp']->total),
				"drilldown"	=> "Empleados"
			),
			array(
				'name' 		=> 'Administradores',
				'y'			=> intval($users['adm']->total),
				"drilldown"	=> "Administradores"
			)
		));

		$this->load->view('Panel/reportes/index',$data);		
	}
}
