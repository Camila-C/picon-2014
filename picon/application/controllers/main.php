<?php
require_once('session_cont.php');
Class Main extends Session_cont{
	
	
	function  __construct(){
		parent::__construct();
	}
	
	function index(){
		
	}
	
	function logueado(){
		
		if ($this -> session -> userdata('rol') == "administrador"){
				
			$this -> load -> view('header');
			$this -> load -> view('admin/home_view_admin');
			$this -> load -> view('footer');
		}
		elseif ($this -> session -> userdata('rol') == "usuario"){
			
			$this -> load -> model ('Usuario_mod');
			$data = $this -> Usuario_mod -> mapa();
			
			$this -> load -> view('header');
			$this -> load -> view('user/principal', $data);
			$this -> load -> view('footer');
		}
		else { echo "error";
		die();
		}
		
		
	}//end logueado
	
	function desloguear(){
		$this->session->sess_destroy();
		$this -> load -> view('header');
		$this -> load -> view('login_view');
		$this -> load -> view('footer');
		
	}
	
	
}//end class main