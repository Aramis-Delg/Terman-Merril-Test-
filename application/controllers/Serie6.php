<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie6 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie6_model');
	}
	public function index(){		
	
	}

	public function respS6(){
		$ides = $this->serie6_model->verSerieb6();
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
				$this->serie6_model->insertSerieb6Total($temp,$id_usuario,$pregunta);
			}else {
				if($temp[0]!=1){
					$temp='0';
					$this->serie6_model->insertSerieb6Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);
				} else {
					$temp='1';
					$this->serie6_model->insertSerieb6Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);

				}
				//insert

				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie6_model->selectRango6($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->serie6_model->insertTotal6($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('serie7_model');
		$data['verSerie7'] = $this->serie7_model->verSerie7();
		$data['verRespuestas'] = $this->serie6_model->verRespuestas6();
		$this->load->view('serie7',$data);
			//var_dump($puntos);
		
	}

	public function serie6(){
		$this->load->model('serie6_model');
		$data['verSerie6'] = $this->serie6_model->verSerie6();
		$data['verRespuestas'] = $this->serie6_model->verRespuestas6();
		$this->load->view('serie6',$data);
	}
	




}