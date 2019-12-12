<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common {

    protected $CI;

    function __construct(){
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
	}
	
	function mostrarFrontend($role = '-1', &$frontend, $data){
		$header = $this->CI->load->view('layouts/header', $data, true);
		switch (intval($role)) {
			case 1:
				$menu = $this->CI->load->view('/layouts/menus/administrador', $data, true);
			break;
			case 2:
				$menu = $this->CI->load->view('/layouts/menus/responsable', $data, true);
			break;
			case 3:
				$menu = $this->CI->load->view('/layouts/menus/instructor', $data, true);
			break;
			default: 
				$menu = "";
			break;
		}
		$topmenu = $this->CI->load->view('layouts/topmenu', ['menu' => $menu], true);
		$footer = $this->CI->load->view('layouts/footer', $data, true);
		$copyright = $this->CI->load->view('layouts/copyright', $data, true);
		$frontend['header'] = $header;
		$frontend['menu'] = $menu;
		$frontend['topmenu'] = $topmenu;
		$frontend['copyright'] = $copyright;
		$frontend['footer'] = $footer;
	}


	function restringirVista($restringir = array(-1), $nivel = -1){
		foreach ($restringir as $value) {
			if(intval($value) == intval($nivel)){
				return true;
			}
		}

		return false;
	} 

	function isset_string($string){
		return ((!isset($string)) || $string == "") ? "" : $string;
	}
}