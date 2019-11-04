<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie10 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie10_model');
	}
	public function index(){		
	$data['verSerie10'] = $this->serie10_model->verSerie10();
	$data['verRespuestas'] = $this->serie10_model->verRespuestas10();
	$this->load->view('serie10',$data);
	}

	public function respS10(){
		$this->load->model('serie10_model');
		$ides = $this->serie10_model->verSerieb10();
		$puntos=0;
		$id_usuario =$this->session->userdata('s_id');
		//var_dump($id_usuario);
		for ($i=0; $i < sizeof($ides); $i++) { 
			$pregunta = $ides[$i]->id;
			$respuestas_user = $this->input->post('respuesta'.$pregunta);
			$respuestas_userb = $this->input->post('respuestab'.$pregunta); 
			//var_dump($respuestas_user); 
			if (!$respuestas_user) {
				$respuestas_user=0;
				//esta línea es solo para mostrar el valor de la respuesta
				//$param[''.$ides[$i]->id] = ''.$respuestas_user[0];
				
				$this->serie10_model->insertSerieb10Total('0',$id_usuario,$pregunta);

			} else {
				//$aux4=((intval($respuestas_user[0]) + intval($respuestas_user[1]))/2);
				$auxResp = $this->serie10_model->verCorrectas10($ides[$i]->id);
				//var_dump($auxResp[0]->valor);
				if($respuestas_user==$auxResp[0]->valor){
					if ($respuestas_userb==$auxResp[1]->valor) {
						$this->serie10_model->insertSerieb10Total('1',$id_usuario,$pregunta);
						$puntos=$puntos+1;
					} else{
						$this->serie10_model->insertSerieb10Total('0',$id_usuario,$pregunta);
					}
				} else {
					$this->serie10_model->insertSerieb10Total('0',$id_usuario,$pregunta);
				}
				
			}

		}
		$data= $this->serie10_model->selectRango10($puntos);
		//var_dump($puntos);
		//var_dump($data);
		//insert en total_segmento
		$puntosTotal=($puntos*2);
		//var_dump($puntosTotal);
		$this->serie10_model->insertTotal10($puntosTotal,$id_usuario,$data[0]->id_rango);
		//$this->load->model('terinar_model');
		//$data['verSerie6'] = $this->preguntas_model->verSerie6();
		//$data['verRespuestas'] = $this->preguntas_model->verRespuestas10();
		$this->load->view('terminar');
			//var_dump($puntos);

	}






}