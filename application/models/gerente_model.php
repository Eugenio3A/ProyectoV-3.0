<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerente_model extends CI_Model {

	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('Gerente');
		$this->db->where('login',$login);
		$this->db->where('codigo',$password);
		return $this->db->get(); //devuelve el resultado
	}
}



