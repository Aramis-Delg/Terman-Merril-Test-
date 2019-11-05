<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie3 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie3_model');
	}
	public function index(){
		$this->load->view('header');
		if ($this->session->userdata('s_test')>=4) {
			redirect('Comenzar');
		}
		if ($this->session->userdata('s_test')<=2) {
			redirect('Serie2');
		}
		$data['verSerie3'] = $this->serie3_model->verSerie3();
		$data['verRespuestas'] = $this->serie3_model->verRespuestas3();
		$this->load->view('serie3',$data);		
	
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
		$data['verRespuestas'] = $this->serie3_model->verRespuestas3();
		$this->session->set_userdata('s_test',4);
		redirect('Serie4');
			//var_dump($puntos);
		
	}





}