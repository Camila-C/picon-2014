<?php
require_once ('session_cont.php');

class Admin_cont extends Session_cont {
	
	function __construct() {
		parent::__construct ();
	} // end construct
	
	function index() {
		$this->load->view ( 'header' );
		$this->load->view ( 'admin/home_view_admin' );
		$this->load->view ( 'footer' );
	} // end index
	
	/* ADMINISTRACIÓN DE USUARIOS */
	
	function administrar_users() {
		$this->load->model ( 'Usuario_mod' );
		$x ['u'] = $this->Usuario_mod->listar ();
		if ($x != false) {
			$this->load->view ( 'header' );
			$this->load->view ( 'admin/user/listar_users', $x );
			$this->load->view ( 'footer' );
		}
	} // end administrar user
	
	function alta_user() {
		// da de alta en la base un usuario
		
		// VERIFICAR SI ES ADMINISTRADOR
		$this->load->model ( 'Usuario_mod' );
		
		// establezco las reglas de validación
		$this->form_validation->set_rules ( 'nombre', 'Nombre', 'required' );
		$this->form_validation->set_rules ( 'apellido', 'Apellido', 'required' );
		$this->form_validation->set_rules ( 'nacimiento', 'nacimiento', 'required' );
		$this->form_validation->set_rules ( 'email', 'E-mail', 'required' );
		$this->form_validation->set_rules ( 'clave', 'Clave', 'required' );
		$this->form_validation->set_rules ( 'rol', 'rol', 'required' );
		
		$result_valid = $this->form_validation->run ();
		
		if ($result_valid == false) {
			// cargo la vista
			$data ['rol'] = $this->Usuario_mod->listar_roles ();
			$this->load->view ( 'header' );
			$this->load->view ( 'admin/user/alta_user', $data );
			$this->load->view ( 'footer' );
		} else {
			$data = array (
					'nombre' => $this->input->post ( 'nombre' ),
					'apellido' => $this->input->post ( 'apellido' ),
					'nacimiento' => $this->input->post ( 'nacimiento' ),
					'email' => $this->input->post ( 'email' ),
					'clave' => $this->input->post ( 'clave' ),
					'rol' => $this->input->post ( 'rol' ),
					'imagen' => "assets/user_img/default.jpg" 
			);
			
			$result_alta = $this->Usuario_mod->alta ( $data );
			
			if ($result_alta) {
				$x ['u'] = $this->Usuario_mod->listar ();
				if ($x != false) {
					$this->load->view ( 'header' );
					$this->load->view ( 'admin/user/listar_users', $x );
					$this->load->view ( 'footer' );
				} // if x != false
			} else {
				$this->load->view ( 'header' );
				$this->load->view ( 'admin/fallo' );
				$this->load->view ( 'footer' );
			}
		}
	} // alta_user
	
	function confirmar_resetear_clave_user($id = NULL){
		$this -> load -> model ( 'Usuario_mod' );

		$user['usuario'] = $this -> Usuario_mod -> consulta($id);
	
		$this -> load -> view ( 'header' );
		$this -> load -> view ( 'admin/user/confirmar_resetear_clave_user', $user);
		$this -> load -> view ( 'footer' );
	}
	
	function resetear_clave($id = NULL){
		$this -> load -> model('Usuario_mod');
	
		$res = $this -> Usuario_mod -> resetear_clave ($id);
			
		if ($res){
			$x['u'] = $this -> Usuario_mod -> listar();
			if ($x != false){
				$this -> load -> view('header');
				$this -> load -> view('admin/user/listar_users', $x);
				$this -> load -> view('footer');
			} //if x != false
		}
		else {
			$this -> load -> view('header');
			$this -> load -> view('admin/fallo');
			$this -> load -> view('footer');
		}
	}
			
	function confirmar_baja_user($id = NULL) {
		$this -> load -> model ( 'Usuario_mod' );
		
		$user['usuario'] = $this -> Usuario_mod -> consulta($id);
	
		$this -> load -> view ( 'header' );
		$this -> load -> view ( 'admin/user/confirmar_eliminar_user', $user);
		$this -> load -> view ( 'footer' );
	}
		
	function baja_user($id = NULL) {
		// da de baja en la base un usuario
		$this->load->model ( 'Usuario_mod' );
	
		$result_baja = $this->Usuario_mod->baja ( $id );
	
		if ($result_baja) {
			$x ['u'] = $this->Usuario_mod->listar ();
			if ($x != false) {
				$this->load->view ( 'header' );
				$this->load->view ( 'admin/user/listar_users', $x );
				$this->load->view ( 'footer' );
			} // if x != false
		} else {
			$this->load->view ( 'header' );
			$this->load->view ( 'admin/fallo' );
			$this->load->view ( 'footer' );
		}
	}
	
		/**ADMINISTRACIÓN DE EVENTOS*/
	
	function administrar_eventos(){
		$this -> load -> model ( 'Evento_mod' );
		$x['evento'] = $this -> Evento_mod -> listar();
		
		$this -> load -> view('header');
		$this -> load -> view('admin/evento/listar_eventos',$x);
		$this -> load -> view('footer');
	
	}//end administrar evento
	
