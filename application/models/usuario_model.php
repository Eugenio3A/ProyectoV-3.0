<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('Usuarios');
		$this->db->where('cuenta',$login);
		$this->db->where('contrasenia',$password);
		$this->db->where('activo','1');
		return $this->db->get(); //devuelve el resultado
	}
}


