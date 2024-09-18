<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

	public function listaestudiantes()
	{
		$this->db->select('*');
		$this->db->from('Reservas');
		$this->db->where('estado','pendiente');
		return $this->db->get(); //devuelve el resultado
	}

	public function listadeshabilitados()
	{
		$this->db->select('*');
		$this->db->from('Reservas');
		$this->db->where('estado','completada');
		return $this->db->get(); //devuelve el resultado
	}

    public function listadeshabilitadosCans()
	{
		$this->db->select('*');
		$this->db->from('Reservas');
		$this->db->where('estado ','cancelada');
		return $this->db->get(); //devuelve el resultado
	}

	public function agregarestudiante($data)
	{
		$this->db->insert('Reservas',$data);
	}

	public function eliminarestudiante($id_reserva )
	{
		$this->db->where('id_reserva ',$id_reserva );
		$this->db->delete('Reservas');
	}

	public function recuperarestudiante($id_reserva )
	{
		$this->db->select('*');
		$this->db->from('Reservas');
		$this->db->where('id_reserva ',$id_reserva );
		return $this->db->get(); //devuelve el resultado
	}

	public function modificarestudiante($id_reserva ,$data)
	{
		$this->db->where('id_reserva ',$id_reserva );
		$this->db->update('Reservas',$data);
	}
}
