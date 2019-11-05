<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comenzar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('preguntas_model');
	}
	public function index()
	{		
		if($this->session->userdata('s_tipo')=='usuario'){
			if($this->session->userdata('s_validado')=='1'){
				if ($this->session->userdata('s_test')=='0') {
					$this->load->view('comenzar');	
				}else{
					$this->load->view('terminar');
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


	public function terminar(){
		
		$this->load->view('terminar');
	}
}

