<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comenzar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('preguntas_model');
		$this->load->model('login_model');
	}
	public function index()
	{		
		if($this->session->userdata('s_tipo')=='usuario'){
			if($this->session->userdata('s_validado')=='1'){
				if ($this->session->userdata('s_test')=='0') {
					$this->load->view('comenzar');	
					
				}else{
					if ($this->session->userdata('s_test')>=1) {
						$this->load->view('terminar');	
						
					}
					
					
				}
			}else{
				redirect('Verificar');
			}
		}else{
			if($this->session->userdata('s_tipo')=='administrador'){
			redirect('Administrador');
			}else{
				redirect('login');
			}
		}
		
	}

	public function comenzar(){
		$this->session->set_userdata('s_test',1);
		$data['testEstado'] = $this->login_model->testEstado($this->session->userdata('s_id'));
		redirect ('Serie1');
	}


	public function terminar(){
		
		$this->load->view('terminar');
	}
}

