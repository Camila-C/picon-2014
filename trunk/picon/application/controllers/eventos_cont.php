<?php
require_once('session_cont.php');
Class Eventos_cont extends Session_cont{
	
	function __construct() {
		parent::__construct ();
		$this->load->helper ( 'form' );
		if ($this -> session -> userdata('rol') != "administrador"){
			$this -> load -> view('header');
			$this -> load -> view('error_sesion');
			$this -> load -> view('footer');
		}
	}
	
	public function index() {
		// cargo la vista
		$this -> load -> model('Evento_mod');
		
		$x['evento'] = $this -> Evento_mod -> listar();
		
		if ($x != false){
			$this -> load -> view('header');
			$this -> load -> view('evento/body_listar', $x);
			$this -> load -> view('footer');
		}
		else {
			$this -> load -> view('header');
			$this -> load -> view('fallo');
			$this -> load -> view('footer');
		}	
	}// index

}//clase


?>