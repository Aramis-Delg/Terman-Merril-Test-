<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		

		
	}
	
	public function index()
	{
		//if($this->session->userdata('usuario')){
		//	redirect('welcome');
		//}
		$data['errorArch'] = '';
		$this->load->library('encryption');
		$this->load->view('login',$data);
		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}

			if ($this->session->userdata('s_tipo')=='administrador') {
				redirect('Administrador');
				
			}
		}

	}

/*	 public function login()
	{
		if(isset($_POST['contrasena'])){
		$this->load->model('login_model');
		if($this->login_model->login($_POST['usuario'],md5($_POST['contrasena']))){

			$data['nombre'] = $this->session->userdata('nombre');
			//$data['usuario'] = $this->session->userdata('usuario');


			$this->load->view('comenzar',$data);
		}else{
			redirect('login#bad-password');
		}
		
		}

	}*/

	public function ingresar(){

		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}
			if ($this->session->userdata('s_tipo')=='administrador') {
				redirect('Administrador');
				
			}

			
		}

		$usuario = $this->input->post('usuario');
		$pass = $this->input->post('contrasena');
		$this->load->model('login_model');
		$res= $this->login_model->ingresar($usuario,$pass);

		if ($res == 1) {

			$this->load->view('comenzar');
		}else{
			if ($res == 2) {
				redirect('Administrador');
			}else{
				$data['errorArch'] = 'Usted ya está registrado';
				$this->load->view('login');
			}
			
		}
		if($res == 3){
			$this->load->view('aviso');
		}


	}



	public function cerrar_sesion(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}


}
