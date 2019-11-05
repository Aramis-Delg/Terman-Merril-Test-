<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie8 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie8_model');
	}
	public function index(){
		$this->load->view('header');		
		if ($this->session->userdata('s_test')>=9) {
			redirect('Comenzar');
		}
		if ($this->session->userdata('s_test')<=7) {
			redirect('Serie7');
		}
	$data['verSerie8'] = $this->serie8_model->verSerie8();
	$data['verRespuestas'] = $this->serie8_model->verRespuestas8();
	$this->load->view('serie8',$data);
	}

	public function respS8(){
		$ides = $this->serie8_model->verSerieb8();
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
				$this->serie8_model->insertSerieb8Total($temp,$id_usuario,$pregunta);
			}else {
				//insert
				$this->serie8_model->insertSerieb8Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp[0]);
				//var_dump($puntos);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie8_model->selectRango8($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->serie8_model->insertTotal8($puntos,$id_usuario,$data[0]->id_rango);
		$this->session->set_userdata('s_test',9);
		redirect('Serie9');
			//var_dump($puntos);
		
	}



}