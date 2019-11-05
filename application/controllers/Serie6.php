<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie6 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('serie6_model');
	}
	public function index(){
		if ($this->session->userdata('s_test')>=7) {
			redirect('Serie7');
		}
		if ($this->session->userdata('s_test')<=5) {
			redirect('Serie5');
		}
		$data['verSerie6'] = $this->serie6_model->verSerie6();
		$data['verRespuestas'] = $this->serie6_model->verRespuestas6();
		$this->load->view('serie6',$data);
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
		$this->session->set_userdata('s_test',7);
		redirect('Serie7');
			//var_dump($puntos);
		
	}
	




}