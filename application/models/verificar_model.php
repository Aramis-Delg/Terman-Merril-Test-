<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verificar_model extends CI_Model{

	function __construct() {
		parent::__construct();
		
	}

	public function cargarCodigo($id){
		$query = $this->db->query('select verificador from usuarios where id='.$id);
		return $query->result();

	}

	public function validar($id){
		$this->db->set('validado',1);
		$this->db->where('id',$id);
		$this->db->update('usuarios');
	}

	public function actualizarCorreo($id,$correo){
		$this->db->set('correo',$correo);
		$this->db->where('id',$id);
		$this->db->update('usuarios');
		$this->session->set_userdata('s_correo', $correo);
	}
}