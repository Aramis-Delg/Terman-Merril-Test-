<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie7 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie7_model');
	}
	public function index(){		
		$data['verSerie7'] = $this->serie7_model->verSerie7();
		$data['verRespuestas'] = $this->serie7_model->verRespuestas7();
		$this->load->view('serie7',$data);
	}

		public function respS7(){
		$ides = $this->serie7_model->verSerieb7();
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
				$this->serie7_model->insertSerieb7Total($temp,$id_usuario,$pregunta);
			}else {
				if($temp[0]!=1){
					$temp='0';
					$this->serie7_model->insertSerieb7Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);
				} else {
					$temp='1';
					$this->serie7_model->insertSerieb7Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);

				}
				//insert

				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->serie7_model->selectRango7($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->serie7_model->insertTotal7($puntos,$id_usuario,$data[0]->id_rango);
		redirect('Serie8');
			//var_dump($puntos);
		
	}




}