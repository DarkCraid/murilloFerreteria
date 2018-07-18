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
		$data['TimelineRetiros'] 	= $this->M_reportes->getRetiros();
		$retiros	 				= (array) $data['TimelineRetiros'];
		$data['retiros']			= 0;

		for ($i=0; $i < count($retiros); $i++) { 
			$data['retiros'] += intval($retiros[$i]->total);
		}

		$data['retiros']		= json_encode(array(
			array(
				'name' 	=> 'Compras (gastos de inversión)',
				'y'		=> $data['retiros'],
				'color'	=> '#ec7575'
			),
			array(
				'name' 	=> 'Ventas (ingresos)',
				'y'		=> 0,
				'color'	=> '#5bd05f'
			)
		));




		$this->load->view('Panel/reportes/index',$data);		
	}



}
