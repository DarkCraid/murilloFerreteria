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
		$data['dataMenu'] 		= $this->M_panel->getMenu();
		$this->load->view('Panel/Caja/index',$data);		
	}

	public function setCaja()
	{
		$result = $this->session->userdata('name');
		$Caja = array(
			'monto_inicial' => $this->input->post('caja'),
			'monto_entrada'=> $this->input->post('ingreso'),
			'monto_salida'=> $this->input->post('retiro'),
			'empleado_id' => $this->input->post('empleado')
		);
	
    	echo '<strong>'.$this->M_caja->setCaja($Caja).'</strong>';
			
	}

	public function setMontoInicial(){
		$Caja = array(
			'monto_inicial' => $this->input->post('caja'),
			'monto_entrada'=> $this->input->post('ingreso'),
			'monto_salida'=> $this->input->post('retiro'),
			'empleado_id' => $this->input->post('empleado')			
		);
		echo '<strong>'.$this->M_caja->setMontoInicial($Caja).'</strong>';
	}
	public function setNewRetiro(){
		$Caja = array(
			'monto_salida'=> $this->input->post('retiro')		
		);
		echo '<strong>'.$this->M_caja->setNewRetiro($Caja).'</strong>';
	}

		
			
	


}