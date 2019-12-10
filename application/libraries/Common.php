<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common {

    protected $CI;

    function __construct(){
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
        $this->CI->load->library('session');
    }

    function mostrarHeader($nivel = '-1'){
		switch (intval($nivel)) {
			case 0:
				return '/templates/headers/admin';
				break;
			case 1:
				return '/templates/headers/dependencia';
				break;
			case 2:
				return '/templates/headers/institucion';
				break;
			case 3:
				return '/templates/headers/organizacion';
				break;
			case 4:
				return '/templates/headers/asociado';
				break;
			default:
				return '/templates/headers/desconocido';
				break;
		}
		return false;
	}
	
	function mostrarMenu($nivel = '-1'){
		switch (intval($nivel)) {
			case 0:
				return '/templates/menus/admin';
				break;
			case 1:
				return '/templates/menus/dependencia';
				break;
			case 2:
				return '/templates/menus/institucion';
				break;
			case 3:
				return '/templates/menus/organizacion';
				break;
			case 4:
				return '/templates/menus/asociado';
				break;
			default:
				return '/templates/menus/desconocido';
				break;
		}
		return false;
	}
    
    function mostrarFooter($nivel = '-1'){
		switch (intval($nivel)) {
            case -1:
                return '/templates/footers/general';
                break;
			default:
				return '/templates/footers/scripts';
				break;
		}
		return '/templates/footers/general';
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