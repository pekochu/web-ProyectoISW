<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->login) redirect('home', 'location');
	}

	public function index() {
		$email = $this->input->post('email');
		if(!isset($email)){
			$this->load->view('login/self');
		}else{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

			if(!$this->form_validation->run()){
				$this->load->view('login/self');
			}else{
				redirect('home', 'location');
			}
		}
		
	}

	public function forgotten() {
		$this->load->view('login/forgotten');
	}

	public function recover() {
		# TO DO
		$TOKEN = $this->input->get('token');
		if(!isset($TOKEN)) redirect('login');

		$this->load->view('login/self');
	}

	// Callback
	function check_database($password){
		# Validar usuario y contraseña
		$this->load->model('Users', 'USR', true);
		$email = $this->input->post('email');
		$date = date("Y-m-d H:i:s", strtotime("now"));

		# Consultar
		$userMatch = $this->USR->matchUsuario(mb_strtoupper(trim($email)));
		if($userMatch && mb_strtoupper(trim($userMatch['password'])) == mb_strtoupper(trim($password))){
			$this->session->login = $userMatch;
			return true;
		}else{
			$this->form_validation->set_message('check_database', 'Correo o contraseña incorrectos');
			return false;
		}
	}
}
