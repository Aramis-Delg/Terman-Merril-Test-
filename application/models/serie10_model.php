<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class serie10_model extends CI_Model{

	function __construct() {
		parent::__construct();
		
	}

				public function verSerie10(){
		$query = $this->db->query("select * from preguntas where segmento_id=10");
		return $query->result();
	}

	public function verSerieb10(){
		$query = $this->db->query("select id from preguntas where segmento_id=10");
		return $query->result();
	}

	public function insertSerieb10($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb10Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango10($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=10;");
		return $query->result();
	}

	public function insertTotal10($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 10


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas10(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}

	public function verCorrectas10($id_pregunta){
		$query = $this->db->query("select valor from respuestas where id_pregunta=".$id_pregunta." AND puntos=1;");
		return $query->result();
	}

}