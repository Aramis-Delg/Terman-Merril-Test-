<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie1 extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('serie1_model');
		$this->load->model('login_model');
	}


	public function index(){

		$this->load->view('header');

		if($this->session->userdata('s_tipo')=='usuario'){
			if($this->session->userdata('s_validado')=='1'){
			if ($this->session->userdata('s_test')>=2) {
						redirect('Comenzar');
					}
					if ($this->session->userdata('s_test')<=0) {
						redirect('Comenzar');
					}


					$this->load->model('preguntas_model');
					$this->load->model('login_model');
					$data['verSerie1'] = $this->preguntas_model->verSerie1();
					
					$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
					$this->load->view('serie1',$data);	

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

		$this->load->model('serie1_model');
	}



	public function respS1(){
		$ides = $this->serie1_model->verSerieb1();
		$puntos=0;
		//var_dump($this->session->userdata('s_id'));
		$id_usuario =$this->session->userdata('s_id');
		//var_dump($id_usuario);
		for ($i=0; $i < sizeof($ides) ; $i++) { 
			$temp=$this->input->post('respuesta'.$ides[$i]->id);

			//var_dump($temp);
			//echo "<br><br>";
			
			$pregunta=$ides[$i]->id;
			if(!$temp){
				$temp='0';
				//insert
				$this->serie1_model->insertSerieb1Total($temp,$id_usuario,$pregunta);
			}else {
				//insert

				$this->serie1_model->insertSerieb1Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie1_model->selectRango1($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->serie1_model->insertTotal1($puntos,$id_usuario,$data[0]->id_rango);
		$this->session->set_userdata('s_test',2);
		redirect('Serie2');
		
	}



}