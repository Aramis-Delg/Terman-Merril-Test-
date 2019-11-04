<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie9 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie9_model');
	}
	public function index(){		
	
	}

		public function respS9(){
		$ides = $this->serie9_model->verSerieb9();
		$puntos=0;
		//var_dump($this->session->userdata('s_id'));
		$id_usuario =$this->session->userdata('s_id');
		for ($i=0; $i < sizeof($ides) ; $i++) { 
			$temp=$this->input->post('respuesta'.$ides[$i]->id);

			//var_dump($temp);
			//echo "<br><br>";
			
			$pregunta=$ides[$i]->id;
			if(!$temp){
				$temp='0';
				//insert
				$this->serie9_model->insertSerieb9Total($temp,$id_usuario,$pregunta);
			}else {
				if($temp[0]!=1){
					$temp='0';
					$this->serie9_model->insertSerieb9Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);
				} else {
					$temp='1';
					$this->serie9_model->insertSerieb9Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);

				}
				//insert

				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie9_model->selectRango9($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->serie9_model->insertTotal9($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('serie10_model');
		$data['verSerie10'] = $this->serie10_model->verSerie10();
		$data['verRespuestas'] = $this->serie9_model->verRespuestas9();
		$this->load->view('serie10',$data);
			//var_dump($puntos);
		
	}

	public function serie9(){
		$this->load->model('serie9_model');
		$data['verSerie9'] = $this->serie9_model->verSerie9();
		$data['verRespuestas'] = $this->serie9_model->verRespuestas9();
		$this->load->view('serie9',$data);
	}



}