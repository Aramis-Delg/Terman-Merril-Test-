<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		

		
	}
	
	public function index()
	{
		$data['errorArch'] = '';
		
		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}

			if ($this->session->userdata('s_tipo')=='administrador') {
				redirect('Administrador');
				
			}
		}else{
			$this->load->view('login',$data);
		}

	}


	public function ingresar(){

		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}
			if ($this->session->userdata('s_tipo')=='administrador') {
				redirect('Administrador');
				
			}

			
		}else{
			$usuario = $this->input->post('usuario');
			$pass = $this->input->post('contrasena');
			$this->load->model('login_model');
			$res= $this->login_model->ingresar($usuario,$pass);

			if ($res == 1) {

				redirect('comenzar');
			}else{
				if ($res == 2) {
					redirect('Administrador');
				}else{
					if($res == 3){
						$this->load->view('aviso');
					}else{
					$data['errorArch'] = 'Datos incorrectos. Vuelva a intentarlo.';
					$this->load->view('login',$data);
					}
				}

			}

		}


	}



	public function cerrar_sesion(){
		$this->session->sess_destroy();
		redirect('login');
	}


}
