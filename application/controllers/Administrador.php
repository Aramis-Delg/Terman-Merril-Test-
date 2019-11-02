<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
		
	}

	public function index(){
		$data['errorArch'] = '';
		$this->load->library('encryption');
		
		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}

			if ($this->session->userdata('s_tipo')=='administrador') {
				$data['Usuario'] = $this->login_model->consultaUsuario();
		//$data['Segmento'] = $this->login_model->consultaUsuario();
				$this->load->view('administrador',$data);
				
			}
		}else{
			redirect('login');
		}
		
	}
	
	public function cerrar_sesion(){
		$this->session->sess_destroy();
		$data['errorArch'] = '';
		redirect('Login');
		//$this->load->view('login',$data);
	}

	


}
