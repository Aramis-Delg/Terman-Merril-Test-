<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

	function __construct() {
		parent::__construct();
		//$this->load->database();
	}

/*	public function login($usuario,$password){

		$this->db->where('correo',$usuario);
		$this->db->where('contrasena',$password);
		$q = $this->db->get('usuarios');
		if($q->num_rows()>0)
		{
			return true;

		}else{
			$this->db->where('telefono',$telefono);
			$this->db->where('nombre',$nombre);
			$this->db->where('correo',$usuario);
			$this->db->where('contrasena',$password);
		$p = $this->db->get('administrador');
			if($p->num_rows()>0){
				return true;

			}else{
				return false;
			}
		}
	}*/

	public function ingresar($usuario,$password){
			//$this->db->where('telefono',$telefono);
			//$this->db->where('nombre',$nombre);


		$this->db->where('correo',$usuario);
		$this->db->where('contrasena',$password);
		$resultado = $this->db->get('usuarios');
		$r=$resultado->row();
		if($resultado->num_rows()>0){

			$s_usuario = array(
				's_id' => $r->id,
				's_nombre' => $r->nombre,
				's_correo' => $r->correo,
				's_contrasena' => $r->contrasena,
				's_telefono' => $r->telefono,
				's_test' => $r->test,
				's_tipo' => 'usuario'
			);

			$this->session->set_userdata($s_usuario);
			if ($r->test==1) {
				return 3;
				
			}else{

			return 1;
			}
		}else{
			$this->db->where('correo',$usuario);
			$this->db->where('contrasena',$password);
			$resultado2 = $this->db->get('administrador');
				if ($resultado->num_rows()>0) {
					$r2=$resultado2->row();

					$s_usuario = array(
						's_correo' => $r2->correo,
						's_contrasena' => $r2->contrasena,
						's_nombre' => $r2->nombre,
						's_id'=> $r2->id,
						's_tipo' => 'administrador'
					);

					$this->session->set_userdata($s_usuario);
					return 2;
				}
				else{
					return 0;
				}

		}
	}

	public function checarCurp($curp){
		$this->db->where('curp',$curp);
		$q = $this->db->get('usuarios');
		if($q->num_rows()>0)
		{
			return 1;

		}else{
			return 0;
		}
	}


	public function testEstado($id){
		$query = $this->db->query("update usuarios set test = '1' where id=".$id);

	}

	public function consultaUsuario(){
		$query = $this->db->query("select * from usuarios");
		return $query->result();
	}

	public function verSegmentos($id){
		$query = $this->db->query("select * from total_segmento where id_usuario=".$id);
		return $query->result();
	}
}

?>