	public function alta_evento() {
		// da de alta en la base un evento
		$this ->load -> model ( 'Evento_mod' );
	
		// establezco las reglas de validación
		$this ->form_validation -> set_rules ( 'nombre', 'Nombre', 'required' );
		$this ->form_validation -> set_rules ( 'privado', 'Privado', 'required' );
		$this ->form_validation -> set_rules ( 'descripcion', 'Descripcion', 'required' );
	
		$result_valid = $this->form_validation->run ();
	
		$data['lugar'] = $this -> Evento_mod -> listar_canchas();
		if ($result_valid == false) {
			// cargo la vista
			$this -> load -> view ( 'header' );
			$this -> load -> view ( 'admin/evento/alta_evento', $data );
			$this -> load -> view ( 'footer' );
		} else {
			$data = array (
					'nombre' => $this -> input->post ( 'nombre' ),
					'fecha_inicio' => $this -> input->post ( 'fecha_inicio' ),
					'fecha_fin' => $this -> input->post ( 'fecha_fin' ),
					'hora_inicio' => $this -> input->post ( 'hora_inicio' ),
					'hora_fin' => $this -> input->post ( 'hora_fin' ),
					'cancha' => $this -> input->post ( 'cancha' ),
					'privado' => $this -> input->post ( 'privado' ),
					'descripcion' => $this -> input->post ( 'descripcion' ),
					'participantes' => (int)$this -> input->post ( 'participantes' )
			);

			$result_alta = $this -> Evento_mod -> alta ($data);
				
			if ($result_alta) {
				$x['evento'] = $this -> Evento_mod -> listar();
				if ($x != false){
					$this -> load -> view('header');
					$this -> load -> view('admin/evento/listar_eventos', $x);
					$this -> load -> view('footer');
				}//if x != false
			} else {
				$this -> load -> view('header');
				$this -> load -> view ('admin/fallo');
				$this -> load -> view('footer');
			}
		}
	}//alta
	
	public function baja_evento($id = NULL) {
		// da de baja en la base un evento
		$this -> load -> model ( 'Evento_mod' );
			
		$result_baja = $this -> Evento_mod -> baja ( $id );
	
		if ($result_baja == true) {
			$x['evento'] = $this -> Evento_mod -> listar();
			if ($x != false){
				$this -> load -> view('header');
				$this -> load -> view('admin/evento/listar_eventos', $x);
				$this -> load -> view('footer');
			}//if x != false
		} else {
			$this -> load -> view('header');
			$this -> load -> view ('admin/fallo');
			$this -> load -> view('footer');
		}
	} // baja
	
	public function modificar_evento($id = NULL) {
		// modifica datos de un evento
		$this -> load -> model ( 'Evento_mod' );
			
		$res['ev'] = $this -> Evento_mod -> consulta ( $id );
		$res['lugar'] = $this -> Evento_mod -> listar_canchas();
		
		if ($res != null){
			$this -> load -> view('header');
			$this -> load -> view ('admin/evento/modificar_evento', $res);
			$this -> load -> view('footer');
		}
		else {
			$this -> load -> view ( 'admin/fallo' );
		}
	}//modificacion
	
	function modificacion_form_evento(){
		$this -> load -> model('Evento_mod');
		 
		$data = array (
				'id' => $this -> input->post ( 'id' ),
				'nombre' => $this -> input->post ( 'nombre' ),
				'fecha_inicio' => $this -> input->post ( 'fecha_inicio' ),
				'fecha_fin' => $this -> input->post ( 'fecha_fin' ),
				'hora_inicio' => $this -> input->post ( 'hora_inicio' ),
				'hora_fin' => $this -> input->post ( 'hora_fin' ),
				'cancha' => $this -> input->post ( 'lugar' ),
				'privado' => $this -> input->post ( 'privado' ),
				'descripcion' => $this -> input->post ( 'descripcion' ),
				'participantes' => (int)$this -> input->post ( 'participantes' )
		);
		$result_modificacion = $this -> Evento_mod -> modificacion ( $data );
	
		if ($result_modificacion) {// cargo la vista
			$x['evento'] = $this -> Evento_mod -> listar();
			if ($x != false){
				$this -> load -> view('header');
				$this -> load -> view('admin/evento/listar_evento', $x);
				$this -> load -> view('footer');
			}//if x != false
			else {
				$this -> load -> view('header');
				$this -> load -> view('admin/fallo');
				$this -> load -> view('footer');	}//else
		}
	} //modificacion_form
	
	function confirmar_baja_evento($id = NULL) {
		$this -> load -> model ( 'Evento_mod' );
	
		$evento['ev'] = $this -> Evento_mod -> consulta($id);
	
		$this -> load -> view ( 'header' );
		$this -> load -> view ( 'admin/evento/confirmar_eliminar_evento', $evento);
		$this -> load -> view ( 'footer' );
	}
	
	/**ADMINISTRACIÓN DE CANCHAS*/
	
