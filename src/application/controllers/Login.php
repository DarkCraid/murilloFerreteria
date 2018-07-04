<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('Inicio/IniciarSesion');
	}

	public function entrar(){
		$user = $this->input->post('user');
		$pssw = $this->input->post('pssw');
		if($user!="" && $pssw!=""){
			$this->load->model('M_session');
			$result = $this->M_session->getUser($user);
			if($result != null){
				if($result->pssw == md5($pssw)){
					$data = array('user' => $result->user,'login' => true);
					$this->session->set_userdata($data);
					$this->M_session->closeDB();
					echo 	json_encode(
						array(
						'type' => 'success',
						'msg' => 'En linea'
					));
				}else
					echo 	json_encode(
								array(
									'type' => 'error',
									'msg' => 'La contraseña es incorrecta.'
							));
				
			}else
				echo 	json_encode(
							array(
								'type' => 'error',
								'msg' => 'La cuenta no existe.'
						));
		}
		else
			echo 	json_encode(
						array(
							'type' => 'error',
							'msg' => 'El usuario y la contraseña son obligatorios.'
					));
	}
}
