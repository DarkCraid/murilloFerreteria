<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model("Restaurant/ReservacionModel");
		//$this->load->model("Restaurant/ContactoModel");
		$this->load->model('M_panel');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Panel/Inicio',$data);		
	}


	public function Venta()//6
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Venta',$data);
	}

	public function Historial()//7
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Historial',$data);
	}


	public function Caja()//10
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Caja',$data);
	}

	public function Reportes()//11
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('try',$data);
	}


	public function getView(){
		//if (is_file(base_url().'views\Panel\\'.$this->input->post('page').'.php'))
	        $this->load->view($this->input->post('page'),$this->input->post('data'));
       // else{
        	//echo APPPATH.'views\Panel\\'.$this->input->post('page').'.php';
          //  $this->load->view('Panel/404');	
        //}
	}

}