	function administrar_canchas(){
		$this -> load -> model ( 'Cancha_mod' );
		$x['cancha'] = $this -> Cancha_mod -> listar();
		
		$this -> load -> view('header');
		$this -> load -> view('admin/cancha/listar_canchas', $x);
		$this -> load -> view('footer');
	
	}//end administrar_lugar
	
	function alta_cancha() {
		// da de alta en la base un cancha
		$this->load->model ( 'Cancha_mod' );
	
		// establezco las reglas de validación
		$this->form_validation->set_rules ( 'nombre', 'Nombre', 'required' );
		$this->form_validation->set_rules ( 'direccion', 'Direccion', 'required' );
		$this->form_validation->set_rules ( 'latitud', 'Latitud', 'required' );
		$this->form_validation->set_rules ( 'longitud', 'Longitud', 'required' );
		$this->form_validation->set_rules ( 'descripcion', 'Descripcion', 'required' );
		$this->form_validation->set_rules ( 'tipo', 'Tipo', 'required' );
	
		$result_valid = $this->form_validation->run ();
	
		if ($result_valid == false) {
			// cargo la vista
	
			$tipo['tipo'] = $this -> Cancha_mod -> listar_tipos();
			$this->load->view ( 'header' );
			$this->load->view ( 'admin/cancha/alta_cancha', $tipo );
			$this->load->view ( 'footer' );
		} else {
			$data['data'] = array (
					'nombre' => $this -> input -> post ( 'nombre' ),
					'direccion' => $this -> input -> post ( 'direccion' ),
					'latitud' => $this -> input -> post ( 'latitud' ),
					'longitud' => $this -> input -> post ( 'longitud' ),
					'descripcion' => $this -> input -> post ( 'descripcion' ),
					'tipo' => $this -> input -> post ( 'tipo' ),
			);
			$data['tipo'] = $this -> Cancha_mod -> listar_tipos();
			$result_alta = $this -> Cancha_mod -> alta ($data);
				
			if ($result_alta) {
				$x['cancha'] = $this -> Cancha_mod -> listar();
	
				if ($x != false){
					$this -> load -> view('header');
					$this -> load -> view('admin/cancha/listar_canchas', $x);
					$this -> load -> view('footer');
				} //if x != false
			} else {
				$this -> load -> view('header');
				$this -> load -> view ('admin/fallo');
				$this -> load -> view('footer');
			}// else
		}// else validacion
	
	}//alta
	
	function confirmar_baja_cancha($id = NULL) {
		$this -> load -> model ( 'Cancha_mod' );
	
		$cancha['cancha'] = $this -> Cancha_mod -> consulta($id);
		
		$this -> load -> view ( 'header' );
		$this -> load -> view ( 'admin/cancha/confirmar_eliminar_cancha', $cancha);
		$this -> load -> view ( 'footer' );
	}
	
	function baja_cancha($id = NULL) {
		// da de baja en la base un cancha
		$this -> load -> model ( 'Cancha_mod' );
			
		$result_baja = $this -> Cancha_mod -> baja ( $id );
	
		if ($result_baja) {
			$x['cancha'] = $this -> Cancha_mod -> listar();
	
			if ($x != false){
				$this -> load -> view('header');
				$this -> load -> view('admin/cancha/listar_canchas', $x);
				$this -> load -> view('footer');
			} //if x != false
		} else {
			$this -> load -> view('header');
			$this -> load -> view ( 'admin/fallo' );
			$this -> load -> view('footer');
		}
	} // baja
	
	function modificar_cancha($id = NULL) {
		// carga datos de un cancha
		$this -> load -> model ( 'Cancha_mod' );
		$res['tipo'] = $this -> Cancha_mod -> listar_tipos(); // $res : arreglo asociativo con dos campos, res y tipo
		$res['data'] = $this -> Cancha_mod -> consulta ( $id );

		if ($res != null){
			$this -> load -> view('header');
			$this -> load -> view ('admin/cancha/modificar_cancha', $res);
			$this -> load -> view('footer');
		}
		else {
			$this -> load -> view ( 'admin/fallo' );
		}
	}//modificacion
	
	function modificacion_form_cancha(){
		$data = array (
				'id' => $this -> input -> post ( 'id' ),
				'nombre' => $this -> input -> post ( 'nombre' ),
				'direccion' => $this -> input -> post ( 'direccion' ),
				'latitud' => $this -> input -> post ( 'latitud' ),
				'longitud' => $this -> input -> post ( 'longitud' ),
				'descripcion' => $this -> input -> post ( 'descripcion' ),
				'tipo' => $this -> input -> post ( 'tipo' )
		);
			
		$this -> load -> model ( 'Cancha_mod' );
		$result_modificacion = $this -> Cancha_mod -> modificacion ( $data );
	
		if ($result_modificacion) {
			$x['cancha'] = $this -> Cancha_mod -> listar();
	
			if ($x != false){
				$this -> load -> view('header');
				$this -> load -> view('admin/cancha/listar_canchas', $x);
				$this -> load -> view('footer');
			} //if x != false
		} else {
			$this -> load -> view('header');
			$this -> load -> view ( 'admin/fallo' );
			$this -> load -> view('footer');
		}
	} //modificacion_form
	
}//end class usuario_cont