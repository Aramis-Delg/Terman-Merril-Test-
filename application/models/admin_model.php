<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model{

	function __construct() {
		parent::__construct();
		//$this->load->database();
	}

	public function Aceptado($correo){
		$this->db->set('estatus', 'ACEPTADO');
		$this->db->where('correo', $correo);
		$this->db->update('usuarios');
		return true;
	}
	
	public function Rechazado($correo){
		$this->db->set('estatus', 'RECHAZADO');
		$this->db->where('correo', $correo);
		$this->db->update('usuarios');
		return true;
	}

	public function obtenerCorreo($id){
		$query = $this->db->query("select correo from usuarios where id=".$id);
		return $query->result();
	}
}

?>
