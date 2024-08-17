<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$lista=$this->estudiante_model->listaestudiantes();
		$data['alumnos']=$lista;
		$this->load->view('welcome_message',$data);
	}

	public function pruebabd()
	{
		$query=$this->db->get('usuarios');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
	
	public function curso()
	{
		$lista=$this->estudiante_model->listaestudiantes();
		$data['alumnos']=$lista;

		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('welcome_message',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');

	}

	public function index2()
	{
		$lista2=$this->conductor_model->listaconductores();
		$data['alumnos']=$lista2;
		$this->load->view('welcome_message2',$data);
	}

	public function pruebabd2()
	{
		$query=$this->db->get('conductores');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
	
	public function curso2()
	{
		$lista2=$this->conductor_model->listaconductores();
		$data['alumnos']=$lista2;

		$this->load->view('inc/head');
		$this->load->view('inc/menucond');
		$this->load->view('welcome_message2',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');

	}
	

	public function index3()
	{
		$lista3=$this->admin_model->listaconductores();
		$data['alumnos']=$lista3;
		$this->load->view('welcome_message3',$data);
	}

	public function pruebabd3()
	{
		$query=$this->db->get('administrador');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
	
	public function curso3()
	{
		$lista3=$this->admin_model->listaconductores();
		$data['alumnos']=$lista3;

		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('welcome_message3',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');

	}
	
}
