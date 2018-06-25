<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller {


	public function index()
	{
					//Nombre del controlador/Nombre de la función
		$this->load->view('Inicio/IniciarSesion');
	}
}
