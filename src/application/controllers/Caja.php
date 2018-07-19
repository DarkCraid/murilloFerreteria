<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caja extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_panel');
		$this->load->model('M_caja');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] 	= $this->M_panel->getMenu();
		if ($this->M_caja->getMontoInicial()) {
			$data['monto'] 		= (array)$this->M_caja->getMontoInicial();
		}
		else{
			$data['monto'] = (array)0;
		}
		$this->load->view('Panel/Caja/index',$data);
	}

	public function setCaja()
	{	
		$id   = (array)$this->M_caja->getLastId();
		$nuevaRow = array(
			'monto_inicial' => 0,
			'monto_entrada'=> 0,
			'monto_salida'=> 0,
			'empleado_id' => 1	
		);
		$Caja = array(
			'monto_entrada'=> $this->input->post('ingreso')
		);
		foreach ($id as $ID) {
    		echo '<strong>'.$this->M_caja->setCaja($Caja['monto_entrada'],$ID,$nuevaRow).'</strong>';		
		}
	}

	public function setMontoInicial(){

		if ($this->M_caja->getMontoInicial()) {
				$id   = (array)$this->M_caja->getLastId();
				$Caja = array(
					'monto_inicial' => $this->input->post('caja'),
					'empleado_id' => $this->session->userdata('id')	
				);
			foreach ($id as $ID) {
				echo '<strong>'.$this->M_caja->setMontoInicial($Caja['monto_inicial'],$ID,$Caja['empleado_id']).'</strong>';
			}
		}else{
			$Caja = array(
				'monto_inicial' => $this->input->post('caja'),
				'monto_entrada'=> 0,
				'monto_salida'=> 0,
				'empleado_id' => $this->session->userdata('id')		
			);
			$this->M_caja->setnewRow($Caja);
		}
		
	}
	public function setNewRetiro(){
		$id   = (array)$this->M_caja->getLastId();
		$Caja = array('monto_salida'=> $this->input->post('ingreso'));
		foreach ($id as $ID) {
			$this->M_caja->setNewRetiro($Caja['monto_salida'],$ID);
		}
		
		
	}

		


}