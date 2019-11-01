<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
		
	}

	public function index(){
		$data['Usuario'] = $this->login_model->consultaUsuario();
		//$data['Segmento'] = $this->login_model->consultaUsuario();
		$this->load->view('administrador',$data);
	}
	
	public function cerrar_sesion(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	


}
