<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor_model extends CI_Model {

	public function listaconductores()
	{
		$this->db->select('*');
		$this->db->from('Conductores');
		$this->db->where('disponibilidad','1');
		return $this->db->get(); //devuelve el resultado
	}

	public function listadeshabilitados1()
	{
		$this->db->select('*');
		$this->db->from('Conductores');
		$this->db->where('disponibilidad','0');
		return $this->db->get(); //devuelve el resultado
	}

	public function agregarconductores($data)
	{
		$this->db->insert('Conductores',$data);
	}

	public function eliminarconductores($id_conductor)
	{
		$this->db->where('id_conductor',$id_conductor);
		$this->db->delete('Conductores');
	}

	public function recuperarconductores($id_conductor)
	{
		$this->db->select('*');
		$this->db->from('Conductores');
		$this->db->where('id_conductor',$id_conductor);
		return $this->db->get(); //devuelve el resultado
	}

	public function modificarconductores($id_conductor,$data)
	{
		$this->db->where('id_conductor',$id_conductor);
		$this->db->update('Conductores',$data);
	}
}
