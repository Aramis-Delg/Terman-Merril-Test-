<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comenzar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('preguntas_model');
	}
	public function index()
	{		
		if($this->session->userdata('s_tipo')=='usuario'){
			if($this->session->userdata('s_validado')=='1'){
				if ($this->session->userdata('s_test')=='0') {
					$this->load->view('comenzar');	
				}else{
					$this->load->view('terminar');
				}
			}else{
				redirect('Verificar');
			}
		}else{
			if($this->session->userdata('s_tipo')=='administrador'){
			redirect('Administrador');
			}else{
				redirect('login');
			}
		}
		
	}

<<<<<<< HEAD
=======
	public function serie1($id){
		
	}

	public function respS1(){
		$ides = $this->preguntas_model->verSerieb1();
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
				$this->preguntas_model->insertSerieb1Total($temp,$id_usuario,$pregunta);
			}else {
				//insert

				$this->preguntas_model->insertSerieb1Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango1($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->preguntas_model->insertTotal1($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie2'] = $this->preguntas_model->verSerie2();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie2',$data);
			//var_dump($puntos);
		
	}
//imprimes los radiobutton como en la vista 1?si ¿quieres tratar de modificar el método para guardar la serie 2?,si, se deben crear varios metodos tambien en el model 

	//vas entonces, mientras voy al wc :p, oc
	public function respS2(){
		$ides = $this->preguntas_model->verSerieb2();
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
				$this->preguntas_model->insertSerieb2Total($temp,$id_usuario,$pregunta);
			}else {
				//insert

				$this->preguntas_model->insertSerieb2Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango2($puntos);
		//var_dump($puntos);

		//var_dump($data);
		$this->preguntas_model->insertTotal2($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie3'] = $this->preguntas_model->verSerie3();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas2();
		$this->load->view('serie3',$data);
			//var_dump($puntos);
		
	}



	public function respS3(){
		$ides = $this->preguntas_model->verSerieb3();
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
				$this->preguntas_model->insertSerieb3Total($temp,$id_usuario,$pregunta);
			}else {
				//insert

				$this->preguntas_model->insertSerieb3Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango3($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->preguntas_model->insertTotal3($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie4'] = $this->preguntas_model->verSerie4();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas3();
		$this->load->view('serie4',$data);
			//var_dump($puntos);
		
	}



	
//se supone que ya está este método, revísalo a como tiene que funcionar, porfa¿?

	
	public function respS4(){
		$this->load->model('preguntas_model');
		$ides = $this->preguntas_model->verSerieb4();
		$puntos=0;
		$id_usuario =$this->session->userdata('s_id');
		//var_dump($id_usuario);
		for ($i=0; $i < sizeof($ides); $i++) { 
			$respuestas_user = $this->input->post('respuesta'.$ides[$i]->id); 
			$pregunta = $ides[$i]->id; 
			if (sizeof($respuestas_user)<2) {
				$respuestas_user[0]=0;
				//esta línea es solo para mostrar el valor de la respuesta
				//$param[''.$ides[$i]->id] = ''.$respuestas_user[0];
				
				$this->preguntas_model->insertSerieb4Total($respuestas_user[0],$id_usuario,$pregunta);

			} else {
				$aux4=((intval($respuestas_user[0]) + intval($respuestas_user[1]))/2);
				if ($aux4<0) {
					$aux4=0;
				}
				$this->preguntas_model->insertSerieb4Total($aux4,$id_usuario,$pregunta);
				$puntos=$puntos+intval($aux4);
			}

		}
		$data= $this->preguntas_model->selectRango4($puntos);
		//var_dump($puntos);
		//var_dump($data[0]->id_rango);
		//insert en total_segmento
		$this->preguntas_model->insertTotal4($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie5'] = $this->preguntas_model->verSerie5();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas4();
		$this->load->view('serie5',$data);
			//var_dump($puntos);

	}


	public function respS5(){
		$this->load->model('preguntas_model');
		$ides = $this->preguntas_model->verSerieb5();
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
				
				$this->preguntas_model->insertSerieb5Total('0',$id_usuario,$pregunta);

			} else {
				//$aux4=((intval($respuestas_user[0]) + intval($respuestas_user[1]))/2);
				$auxResp = $this->preguntas_model->verCorrectas5($ides[$i]->id);
				//var_dump($auxResp[0]->valor);
				if($respuestas_user==$auxResp[0]->valor){
					$this->preguntas_model->insertSerieb5Total('1',$id_usuario,$pregunta);
					$puntos=$puntos+1;
				} else {
					$this->preguntas_model->insertSerieb5Total('-1',$id_usuario,$pregunta);
					$puntos=$puntos-1;
				}
				
			}

		}
		$data= $this->preguntas_model->selectRango5($puntos);
		//var_dump($puntos);
		//var_dump($data);
		//insert en total_segmento
		$puntosTotal=($puntos*2);
		//var_dump($puntosTotal);
		$this->preguntas_model->insertTotal5($puntosTotal,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie6'] = $this->preguntas_model->verSerie6();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas5();
		$this->load->view('serie6',$data);
			//var_dump($puntos);

	}


	public function respS6(){
		$ides = $this->preguntas_model->verSerieb6();
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
				$this->preguntas_model->insertSerieb6Total($temp,$id_usuario,$pregunta);
			}else {
				if($temp[0]!=1){
					$temp='0';
					$this->preguntas_model->insertSerieb6Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);
				} else {
					$temp='1';
					$this->preguntas_model->insertSerieb6Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);

				}
				//insert

				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango6($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->preguntas_model->insertTotal6($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie7'] = $this->preguntas_model->verSerie7();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas6();
		$this->load->view('serie7',$data);
			//var_dump($puntos);
		
	}



	public function respS7(){
		$ides = $this->preguntas_model->verSerieb7();
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
				$this->preguntas_model->insertSerieb7Total($temp,$id_usuario,$pregunta);
			}else {
				if($temp[0]!=1){
					$temp='0';
					$this->preguntas_model->insertSerieb7Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);
				} else {
					$temp='1';
					$this->preguntas_model->insertSerieb7Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);

				}
				//insert

				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango7($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->preguntas_model->insertTotal7($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie8'] = $this->preguntas_model->verSerie8();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas7();
		$this->load->view('serie8',$data);
			//var_dump($puntos);
		
	}


	public function respS8(){
		$ides = $this->preguntas_model->verSerieb8();
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
				$this->preguntas_model->insertSerieb8Total($temp,$id_usuario,$pregunta);
			}else {
				//insert
				$this->preguntas_model->insertSerieb8Total($temp[0],$id_usuario,$pregunta);
				$puntos=$puntos+intval($temp[0]);
				//var_dump($puntos);
				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango8($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->preguntas_model->insertTotal8($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie9'] = $this->preguntas_model->verSerie9();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas8();
		$this->load->view('serie9',$data);
			//var_dump($puntos);
		
	}

	public function respS9(){
		$ides = $this->preguntas_model->verSerieb9();
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
				$this->preguntas_model->insertSerieb9Total($temp,$id_usuario,$pregunta);
			}else {
				if($temp[0]!=1){
					$temp='0';
					$this->preguntas_model->insertSerieb9Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);
				} else {
					$temp='1';
					$this->preguntas_model->insertSerieb9Total($temp,$id_usuario,$pregunta);
					$puntos=$puntos+intval($temp);

				}
				//insert

				
			}

			//var_dump('respuesta'.$ides[$i]->id);
		}
		$data= $this->preguntas_model->selectRango9($puntos);
		//var_dump($puntos);

		//insert en total_segmento
		$this->preguntas_model->insertTotal9($puntos,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		$data['verSerie10'] = $this->preguntas_model->verSerie10();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas9();
		$this->load->view('serie10',$data);
			//var_dump($puntos);
		
	}

	public function respS10(){
		$this->load->model('preguntas_model');
		$ides = $this->preguntas_model->verSerieb10();
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
				
				$this->preguntas_model->insertSerieb10Total('0',$id_usuario,$pregunta);

			} else {
				//$aux4=((intval($respuestas_user[0]) + intval($respuestas_user[1]))/2);
				$auxResp = $this->preguntas_model->verCorrectas10($ides[$i]->id);
				//var_dump($auxResp[0]->valor);
				if($respuestas_user==$auxResp[0]->valor){
					if ($respuestas_userb==$auxResp[1]->valor) {
						$this->preguntas_model->insertSerieb10Total('1',$id_usuario,$pregunta);
						$puntos=$puntos+1;
					} else{
						$this->preguntas_model->insertSerieb10Total('0',$id_usuario,$pregunta);
					}
				} else {
					$this->preguntas_model->insertSerieb10Total('0',$id_usuario,$pregunta);
				}
				
			}

		}
		$data= $this->preguntas_model->selectRango10($puntos);
		//var_dump($puntos);
		//var_dump($data);
		//insert en total_segmento
		$puntosTotal=($puntos*2);
		//var_dump($puntosTotal);
		$this->preguntas_model->insertTotal10($puntosTotal,$id_usuario,$data[0]->id_rango);
		$this->load->model('preguntas_model');
		//$data['verSerie6'] = $this->preguntas_model->verSerie6();
		//$data['verRespuestas'] = $this->preguntas_model->verRespuestas10();
		$this->load->view('terminar');
			//var_dump($puntos);

	}


	public function serie2(){
		$this->load->model('preguntas_model');
		$data['verSerie2'] = $this->preguntas_model->verSerie2();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie2',$data);
	}

	public function serie3(){
		$this->load->model('preguntas_model');
		$data['verSerie3'] = $this->preguntas_model->verSerie3();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie3',$data);
	}

	public function serie4(){
		$this->load->model('preguntas_model');
		$data['verSerie4'] = $this->preguntas_model->verSerie4();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie4',$data);
	}

	public function serie5(){
		$this->load->model('preguntas_model');
		$data['verSerie5'] = $this->preguntas_model->verSerie5();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie5',$data);
	}

	public function serie6(){
		$this->load->model('preguntas_model');
		$data['verSerie6'] = $this->preguntas_model->verSerie6();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie6',$data);
	}

	public function serie7(){
		$this->load->model('preguntas_model');
		$data['verSerie7'] = $this->preguntas_model->verSerie7();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie7',$data);
	}

	public function serie8(){
		$this->load->model('preguntas_model');
		$data['verSerie8'] = $this->preguntas_model->verSerie8();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie8',$data);
	}

	public function serie9(){
		$this->load->model('preguntas_model');
		$data['verSerie9'] = $this->preguntas_model->verSerie9();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie9',$data);
	}

	public function serie10(){
		$this->load->model('preguntas_model');
		$data['verSerie10'] = $this->preguntas_model->verSerie10();
		$data['verRespuestas'] = $this->preguntas_model->verRespuestas1();
		$this->load->view('serie10',$data);
	}
>>>>>>> f0dd408110098b98727ad545af4f627925d0dd75
	public function terminar(){
		
		$this->load->view('terminar');
	}
}

