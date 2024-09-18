<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConducLog_model extends CI_Model {

	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('Conductores');
		$this->db->where('cuenta',$login);
		$this->db->where('contrasenia',$password);
		$this->db->where('disponible','1');
		return $this->db->get(); //devuelve el resultado
	}
}


