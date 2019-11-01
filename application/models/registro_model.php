<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registro_model extends CI_Model{

	function __construct() {
		parent::__construct();
		//$this->load->database();
	}

	public function RevisarCurp($param){
		$string = '#<td><div align="left">(.*?)</div></td>#';
		//liga de webservice de consulta curp
		$url = 'http://www.renapo.sep.gob.mx/wsrenapo/MainControllerParam';
		//la variable con la curp debe de ser enviada forsozamente como string como se muestra en $post
		$post = "curp=$param";

		$ch = curl_init();
        // set url
		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        //return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
		$output = curl_exec($ch);

        // close curl resource to free up system resources
		curl_close($ch);
		//verificar si la respuesta no viene vacía
		if($output!=null){

			//verifica si los valores retornados por el output tengan estructura de tabla
			if (preg_match_all($string, $output, $matches)) {

				//el método strip_tags borra todo el contenido de un string que no concuerde con un parámetro para comparación
				$nombre = $matches[0][25];
				$ap_paterno = $matches[0][1];
				$ap_materno = $matches[0][3];
				$fecha_nac = $matches[0][15];
				//obtención de datos para procesar edad a partir de fecha de nacimiento
				$dias = substr((strip_tags($fecha_nac)), 0, 2);
				$meses = substr((strip_tags($fecha_nac)), 3, 2);
				$annos = substr((strip_tags($fecha_nac)), 6, 4);
				//variable con cifra para procesar edad
				$total = $annos.$meses.$dias;
				//obtención de datos para procesar edad a partir de fecha actual
				$dias2 = substr(date('Y-m-d'), 8, 2);
				$meses2 = substr(date('Y-m-d'), 5, 2);
				$annos2 = substr(date('Y-m-d'), 0, 4);
				//variable con cifra para procesar edad
				$total2 = $annos2.$meses2.$dias2;
				//variable con resultado de la edad
				$total3 = intval($total)-intval($total2);
				$genero = $matches[0][33];
				$estado = $matches[0][9];
				$estado2 = strip_tags($estado);
				//array con datos a retornar
				$intento1 = array (
					'nombre' => strip_tags($nombre),
					'apellidos' => strip_tags($ap_paterno)." ".strip_tags($ap_materno),
					'genero' => strip_tags($genero),
					'estado' => $estado2,
					'edad' => substr($total3, 1, 2)
				);

				return $intento1;

			} else {
				$intento1 = "datos incorrectos";	
				return $intento1;
			}
		} else {
			$intento1 = "no hay nada";
			return $intento1;
		}
	}


	public function verVacantes(){
		$query = $this->db->query("select * from vacante;");
		return $query->result();
	}

	public function insertarUsuario($nombre,$apellido,$edad,$sexo,$estado,$correo,$telefono,$curp,$curriculum,$ine,$contrasena,$vacante_id,$test){



		$arrayDatos = array(
			'nombre' => $nombre,
			'apellidos' => $apellido,
			'edad' => $edad,
			'sexo' => $sexo,
			'estado' => $estado,
			'correo' => $correo,
			'telefono' => $telefono,
			'curp' => $curp,
			'curriculum' => $curriculum,
			'ine' => $ine,
			'contrasena' => $contrasena,
			'vacante_id' => $vacante_id,
			'test' => 0
			 );

		$this->db->insert ('usuarios', $arrayDatos);
		$s_usuario = array(
						's_correo' => $correo,
						's_telefono' => $telefono,
						's_nombre' => $nombre,
						's_id'=> $this->db->insert_id(),
						's_tipo' => 'usuario'
					);

		$this->session->set_userdata($s_usuario);
	}

	
}

?>


