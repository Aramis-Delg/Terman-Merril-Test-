<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('admin_model');
		
	}

	public function index(){
		$data['errorArch'] = '';
		$this->load->library('encryption');
		
		if($this->session->userdata('s_nombre')){
			if ($this->session->userdata('s_tipo')=='usuario') {
				redirect('Comenzar');
				
			}

			if ($this->session->userdata('s_tipo')=='administrador') {
				$data['Usuario'] = $this->login_model->consultaUsuario();
		//$data['Segmento'] = $this->login_model->consultaUsuario();
				$this->load->view('administrador',$data);
				
			}
		}else{
			redirect('login');
		}
		
	}

	public function CorreoAceptado(){
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');
		$aux=$this->uri->segment(3);
		//var_dump($aux);
		$to = $this->admin_model->obtenerCorreo($aux);
		
        // PHPMailer object
		$mail = $this->phpmailer_lib->load();

        // SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'luis.rescala@gmail.com';
		$mail->Password = 'shinratensei1992';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('luis.rescala@gmail.com', 'Luis Rescala');

        // Add a recipient
		//$mail->addAddress($to);
		$mail->addAddress($to[0]->correo);


        // Email subject
		$mail->Subject = 'Innmortal - Resultados';

        // Set email format to HTML
		$mail->isHTML(false);

        // Email body content
		$mailContent = 'Apreciado aspirante nos alegra poder darle seguimiento a su postulación, en breve nos comunicaremos con usted.';

		$mail->Body = $mailContent;

        // Send email
		if(!$mail->send()){
			return NULL;
		}else{
			$this->admin_model->Aceptado($to[0]->correo);
			redirect('Administrador');
			//método de actualizar
		}
	}
	
	public function CorreoRechazado(){
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');
		$aux=$this->uri->segment(3);
		$to = $this->admin_model->obtenerCorreo($aux);
		
        // PHPMailer object
		$mail = $this->phpmailer_lib->load();

        // SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'luis.rescala@gmail.com';
		$mail->Password = 'shinratensei1992';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('luis.rescala@gmail.com', 'Luis Rescala');

        // Add a recipient
        
		$mail->addAddress($to[0]->correo);


        // Email subject
		$mail->Subject = 'Innmortal - Resultados';

        // Set email format to HTML
		$mail->isHTML(false);

        // Email body content
		$mailContent = 'Apreciado aspirante le informamos que hemos concluido sus resultados, por lo que no cubre el perfil solicitado, en Innmortal le deseamos éxito en su trayecto de vida y carrera';

		$mail->Body = $mailContent;

        // Send email
		if(!$mail->send()){
			return NULL;
		}else{
			$this->admin_model->Rechazado($to[0]->correo);
			redirect('Administrador');
			//método de actualizar
		}
	}

	public function cerrar_sesion(){
		$this->session->sess_destroy();
		$data['errorArch'] = '';
		redirect('Login');
		//$this->load->view('login',$data);
	}

	


}
