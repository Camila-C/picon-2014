<?php
class VerifyImg extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	function login() {
		$this->load->library ( 'form_validation' );
		
		// reglas de validacion
		
		$this->form_validation->set_rules ( 'userfile', 'Userfile', 'trim|required|min_length[4]|maxlength[10]' );
		
		if ($this->form_validation->run () == FALSE) {
			// no pasa validacion
			$this -> load -> view('header');
			$this -> load -> view('login_view');
			$this -> load -> view('footer');
			
		} else {
			redirect('main/logueado');
				
		}
		
	}// end funcion index
	
	function check_database(){
		
		$email = $this -> input ->post('email');
		$clave = $this -> input ->post('clave');
				
		$this -> load ->model('usuario_mod');
		$result = $this -> usuario_mod -> login($email, $clave);
		
		if($result != null){
			$sess_array = array();
			foreach ($result as $row){
				$sess_array = array(
					'id' => $row -> id,
					'nombre' => $row -> nombre,
					'apellido' => $row -> apellido,
					'nacimiento' => $row -> nacimiento,
					'clave' => $row -> clave,
					'email' => $row -> email,
					'rol' => $row -> rol,
					'imagen' => $row -> imagen
				);
				$this -> session -> set_userdata('logged_in', $sess_array);
			}//end foreach
				
					$this -> session -> set_flashdata('usuario', $sess_array);

			return true;
		}//end if
		else{
			$this -> form_validation -> set_message('check_database', 'Usuario o clave invalidos');
			return false;
		}
		
	}//end funtion check_database
	
}