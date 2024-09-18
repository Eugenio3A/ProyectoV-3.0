<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

	public function demo(){
		$this->load->view('inc/vistaslte/head');
		$this->load->view('inc/vistaslte/menu');
		$this->load->view('inc/vistaslte/test');
		$this->load->view('inc/vistaslte/footer');
	}

	public function curso()
	{
		if($this->session->userdata('login'))
		{
			$lista=$this->estudiante_model->listaestudiantes();
			$data ['alumnos']=$lista;

			$this->load->view('inc/head');
			$this->load->view('inc/menu');
			$this->load->view('lista',$data);
			$this->load->view('inc/footer');
			$this->load->view('inc/test');		
		}
		else
		{
			redirect('usuarios/index','refresh');
		}

	}

	public function inscribir()
	{
		if($this->session->userdata('login'))
		{ 
			$data['infocarreras']=$this->carrera_model->listaCarreras();
			
			$this->load->view('inc/head');
			$this->load->view('inc/menuGt');
			$this->load->view('inscribirform',$data);
			$this->load->view('inc/footer');
			$this->load->view('inc/pie');	
		}
		else
		{
			redirect('usuarios/panel','refresh');
		}
	}

	public function inscribirbd()
	{
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['familia']=strtoupper($_POST['familia']);
		$data['direccion']=strtoupper($_POST['direccion']);
		$data['telefono']=$_POST['telefono'];
		$id_vehiculo=$_POST['id_vehiculo'];

		$this->carrera_model->inscribirestudiante($id_vehiculo,$data);
		redirect('estudiante/curso','refresh');
	}

	public function guest()
	{
		if($this->session->userdata('login'))
		{ 
			$this->load->view('inc/header');
			$this->load->view('panelguest');
			$this->load->view('inc/footer');
		}
	}

	public function deshabilitados()
	{
		$lista=$this->estudiante_model->listadeshabilitados();
		$data['alumnos']=$lista;

		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('deshabilitados',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}

	public function agregar()
	{
		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('formulario');
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}

	public function agregarbd()
	{
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['primerApellido']=strtoupper($_POST['primerApellido']);
		$data['segundoApellido']=strtoupper($_POST['segundoApellido']);
		$data['cuenta']=($_POST['cuenta']);
		$data['contrasenia']=md5($_POST['contrasenia']);
		$data['direccion']=strtoupper($_POST['direccion']);
		$data['telefono']=$_POST['telefono'];

		$this->estudiante_model->agregarestudiante($data);
		redirect('estudiante/curso','refresh');
	}

	public function eliminarbd()
	{
		$id_usuario=$_POST['id_usuario'];
		$this->estudiante_model->eliminarestudiante($id_usuario);
		redirect('estudiante/curso','refresh');
	}

	public function modificar()
	{
		$id_usuario=$_POST['id_usuario'];
		$data['infoestudiante']=$this->estudiante_model->recuperarestudiante($id_usuario);

		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('formmodificar',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}

	public function modificarbd()
	{
		$id_usuario=$_POST['id_usuario'];
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['primerApellido']=strtoupper($_POST['primerApellido']);
		$data['segundoApellido']=strtoupper($_POST['segundoApellido']);
		$data['cuenta']=strtoupper($_POST['cuenta']);
		$data['contrasenia']=md5($_POST['contrasenia']);
		$data['direccion']=strtoupper($_POST['direccion']);
		$data['telefono']=$_POST['telefono'];

		$this->estudiante_model->modificarestudiante($id_usuario,$data);
		redirect('estudiante/curso','refresh');
	}

	public function deshabilitarbd()
	{
		$id_usuario=$_POST['id_usuario'];
		$data['activo']='0';

		$this->estudiante_model->modificarestudiante($id_usuario,$data);
		redirect('estudiante/curso','refresh');
	}

	public function habilitarbd()
	{
		$id_usuario=$_POST['id_usuario'];
		$data['activo']='1';

		$this->estudiante_model->modificarestudiante($id_usuario,$data);
		redirect('estudiante/deshabilitados','refresh');
	}

}
