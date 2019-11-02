<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('registro_model');
		$this->load->model('login_model');
	}

	public function index(){
		$data['errorArch'] = '';

		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}

			if ($this->session->userdata('s_tipo')=='administrador') {
				redirect('Administrador');
				
			}
		}else{
			$data['verVacantes'] = $this->registro_model->verVacantes();
			$this->load->view('registro',$data); 
		}


	}
	
	public function RevisarCurp(){
		$temp = $this->input->post('curp');
		$datos = $this->registro_model->RevisarCurp($temp);
		//var_dump($datos);
		echo json_encode($datos, JSON_FORCE_OBJECT);

	}
	
	public function SubirArchivo(){
		$datos = $this->input->post();
		//veriicar si existe la curp
		$check = $this->login_model->checarCurp($this->input->post('curp'));
		if ($check==1) {
			$data['errorArch'] = 'Usted ya está registrado';
			$data['verVacantes'] = $this->registro_model->verVacantes();
			$this->load->view('registro',$data);
		} else {
			//subir archivo de INE
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = '236000';
		$auxINE = 'INE'.$this->input->post('curp');
		$config['file_name'] = 'INE'.$this->input->post('curp');
		$this->load->library('upload',$config);
		$this->upload->initialize($config);


		if(!$this->upload->do_upload('archivo')){
			$data2['errorArch'] = $this->upload->display_errors();
			$this->load->view('registro',$data2);		
		} else {
			//subir archivo de CV
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '236000';
			$auxCV = 'CV'.$this->input->post('curp');
			$config['file_name'] = 'CV'.$this->input->post('curp');

			$this->load->library('upload',$config);
			$this->upload->initialize($config);


		if(!$this->upload->do_upload('archivo2')){
			$data2['errorArch'] = $this->upload->display_errors();
			$this->load->view('registro',$data2);		
		} else {
			$error['errorArch']='';
			//$this->load->view('registro',$error);

			//método para registrar en la base
			
			if(isset($datos)){
			/*Usuarios*/
			$nombre = $datos['nombre'];
			$apellidos = $datos['apellidos'];
			$edad = $datos['edad'];
			$sexo = $datos['sexo'];
			$estado = $datos['estado'];
			$correo = $datos['email'];
			$telefono = $datos['telefono'];
			$curp = $datos['curp'];
			$curriculum = $auxINE;
			$ine = $auxCV;
			$contrasena = $datos['telefono'];
			$vacante_id = $datos['vacante'];
			$this->registro_model->insertarUsuario($nombre,$apellidos,$edad,$sexo,$estado,$correo,$telefono,$curp,$curriculum,$ine,$contrasena,$vacante_id,$test);
		//redirect('table_view')
			redirect('Comenzar');
				}



			}
		}
		}

		
	}




}