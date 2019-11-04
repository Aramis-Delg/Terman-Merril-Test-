<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verificar extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('verificar_model');
	}
	public function index(){		
		if($this->session->userdata('s_validado')=='0'){

			
			$this->load->view('verificar');	
			
		}else{
			if($this->session->userdata('s_validado')=='1'){
				redirect('Comenzar');
			}else{
				redirect('login');
			}
		}
	}

	public function verificar(){
		$aux = $this->verificar_model->cargarCodigo($this->session->userdata('s_id'));
		$aux1 = $aux[0]->verificador;
		$aux2 = $this->input->post('codigo');
		if ($aux1==$aux2) {
			$this->verificar_model->validar($this->session->userdata('s_id'));
			$datos='Código correcto';
			$this->session->set_userdata('s_validado','1');
			echo $datos;

		}else{
			$datos='Código incorrecto';
			echo $datos;

		}
	}

	public function Reenviar(){
		$aux = $this->session->userdata('s_id');
		$aux2 = $this->input->post('correo');
		$to = $aux2;
		$ver1= $this->verificar_model->cargarCodigo($aux);
        // PHPMailer librería y objeto
        $this->load->library('phpmailer_lib');
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
		$mail->addAddress($to);


        // Email subject
		$mail->Subject = 'Innmortal - Codigo verificador';

        // Set email format to HTML
		$mail->isHTML(false);

        // Email body content
		$mailContent = 'Tu codigo de verificacion es: '.$ver1[0]->verificador;

		$mail->Body = $mailContent;

        // Send email
		if(!$mail->send()){
			echo 'Error: ' . $mail->ErrorInfo;
		}else{
			
			$datos='Enviado';
			echo $datos;
		}
	}

	public function actualizar(){
		$aux = $this->session->userdata('s_id');
		$aux2 = $this->input->post('correo');
		$this->verificar_model->actualizarCorreo($aux,$aux2);
		$to = $aux2;
		$ver1= $this->verificar_model->cargarCodigo($aux);
        // PHPMailer librería y objeto
        $this->load->library('phpmailer_lib');
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
		$mail->addAddress($to);


        // Email subject
		$mail->Subject = 'Innmortal - Codigo verificador';

        // Set email format to HTML
		$mail->isHTML(false);

        // Email body content
		$mailContent = 'Tu codigo de verificacion es: '.$ver1[0]->verificador;

		$mail->Body = $mailContent;

        // Send email
		if(!$mail->send()){
			echo 'Error: ' . $mail->ErrorInfo;
		}else{
			
			$datos='Correo actualizado';
			echo $datos;
		}
	}

	public function cerrar_sesion(){
		$this->session->sess_destroy();
		redirect('login');
	}

}