<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_panel');
		$this->load->model('M_proveedores');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] 		= $this->M_panel->getMenu();
		$this->load->view('Panel/proveedores/index',$data);		
	}

	public function getView(){
		switch($this->input->post('page')){
			case "listaProveedores":
				$data = $this->getDataListaProveedores();
				break;
			case "nuevoProveedor":
				if($this->input->post('id'))
					$data = $this->getDataFromProv($this->input->post('id'));
				else
					$data = $this->getDataProvNull();
				break;
			default:
				$data = null;
				break;
		}
	    $this->load->view('Panel/proveedores/'.$this->input->post('page'),$data);
	}

	private function getDataListaProveedores(){
		$data['proveedores']	= $this->M_proveedores->getProveedores();
		return $data;
	}

	public function getPhonesFrom(){
		$data['telefonos'] = $this->M_proveedores->getPhonesFrom($this->input->post('id'),'Proveedor');
		$str = '<ul>';
		foreach ($data['telefonos'] as $t) {
			$str .="<li>".$t->numero."</li>";
		}
		echo json_encode(array(
			'proveedor' => "nombre",
			'msg'		=> $str
		));
	}

	public function setProveedor(){
		$errors = $this->validateDataProv();
		if(count($errors['errors'])>0)
			echo json_encode(array(
				'type'	=> 'danger',
				'msg'	=> '<strong>'.$errors['string'].'</ul></strong>'
			));
		else{
			$data = array(
				'nombre' 	=> $this->input->post('nombre'),
				'a_p'		=> $this->input->post('a_p'),
				'a_m'		=> $this->input->post('a_m'),
				'rfc'		=> $this->input->post('rfc'),
				'domicilio'	=> $this->input->post('colonia').', '.$this->input->post('calle').', '.$this->input->post('num_ca')
			);
			if(! $this->input->post('id'))
				$response = $this->M_proveedores->setProveedor($data,$this->input->post('telefonos'));
			else
				$response = $this->input->post('id');

			echo json_encode(array(
				'type'	=> 'success',
				'msg'	=> '<strong>'.$response.'</strong>'
			));
		}
	}

	public function getProveedores(){
		echo json_encode($this->M_proveedores->getProveedores());
	}

	public function deleteProveedor(){
		echo '<strong>'.$this->M_proveedores->deleteProveedor($this->input->post('id')).'</strong>';
	}

	private function getDataProvNull(){
		$data['prov'] = (object)[
			'nombre'	=> '',
			'a_p'		=> '',
			'a_m'		=> '',
			'num'		=> '',
			'rfc'		=> '',
			'calle'		=> '',
			'colonia'	=> '',
			'id'		=> ''
		];
		return $data;
	}

	private function getDataFromProv($id){
		$data = (array) $this->M_proveedores->getDataFromProv($id);
		$domicilio = str_replace(", ", ",", $data['domicilio']);
		$domicilio = explode(",", $domicilio);
		$data['prov'] = (object)[
			'nombre'	=> $data['nombre'],
			'a_p'		=> $data['a_p'],
			'a_m'		=> $data['a_m'],
			'num'		=> $domicilio[2],
			'rfc'		=> $data['rfc'],
			'calle'		=> $domicilio[1],
			'colonia'	=> $domicilio[0],
			'id'		=> $data['id']
		];
		return $data;
	}

	private function validateDataProv(){
		$errors = array();
		if(! $this->input->post('nombre'))
			array_push($errors, 'Capture el nombre del proveedor.');
		if(! $this->input->post('a_p'))
			array_push($errors, 'Capture el apellido paterno.');
		if(! $this->input->post('a_m'))
			array_push($errors, 'Capture el apellido materno.');
		if(! $this->input->post('colonia'))
			array_push($errors, 'Capture la colonia.');
		if(! $this->input->post('calle'))
			array_push($errors, 'Capture la calle.');
		if(! $this->input->post('num_ca'))
			array_push($errors, 'Capture el número de la casa u local.');
		if(! $this->input->post('rfc'))
			array_push($errors, 'Capture el rfc del proveedor.');
		if(! $this->input->post('telefonos'))
			array_push($errors, 'Ingrese por lo menos un telefono del proveedor.');

		$response['errors'] = $errors;
		$response['string'] = "<ul>";
		for ($i=0; $i < count($errors); $i++) { 
			$response['string'].="<li>".$errors[$i]."</li>";
		}
		return $response;
	}

}
