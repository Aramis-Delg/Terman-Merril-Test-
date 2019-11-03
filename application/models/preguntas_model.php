<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class preguntas_model extends CI_Model{

	function __construct() {
		parent::__construct();
		//$this->load->database();
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

	/*******************************Comienza serie 2****************************************/

		public function verSerie2(){
		$query = $this->db->query("select * from preguntas where segmento_id=2");
		return $query->result();
	}

	public function verSerieb2(){
		$query = $this->db->query("select id from preguntas where segmento_id=2");
		return $query->result();
	}

	public function insertSerieb2($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb2Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango2($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=2;");
		return $query->result();
	}

	public function insertTotal2($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 2


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas2(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}


	/********************************term Serie 2****************************************************/

		/*******************************Comienza serie 3****************************************/

		public function verSerie3(){
		$query = $this->db->query("select * from preguntas where segmento_id=3");
		return $query->result();
	}

	public function verSerieb3(){
		$query = $this->db->query("select id from preguntas where segmento_id=3");
		return $query->result();
	}

	public function insertSerieb3($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb3Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango3($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=3;");
		return $query->result();
	}

	public function insertTotal3($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 3


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas3(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}


	/********************************term Serie 2****************************************************/

	public function verSerieb4(){
		$query = $this->db->query("select id from preguntas where segmento_id=4");
		return $query->result();
	}

	public function insertTotal4($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 4


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}

		public function selectRango4($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=4;");
		return $query->result();
	}

		public function verRespuestas4(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}



		public function insertSerieb4Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb4($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}
	

		public function verSerie4(){
		$query = $this->db->query("select * from preguntas where segmento_id=4");
		return $query->result();
	}



		/*******************************Comienza serie 5****************************************/

		public function verSerie5(){
		$query = $this->db->query("select * from preguntas where segmento_id=5");
		return $query->result();
	}

	public function verSerieb5(){
		$query = $this->db->query("select id from preguntas where segmento_id=5");
		return $query->result();
	}

	public function insertSerieb5($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb5Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango5($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=5;");
		return $query->result();
	}

	public function insertTotal5($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 5


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas5(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}

	public function verCorrectas5($id_pregunta){
		$query = $this->db->query("select valor from respuestas where id_pregunta=".$id_pregunta." AND puntos=1;");
		return $query->result();
	}

	/********************************term Serie 5****************************************************/


	/*******************************Comienza serie 6****************************************/
				public function verSerie6(){
		$query = $this->db->query("select * from preguntas where segmento_id=6");
		return $query->result();
	}

	public function verSerieb6(){
		$query = $this->db->query("select id from preguntas where segmento_id=6");
		return $query->result();
	}

	public function insertSerieb6($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb6Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango6($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=6;");
		return $query->result();
	}

	public function insertTotal6($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 6


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas6(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}

		
	/********************************term Serie 6****************************************************/


			/*******************************Comienza serie 7****************************************/
				public function verSerie7(){
		$query = $this->db->query("select * from preguntas where segmento_id=7");
		return $query->result();
	}

	public function verSerieb7(){
		$query = $this->db->query("select id from preguntas where segmento_id=7");
		return $query->result();
	}

	public function insertSerieb7($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb7Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango7($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=7;");
		return $query->result();
	}

	public function insertTotal7($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 7


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	
		public function verRespuestas7(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}

			/*******************************Comienza serie 8****************************************/

		public function verSerie8(){
		$query = $this->db->query("select * from preguntas where segmento_id=8");
		return $query->result();
	}

	public function verSerieb8(){
		$query = $this->db->query("select id from preguntas where segmento_id=8");
		return $query->result();
	}

	public function insertSerieb8($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb8Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango8($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=8;");
		return $query->result();
	}

	public function insertTotal8($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 8


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	

	public function verRespuestas8(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}


	/********************************term Serie 8****************************************************/
		
	/*******************************Comienza serie 9****************************************/
		public function verSerie9(){
		$query = $this->db->query("select * from preguntas where segmento_id=9");
		return $query->result();
	}

	public function verSerieb9(){
		$query = $this->db->query("select id from preguntas where segmento_id=9");
		return $query->result();
	}

	public function insertSerieb9($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert ('resp_usuario', $arrayDatos);
		
	}

	public function insertSerieb9Total($result,$idUsuario,$idPregunta){

		$arrayDatos = array(
			'respuesta' => $result,
			'id_usuario' => $idUsuario,
			'id_pregunta' => $idPregunta

			 );

		$this->db->insert('resp_usuario', $arrayDatos);
		
	}

	public function selectRango9($puntos){
		//SELECT `id_rango`, `nombre`, `min`, `max`, `segmento_id` FROM `rango` WHERE $puntos>=min AND $puntos<=max AND segmento_id=1;
		$query = $this->db->query("select id_rango from rango where ".$puntos." >= min AND ".$puntos." <= max AND segmento_id=9;");
		return $query->result();
	}

	public function insertTotal9($puntos,$id_usuario,$id_rango){
		$arrayDatos = array(
			'puntos' => $puntos,
			'id_usuario' => $id_usuario,
			'id_rango' => $id_rango,
			'id_segmento' => 9


			 );

		$this->db->insert ('total_segmento', $arrayDatos);
	}
	
		public function verRespuestas9(){
		$query = $this->db->query("select * from respuestas;");
		return $query->result();
	}



/***********************************************Serie 10**********************/


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

?>


