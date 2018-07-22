<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model("Restaurant/ReservacionModel");
		//$this->load->model("Restaurant/ContactoModel");
		$this->load->model('M_panel');
		$this->load->model('M_ventas');
	}

	public function index()
	{	if($this->session->userdata('login') == false)
            redirect(base_url());
		$data['dataMenu'] 		= $this->M_panel->getMenu();
		$this->load->view('Panel/ventas/index',$data);		
	}

	public function getProducts(){
		echo json_encode($this->M_panel->getProductos());
	}

	public function getClientes(){
		echo json_encode($this->M_panel->getClientes());
	}

	public function getView(){
		switch($this->input->post('page')){
			case "nuevaVenta":
				$data = $this->getDataNuevoPedido();
				break;
			case "listaVentas":
				$data = $this->getDataListaCompras();
				break;
			default:
				$data = null;
				break;
		}
	    $this->load->view('Panel/ventas/'.$this->input->post('page'),$data);
	}
  
	public function setPedido(){
		$data = $this->input->post('data');
		for ($i=0; $i < count($data); $i++) { 
			$data[$i] = (object) $data[$i];
		}
		$compra = array(
			'folio' 		=> $this->input->post('folio'),
			'id_proveedor'	=> $this->input->post('proveedor'),
			'total'			=> $this->input->post('total'),
			'nota'			=> $this->input->post('nota'),
			'id_empleado' 	=> $this->session->userdata('id')
		);
		echo '<strong>'.$this->M_ventas->setCompra($compra,$data).'</strong>';
	}

	public function getPedidoFrom(){ 
		$data['productos'] = $this->M_ventas->getPedidoFrom($this->input->post('folio'));
		$data['proveedor'] = $this->M_ventas->getProveedor($this->input->post('folio'));
		$this->load->view('Panel/ventas/listaPedidos',$data);
	}

	public function deleteCompra(){
		$result = $this->M_ventas->deleteCompra($this->input->post('folio'));
		echo 	 '<strong>'.$result.'</strong>';
	}







	private function getDataNuevoPedido(){
		$data['folio']			= $this->getFolioStruct();
		$data['proveedores']	= $this->M_panel->getProveedores();
		return $data;
	}

	private function getFolioStruct(){
		//(((date('d')-1)<10)? $fecha = '0'.(date('d')-1): $fecha = (date('d')-1));
		$fecha = date("dmy");

		if($this->M_ventas->getLastFolio()){
			$dat 	= (array)$this->M_ventas->getLastFolio();
			$dat 	= explode('V',$dat['folio']);
			$dat 	= explode('-',$dat[1]);
			$n 		= (intval($dat[0])+1);
			if((intval($dat[0])+1)<100)
				$n = '0'.(intval($dat[0])+1);
			if((intval($dat[0])+1)<10)
				$n = '00'.(intval($dat[0])+1);
			return $data['folio']	= 'V'.$n.'-'.$fecha;
		}else			
			return $data['folio']	= 'V001-'.$fecha;
	}

	private function getDataListaCompras(){
		$data['compras'] = $this->M_ventas->getCompras();
		return $data;
	}
}
