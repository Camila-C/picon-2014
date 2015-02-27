<?php
class Canchas_cont extends CI_Controller {
	
	function __construct() {
		parent::__construct ();
		$this->load->helper ( 'form' );
	}
	
	public function index() {
		// cargo la vista
		$this -> load -> model('Cancha_mod');
		
		$x['cancha'] = $this -> Cancha_mod -> listar();

		if ($x != false){
			$this -> load -> view('header');
			$this -> load -> view('cancha/body_listar', $x);
			$this -> load -> view('footer');
		}
		else {
			$this -> load -> view('header');
			$this -> load -> view('fallo');
			$this -> load -> view('footer');
		}	
	}// index
	/*
	public function alta() {
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
				$this -> load -> view ('fallo');
				$this -> load -> view('footer');
			}// else
		}// else validacion
		
	}//alta
	
	public function baja($id = NULL) {
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
			$this -> load -> view ( 'fallo' );
			$this -> load -> view('footer');
			}
	} // baja
	
	public function modificacion($id = NULL) {
		// carga datos de un cancha
		$this -> load -> model ( 'Cancha_mod' );
		$res['tipo'] = $this -> Cancha_mod -> listar_tipos();
		$res['data'] = $this -> Cancha_mod -> consulta ( $id );

		if ($res != null){
			$this -> load -> view('header');
			$this -> load -> view ('admin/cancha/modificar_cancha', $res);
			$this -> load -> view('footer');
		}
		else {
			echo "fallo";
			$this -> load -> view ( 'fallo' );
		}	
	}//modificacion

	 function modificacion_form(){
			$data = array (
					'id' => $this -> input -> post ( 'id' ),
					'nombre' => $this -> input -> post ( 'nombre' ),
					'direccion' => $this -> input -> post ( 'direccion' ),
					'latitud' => $this -> input -> post ( 'latitud' ),
					'longitud' => $this -> input -> post ( 'longitud' ),
					'descripcion' => $this -> input -> post ( 'descripcion' ),
					'tipo' => $this -> input -> post ( 'tipo' )
			);
			echo $data['tipo'];
			
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
				$this -> load -> view ( 'fallo' );
				$this -> load -> view('footer');
			}
	} //modificacion_form
*/
}//clase

?>