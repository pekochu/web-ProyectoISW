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

        $role = $session['user_role_id'];
        # Vistas
        $this->common->mostrarFrontend($role, $frontend, $session);
		$this->load->view('home', $frontend);
	}

	public function info(){
		echo phpinfo();
	}
}
