<?php

Class Session_cont extends  CI_Controller{
	
	function  __construct(){
		parent::__construct();
		
	//	$this->session->sess_destroy();}/*
	
		
// 		if($this -> session -> userdata('logged_in')){
// 			$session_data = $this -> session -> userdata('logged_in');
//  		$data1 = $session_data['email'];

// 		}//end if logged_in
		
// 		else{
// 			$this -> load -> view('header');
// 			$this -> load -> view('login_view');
// 			$this -> load -> view('footer');
// 		}//end else
	if($this -> session -> userdata('logged_in') == FALSE){
		$this -> load -> view('header');
		$this -> load -> view('login_view');
		$this -> load -> view('footer');
	}
	}//end construct
		
	
	function index(){
	}
	
}

?>