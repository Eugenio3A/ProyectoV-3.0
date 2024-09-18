<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConductorLogin extends CI_Controller {

	// Constructor para cargar el modelo
    public function __construct()
    {
        parent::__construct();
        $this->load->model('conducLog_model'); // Carga el modelo conductor_model
    }

	public function index()
	{
		$this->load->view('inc/head');
		$this->load->view('logFormConductor');
		$this->load->view('inc/pie');
		
	}

	public function validarusuario()
	{
		$login=$_POST['cuenta'];
		$password=md5($_POST['contrasenia']);

		echo $login;
		echo $password;
		$consulta=$this->conducLog_model->validar($login,$password);

		echo $consulta->num_rows();

		if($consulta->num_rows()>0)
		{
			echo 'inicio de sesion';
			//usuario valido
			foreach($consulta->result() as $row)
			{

				$this->session->set_userdata('id_conductor',$row->id_conductor);
				$this->session->set_userdata('cuenta',$row->cuenta);
				$this->session->set_userdata('tipo',$row->tipo);
				$this->session->set_userdata('disponible',$row->disponible);

				redirect('conductorLogin/panel','refresh');
			}
		}
		else
		{
			//acceso incorrecto - volvemos al login
			redirect('conductorLogin/index','refresh');
		}
	}

	public function panel()
	{
		if($this->session->userdata('cuenta'))
		{
			redirect('estudiante/demo','refresh');
		}
		else
		{
			redirect('conductorLogin/index','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('conductorLogin/index','refresh');
	}

}


