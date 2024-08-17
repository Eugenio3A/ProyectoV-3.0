<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

	public function listaestudiantes()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('activo','1');
		return $this->db->get(); //devuelve el resultado
	}

	public function listadeshabilitados()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('activo','0');
		return $this->db->get(); //devuelve el resultado
	}

	public function agregarestudiante($data)
	{
		$this->db->insert('usuarios',$data);
	}

	public function eliminarestudiante($id_usuario)
	{
		$this->db->where('id_usuario',$id_usuario);
		$this->db->delete('usuarios');
	}

	public function recuperarestudiante($id_usuario)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('id_usuario',$id_usuario);
		return $this->db->get(); //devuelve el resultado
	}

	public function modificarestudiante($id_usuario,$data)
	{
		$this->db->where('id_usuario',$id_usuario);
		$this->db->update('usuarios',$data);
	}
}
