<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie4 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie4_model');
	}
	public function index(){
		if ($this->session->userdata('s_test')>=5) {
			redirect('Serie5');
		}
		if ($this->session->userdata('s_test')<=3) {
			redirect('Serie3');
		}
		$data['verSerie4'] = $this->serie4_model->verSerie4();
		$data['verRespuestas'] = $this->serie4_model->verRespuestas4();
		$this->load->view('serie4',$data);
	
	}

		public function respS4(){
		$this->load->model('serie4_model');
		$ides = $this->serie4_model->verSerieb4();
		$puntos=0;
		$id_usuario =$this->session->userdata('s_id');
		//var_dump($id_usuario);
		for ($i=0; $i < sizeof($ides); $i++) { 
			$respuestas_user = $this->input->post('respuesta'.$ides[$i]->id); 
			$pregunta = $ides[$i]->id; 
			if(!$respuestas_user){
				$respuestas_user[0]=0;
			}
			if (sizeof($respuestas_user)<2) {
				$respuestas_user[0]=0;
				//esta línea es solo para mostrar el valor de la respuesta
				//$param[''.$ides[$i]->id] = ''.$respuestas_user[0];
				
				$this->serie4_model->insertSerieb4Total($respuestas_user[0],$id_usuario,$pregunta);

			} else {
				$aux4=((intval($respuestas_user[0]) + intval($respuestas_user[1]))/2);
				if ($aux4<0) {
					$aux4=0;
				}
				$this->serie4_model->insertSerieb4Total($aux4,$id_usuario,$pregunta);
				$puntos=$puntos+intval($aux4);
			}

		}
		$data= $this->serie4_model->selectRango4($puntos);
		//var_dump($puntos);
		//var_dump($data[0]->id_rango);
		//insert en total_segmento
		$this->serie4_model->insertTotal4($puntos,$id_usuario,$data[0]->id_rango);
		$data['verRespuestas'] = $this->serie4_model->verRespuestas4();
		$this->session->set_userdata('s_test',5);
		redirect('Serie5');
			//var_dump($puntos);
	}





}