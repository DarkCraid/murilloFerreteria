<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Panel/M_panel');
		$this->load->model('M_session');
	}

	public function index(){
		if($this->session->userdata('login') == false)
            redirect(base_url());

		$data['dataMenu'] = $this->M_panel->getMenu();
		$this->load->view('Panel/panel',$data);
	}

	public function salir(){
		$this->session->sess_destroy();
		redirect(base_url().'index.php/Inicio');
	}

	public function getView(){
		//if (is_file(base_url().'views\Panel\\'.$this->input->post('page').'.php'))
	        $this->load->view('Panel/'.$this->input->post('page'),$this->input->post('data'));
       // else{
        	//echo APPPATH.'views\Panel\\'.$this->input->post('page').'.php';
          //  $this->load->view('Panel/404');	
        //}
	}

	public function getEstadisticas(){
		$id = $this->input->post("id");
		$data['data'] = $this->M_panel->getDataClient($id);
		$data['tipo_logs'] = $this->M_panel->getDataCategoriasH();
	    $this->load->view('Panel/'.$this->input->post('page'),$data);
	}

	public function getClientes(){
		$data = json_encode($this->M_panel->getClientes());
		echo 	json_encode(
				array(
					'type' => 'success',
					'msg' => $data
			));
	}

	public function getLogs(){
		$id = $this->input->post("id");
		$type = $this->input->post("type");
		$data = json_encode($this->M_panel->getLogs($id,$type));
		echo 	json_encode(
				array(
					'type' => 'success',
					'msg' => $data
			));
	}

	public function getDataPerfil(){
		$data = (array) $this->M_session->getUser($this->session->userdata('user'));
		unset($data['pssw'],$data['status']);
		$this->M_session->closeDB();
		echo 	json_encode(
				array(
					'type' => 'success',
					'msg' => $data
			));
	}

	public function changePassword(){
		$data = $this->M_session->getUser($this->session->userdata('user'));
		if($this->input->post('pssw1') && $this->input->post('pssw2') && $this->input->post('pssw3')){
			if(md5($this->input->post('pssw1')) == $data->pssw){
				if($this->input->post('pssw2') == $this->input->post('pssw3')){
					$result = $this->M_session->updatePassword($data->user,$this->input->post('pssw2'));
					echo 	json_encode(
						array(
						'type' => 'success',
						'msg' => $result
					));
				}else
					echo 	json_encode(
						array(
						'type' => 'error',
						'msg' => 'Las contraseñas no coinciden.'
					));
			}else{
				echo 	json_encode(
						array(
						'type' => 'error',
						'msg' => 'La contraseña actual es incorrecta.'
					));
			}
		}else
			echo 	json_encode(
						array(
						'type' => 'error',
						'msg' =>  'Capture todos los campos.'
					));
	}
}
