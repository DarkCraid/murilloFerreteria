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
	/*public function Error404()
	{
		$this->load->view('Panel/Error/Error404');
	}
	public function Error500()
	{
		$this->load->view('Panel/Error/Error500');
	}
	public function Registro()
	{
		$this->load->view('Panel/Registro');
	}
	public function CambiarContrasena()
	{
		$this->load->view('Panel/CambiarContrasena');
	}*/

	public function Empleados()//1
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Empleados',$data);
	}

	public function ListEmpleados()//2
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('ListEmpleados',$data);
	}

	public function Proveedores()//3
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Proveedores',$data);
	}

	public function ListProveedores()//4
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('ListProveedores',$data);
	}

	public function Inventario()//5
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Inventario',$data);
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

	public function Clientes()//8
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Clientes',$data);
	}

	public function ClientesFrecuentes()//9
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('ClientesFrecuentes',$data);
	}

	public function Caja()//10
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Caja',$data);
	}

	public function Compra()//11
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Compra',$data);
	}

	public function Reportes()//11
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('try',$data);
	}

}
