<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class serie1_model extends CI_Model{

	function __construct() {
		parent::__construct();
		
	}

	
		public function verSerie1(){
		$query = $this->db->query("select * from preguntas where segmento_id=1");
		return $query->result();
	}

	public function verSerieb1(){
		$query = $this->db->query("select id from preguntas where segmento_id=1");
		return $query->result();
	}

	public function insertSerieb1($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb1Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango1($puntos){
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=1;");
		return $query->result();
	}

	public function insertTotal1($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 1


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas1(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}



}