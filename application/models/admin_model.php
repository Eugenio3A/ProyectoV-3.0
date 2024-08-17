<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function listaconductores()
	{
		$this->db->select('*');
		$this->db->from('Administrador');
		$this->db->where('activo','1');
		return $this->db->get(); //devuelve el resultado
	}

	public function listadeshabilitados1()
	{
		$this->db->select('*');
		$this->db->from('Administrador');
		$this->db->where('activo','0');
		return $this->db->get(); //devuelve el resultado
	}

	public function agregarconductores($data)
	{
		$this->db->insert('Administrador',$data);
	}

	public function eliminarconductores($idAdmin)
	{
		$this->db->where('idAdmin',$idAdmin);
		$this->db->delete('Administrador');
	}

	public function recuperarconductores($idAdmin)
	{
		$this->db->select('*');
		$this->db->from('Administrador');
		$this->db->where('idAdmin',$idAdmin);
		return $this->db->get(); //devuelve el resultado
	}

	public function modificarconductores($idAdmin,$data)
	{
		$this->db->where('idAdmin',$idAdmin);
		$this->db->update('Administrador',$data);
	}
}
