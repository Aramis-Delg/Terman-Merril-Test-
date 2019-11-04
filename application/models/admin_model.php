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

	/*public function ObtenerResultados($nombre){
		$query = $this->db->query("SELECT puntos, rango.nombre, segmentos.segmento FROM `total_segmento` JOIN rango on total_segmento.puntos>=rango.min and total_segmento.puntos<=rango.max and rango.segmento_id=total_segmento.id_segmento JOIN segmentos on total_segmento.id_segmento=segmentos.id WHERE total_segmento.id_usuario=".$nombre);
		//return $this->db->last_query();
		return $query->result();
	}*/
	public function ObtenerResultadosCI($nombre){
		$query = $this->db->query("SELECT rango.nombre, (SELECT c_i.punto_CI from c_i where punto=(select sum(puntos) from total_segmento where id_usuario=".$nombre.")) as CI FROM `total_segmento` JOIN rango on total_segmento.puntos>=rango.min and total_segmento.puntos<=rango.max and rango.segmento_id=total_segmento.id_segmento JOIN segmentos on total_segmento.id_segmento=segmentos.id WHERE total_segmento.id_usuario=".$nombre);
		//return $this->db->last_query();
		return $query->result();
	}


	public function obtenerCorreo($id){
		$query = $this->db->query("select correo from usuarios where id=".$id);
		return $query->result();
	}
}

?>
