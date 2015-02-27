<?php
class Usuarios_cont extends CI_Controller {
	function __construct() {
		parent::__construct ();
		
		//$this->load->database ();
	} // end construct
	
	function index() {
		$this->load->model ( 'Usuario_mod' );
					
		$this->load->view ( 'header' );
		$this->load->view ( 'user/perfil_view' );
		$this->load->view ( 'footer' );
		
	} // end index

	function modificacion() {
		$this -> load -> model ('Usuario_mod');
		
		$data['usuario'] = $this -> Usuario_mod -> consulta ($this -> session -> userdata('id'));
		$this->load->view ( 'header' );
		$this->load->view ( 'user/perfil_modificar_view', $data );
		$this->load->view ( 'footer' );
	}
	
	function check_iguales($clave, $clave2) {
		return $clave == $clave2;
	}	
	
	function modificacion_form(){
		$this -> load -> model ('Usuario_mod');
	
		// reglas de validacion
		$this->form_validation->set_rules ( 'nombre', 'Nombre', 'trim|required|min_length[4]|maxlength[20]' );
		$this->form_validation->set_rules ( 'apellido', 'Apellido', 'trim|required|min_length[4]|maxlength[20]' );
		$this->form_validation->set_rules ( 'email', 'Email', 'trim|required|min_length[4]|maxlength[10]' );
		$this->form_validation->set_rules ( 'clave_nueva', 'Clave_nueva', 'trim|required' );
		$this->form_validation->set_rules ( 'clave', 'Clave', 'trim|required|callback_check_iguales['.$this->input->post('clave2').']' );
	
		$result_valid = $this->form_validation->run();
	
		if ($result_valid == false) {
			// cargo la vista
// 			$usuario = $this -> Usuario_mod -> consulta($this->input->post ( 'id' ));
// 			$user['usuario'] =  $usuario[0];
			
			$this->load->view ( 'header' );
			$this->load->view ( 'user/fallo' );
			$this->load->view ( 'footer' );
		} else {
			$data = array (
					'id' => $this->input->post ( 'id' ),
					'nombre' => $this -> input -> post ( 'nombre' ),
					'apellido' => $this -> input -> post ( 'apellido' ),
					'email' => $this -> input -> post ( 'email' ),
					'nacimiento' => $this -> input -> post ( 'nacimiento' ),
					'clave' => $this -> input -> post( 'clave_nueva' ),
					'imagen' => $this -> session -> userdata('imagen'),
					'rol' => $this -> session -> userdata('rol')	
			);
			
			$result_modificacion = $this-> Usuario_mod -> modificacion ( $data );
			
			if ($result_modificacion) {
				$data['logged_in'] = true;
				
					$this -> session -> set_userdata($data);
				
				$usuario['usuario'] = (object) $data;
				$this -> load -> view('header');
				$this -> load -> view('user/perfil_view');
				$this -> load -> view('footer');
			} else {
				$this -> load -> view('header');
				$this -> load -> view('fallo');
				$this -> load -> view('footer');
			}//else if result_modificacion
		}//else if result_valid
	}//metodo modificacion form
		
	function modificar_imagen(){
		$this->load->model ( 'Usuario_mod' );
		$this -> load-> helper(array('file'));

		//MANTENER LOGUEO!!! ;D
		$usuario = $this -> Usuario_mod -> consulta($this -> session -> userdata('id'));
		
		$config['upload_path'] = 'assets/user_img/';
		$config['file_name'] = $this -> session -> userdata('id');
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
			
		$this -> load -> library('upload', $config);
			
		$archivo = $this -> input -> post ('userfile');
					
		if (! $this -> upload -> do_upload()){

			$data['error'] = $this->upload->display_errors();
			$this -> load -> view('header');
			$this -> load -> view('user/fallo', $data);
			
			$this -> load -> view('footer');
			
		}else{
			$data = array('upload_data' => $this -> upload -> data());

			$usuario -> imagen = 'assets/user_img/' . $data['upload_data']['file_name'];
			
 			$result_modificacion = $this -> Usuario_mod -> modificacion_img ( $usuario );
			
 			$usuario -> logged_in = true;		
			$this -> session -> set_userdata($usuario);
 			$this -> load -> view('header');
			$this -> load -> view('user/perfil_view');
			$this -> load -> view('footer');
		}
	}//madificar_imagen	

	function invitaciones($id = NULL){
		$this -> load -> model ( 'Evento_mod' );
			
		$data['evento'] = $this -> Evento_mod -> consulta ( $id );
		$data['lugar'] = $this -> Evento_mod -> listar_canchas();
		
		$mail_ok = $this -> Evento_mod -> enviar_email($data);
		if ($mail_ok) {
			echo "funciono el mail";
			die();
		}
	}//end invitaciones

	function mis_eventos(){
		$this->load->model ( 'Usuario_mod' );
			
		$this->load->view ( 'header' );
		$this->load->view ( 'user/mis_eventos' );
		$this->load->view ( 'footer' );
	}
	
	function eventos_sucedidos(){
		$this->load->model ( 'Usuario_mod' );
		$this -> load -> model ( 'Evento_mod' );
		
		$x['evento'] = $this -> Evento_mod -> listar();
		
		$this->load->view ( 'header' );
		$this->load->view ( 'user/eventos_sucedidos', $x );
		$this->load->view ( 'footer' );
	}
	
	function eventos_proximos(){
		$this->load->model ( 'Usuario_mod' );
		$this -> load -> model ( 'Evento_mod' );
	
		$x['evento'] = $this -> Evento_mod -> listar();
	
		$this->load->view ( 'header' );
		$this->load->view ( 'user/eventos_proximos', $x );
		$this->load->view ( 'footer' );
	}
	
	function eventos_pendientes(){
		$this->load->model ( 'Usuario_mod' );
		$this -> load -> model ( 'Evento_mod' );
	
		$x['evento'] = $this -> Evento_mod -> listar();
	
		$this->load->view ( 'header' );
		$this->load->view ( 'user/eventos_pendientes', $x );
		$this->load->view ( 'footer' );
	}
}//end class usuario_cont
	?> 
	
	
	
	
	
	
	
	