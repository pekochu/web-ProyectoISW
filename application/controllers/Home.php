<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->login) redirect('login', 'refresh');
	}

	public function index()	{
		$session = array();
		$session = $this->session->login;
        $session['title'] = "Inicio";
        $frontend = array();

        // $nivel = $session['acceso_admin'];
        # Vistas
        $frontend['header'] = $this->load->view('layouts/header', $session, true);
        $frontend['footer'] = $this->load->view('layouts/footer', $session, true);
		
		$this->load->view('home', $frontend);
	}
}
