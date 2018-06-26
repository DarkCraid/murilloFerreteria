<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model("Restaurant/ReservacionModel");
		//$this->load->model("Restaurant/ContactoModel");
	}

	public function index()
	{
		$this->load->view('Panel/Inicio');		
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
	{
		$this->load->view('Empleados');
	}

	public function ListEmpleados()//2
	{
		$this->load->view('ListEmpleados');
	}

	public function Proveedores()//3
	{
		$this->load->view('Proveedores');
	}

	public function ListProveedores()//4
	{
		$this->load->view('ListProveedores');
	}

	public function Inventario()//5
	{
		$this->load->view('Inventario');
	}

	public function Venta()//6
	{
		$this->load->view('Venta');
	}

	public function Historial()//7
	{
		$this->load->view('Historial');
	}

	public function Clientes()//8
	{
		$this->load->view('Clientes');
	}

	public function ClientesFrecuentes()//9
	{
		$this->load->view('ClientesFrecuentes');
	}

	public function Caja()//10
	{
		$this->load->view('Caja');
	}

	public function Compra()//11
	{
		$this->load->view('Compra');
	}

}
