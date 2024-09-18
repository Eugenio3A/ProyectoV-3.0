<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservas extends CI_Controller {

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
			$listaRes=$this->Resevas_model->listaestudiantes();
			$data ['alumnos']=$listaRes;

			$this->load->view('inc/head');
			$this->load->view('inc/menuGt');
			$this->load->view('$listaRes',$data);
			$this->load->view('inc/footer');
			$this->load->view('inc/pie');		
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
		$data['fechaServicio']=strtoupper($_POST['fechaServicio']);
		$data['origen']=strtoupper($_POST['origen']);
		$data['destino']=strtoupper($_POST['destino']);
		$data['precio']=$_POST['precio'];
		$id_vehiculo=$_POST['id_vehiculo'];

		$this->carrera_model->inscribirestudiante($id_vehiculo,$data);
		redirect('Reservas/curso','refresh');
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
		$listaRes=$this->Resevas_model->listadeshabilitados();
		$data['alumnos']=$listaRes;

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
		$data['familia']=strtoupper($_POST['familia']);
		$data['direccion']=strtoupper($_POST['direccion']);
		$data['telefono']=$_POST['telefono'];

		$this->Resevas_model->agregarestudiante($data);
		redirect('Reservas/curso','refresh');
	}

	public function eliminarbd()
	{
		$id_reserva=$_POST['id_reserva'];
		$this->Resevas_model->eliminarestudiante($id_reserva);
		redirect('Reservas/curso','refresh');
	}

	public function modificar()
	{
		$id_reserva=$_POST['id_reserva'];
		$data['infoestudiante']=$this->Resevas_model->recuperarestudiante($id_reserva);

		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('formmodificar',$data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}

	public function modificarbd()
	{
		$id_reserva=$_POST['id_reserva'];
		$data['nombre']=strtoupper($_POST['nombre']);
		$data['familia']=strtoupper($_POST['familia']);
		$data['direccion']=strtoupper($_POST['direccion']);
		$data['telefono']=$_POST['telefono'];

		$this->Resevas_model->modificarestudiante($id_reserva,$data);
		redirect('Reservas/curso','refresh');
	}

	public function deshabilitarbd()
	{
		$id_reserva=$_POST['id_reserva'];
		$data['estado']='completada';

		$this->Resevas_model->modificarestudiante($id_reserva,$data);
		redirect('Reservas/curso','refresh');
	}

	public function habilitarbd()
	{
		$id_reserva=$_POST['id_reserva'];
		$data['estado']='pendiente';

		$this->Resevas_model->modificarestudiante($id_reserva,$data);
		redirect('Reservas/deshabilitados','refresh');
	}

}
