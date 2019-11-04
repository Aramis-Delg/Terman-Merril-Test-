<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie2 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie2_model');
	}
	public function index(){		
	
	}
	public function respS2(){
		$ides = $this->serie2_model->verSerieb2();
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
				$this->serie2_model->insertSerieb2Total($temp,$id_usuario,$pregunta);
			}else {
				//insert

				$this->serie2_model->insertSerieb2Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie2_model->selectRango2($puntos);
		//var_dump($puntos);

		//var_dump($data);
		$this->serie2_model->insertTotal2($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('serie3_model');
		$data['verSerie3'] = $this->serie3_model->verSerie3();
		$data['verRespuestas'] = $this->serie2_model->verRespuestas2();
		$this->load->view('serie3',$data);
			//var_dump($puntos);
		
	}

	public function serie2(){
		$this->load->model('serie2_model');
		$data['verSerie2'] = $this->serie2_model->verSerie2();
		$data['verRespuestas'] = $this->serie2_model->verRespuestas2();
		$this->load->view('serie2',$data);
	}



}