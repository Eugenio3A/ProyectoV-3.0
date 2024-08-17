<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    // Constructor para cargar el modelo
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model'); // Carga el modelo conductor_model
    }

    public function demo()
    {
        $this->load->view('inc/vistaslte/head');
        $this->load->view('inc/vistaslte/menu');
        $this->load->view('inc/vistaslte/test');
        $this->load->view('inc/vistaslte/footer');
    }

    public function curso()
    {
        if($this->session->userdata('login'))
        {
            $lista2 = $this->admin_model->listaconductores();
            $data['alumnos'] = $lista2;

            $this->load->view('inc/head');
            $this->load->view('inc/menucond');
            $this->load->view('lista2', $data);
            $this->load->view('inc/footer');
            $this->load->view('inc/pie');        
        }
        else
        {
            redirect('gerentpro/index', 'refresh');
        }
    }

    public function deshabilitados()
    {
        $lista2 = $this->admin_model->listadeshabilitados1();
        $data['alumnos'] = $lista2;

        $this->load->view('inc/head');
        $this->load->view('inc/menucond');
        $this->load->view('deshabilconduc', $data);
        $this->load->view('inc/footer');
        $this->load->view('inc/pie');
    }

    public function agregar()
    {
        $this->load->view('inc/head');
        $this->load->view('inc/menucond');
        $this->load->view('formconductor');
        $this->load->view('inc/footer');
        $this->load->view('inc/pie');
    }

    public function agregarbd2()
    {
        $data['login'] = strtoupper($_POST['login']);
        $data['codigo'] = strtoupper($_POST['codigo']);
        $data['tipo'] = strtoupper($_POST['tipo']);

        $this->admin_model->agregarconductores($data);
        redirect('administrador/curso', 'refresh');
    }

    idAdmin INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(255) NOT NULL DEFAULT '',
  codigo VARCHAR(255) NOT NULL DEFAULT '',
  tipo VARCHAR(255) NOT NULL DEFAULT '',
  activo BOOLEAN DEFAULT TRUE,
  fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  fechaActualizacion TIMESTAMP,
  id_usuario SMALLINT,

    public function eliminarbd()
    {
        $idAdmin = $_POST['idAdmin'];
        $this->admin_model->eliminarconductores($idAdmin);
        redirect('administrador/curso', 'refresh');
    }

    public function modificar()
    {
        $idAdmin = $_POST['idAdmin'];
        $data['infoconductor'] = $this->admin_model->recuperarconductores($idAdmin);

        $this->load->view('inc/head');
        $this->load->view('inc/menucond');
        $this->load->view('formmodicond', $data);
        $this->load->view('inc/footer');
        $this->load->view('inc/pie');
    }

    public function modificarbd()
    {
        $idAdmin = $_POST['idAdmin'];
        $data['login'] = strtoupper($_POST['login']);
        $data['codigo'] = strtoupper($_POST['codigo']);
        $data['tipo'] = strtoupper($_POST['tipo']);

        $this->admin_model->modificarconductores($idAdmin, $data);
        redirect('administrador/curso', 'refresh');
    }

    public function deshabilitarbd()
    {
        $idAdmin = $_POST['idAdmin'];
        $data['activo'] = '0';

        $this->admin_model->modificarconductores($idAdmin, $data);
        redirect('administrador/curso', 'refresh');
    }

    public function habilitarbd()
    {
        $idAdmin = $_POST['idAdmin'];
        $data['activo'] = '1';

        $this->admin_model->modificarconductores($idAdmin, $data);
        redirect('administrador/deshabilitados', 'refresh');
    }
}
