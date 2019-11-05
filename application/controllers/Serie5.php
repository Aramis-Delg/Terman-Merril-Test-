<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie5 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie5_model');
	}
	public function index(){	
		$this->load->view('header');
		if ($this->session->userdata('s_test')>=6) {
			redirect('Serie6');
		}
		if ($this->session->userdata('s_test')<=4) {
			redirect('Serie4');
		}
		$data['verSerie5'] = $this->serie5_model->verSerie5();
		$data['verRespuestas'] = $this->serie5_model->verRespuestas5();
		$this->load->view('serie5',$data);	
	
	}

		public function respS5(){
		$this->load->model('serie5_model');
		$ides = $this->serie5_model->verSerieb5();
		$puntos=0;
		$id_usuario =$this->session->userdata('s_id');
		//var_dump($id_usuario);
		for ($i=0; $i < sizeof($ides); $i++) { 
			$pregunta = $ides[$i]->id;
			$respuestas_user = $this->input->post('respuesta'.$pregunta); 
			//var_dump($respuestas_user); 
			if (!$respuestas_user) {
				$respuestas_user=0;
				//esta línea es solo para mostrar el valor de la respuesta
				//$param[''.$ides[$i]->id] = ''.$respuestas_user[0];
				
				$this->serie5_model->insertSerieb5Total('0',$id_usuario,$pregunta);

			} else {
				//$aux4=((intval($respuestas_user[0]) + intval($respuestas_user[1]))/2);
				$auxResp = $this->serie5_model->verCorrectas5($ides[$i]->id);
				//var_dump($auxResp[0]->valor);
				if($respuestas_user==$auxResp[0]->valor){
					$this->serie5_model->insertSerieb5Total('1',$id_usuario,$pregunta);
					$puntos=$puntos+1;
				} else {
					$this->serie5_model->insertSerieb5Total('-1',$id_usuario,$pregunta);
					$puntos=$puntos-1;
				}
				
			}

		}
		$data= $this->serie5_model->selectRango5($puntos);
		//var_dump($puntos);
		//var_dump($data);
		//insert en total_segmento
		$puntosTotal=($puntos*2);
		//var_dump($puntosTotal);
		$this->serie5_model->insertTotal5($puntosTotal,$id_usuario,$data[0]->id_rango);
		$data['verRespuestas'] = $this->serie5_model->verRespuestas5();
		$this->session->set_userdata('s_test',6);
			//var_dump($puntos);
		redirect('Serie6');

	}





}