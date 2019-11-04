<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie3 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie3_model');
	}
	public function index(){		
	
	}

		public function respS3(){
		$ides = $this->serie3_model->verSerieb3();
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
				$this->serie3_model->insertSerieb3Total($temp,$id_usuario,$pregunta);
			}else {
				//insert

				$this->serie3_model->insertSerieb3Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie3_model->selectRango3($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->serie3_model->insertTotal3($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('serie4_model');
		$data['verSerie4'] = $this->serie4_model->verSerie4();
		$data['verRespuestas'] = $this->serie3_model->verRespuestas3();
		$this->load->view('serie4',$data);
			//var_dump($puntos);
		
	}
	public function serie3(){
		$this->load->model('serie3_model');
		$data['verSerie3'] = $this->serie3_model->verSerie3();
		$data['verRespuestas'] = $this->serie3_model->verRespuestas3();
		$this->load->view('serie3',$data);
	}




}