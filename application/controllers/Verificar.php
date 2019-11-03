<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verificar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('verificar_model');
	}
	public function index(){		
		if($this->session->userdata('s_validado')=='0'){

			
			$this->load->view('verificar');	
			
		}else{
			if($this->session->userdata('s_validado')=='1'){
				redirect('Comenzar');
			}else{
				redirect('login');
			}
		}
	}

	public function verificar(){
		$aux = $this->verificar_model->cargarCodigo($this->session->userdata('s_id'));
		$aux1 = $aux[0]->verificador;
		$aux2 = $this->input->post('codigo');
		if ($aux1==$aux2) {
			$this->verificar_model->validar($this->session->userdata('s_id'));
			$datos='Código correcto';
			$this->session->set_userdata('s_validado','1');
			echo $datos;

		}else{
			$datos='Código incorrecto';
			echo $datos;

		}
	}

	public function actualizar(){
		$aux = $this->session->userdata('s_id');
		$aux2 = $this->input->post('correo');
		$this->verificar_model->actualizarCorreo($aux,$aux2);
		$datos='Correo actualizado';
		echo $datos;
	}

	public function cerrar_sesion(){
		$this->session->sess_destroy();
		redirect('login');
	}

}