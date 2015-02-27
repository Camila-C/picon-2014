<?php
class Evento_mod extends CI_Model {
	
	function __construct() {
		parent::__construct ();
	}
	
	function alta($data) {
		// alta de un evento
		if ($this -> db -> insert ( 'evento', $data )) {
			return true;
		} else {
			return false;
		}
	} // alta
	
	function baja($data) {
		// baja de un evento
		$this -> db -> select ( 'id, nombre, privado, descripcion' ) -> from ( 'evento' ) -> where ( 'id = ', $data );
		$query = $this -> db -> get ();
		
		if ($query->num_rows() > 0) {
			if ($query = $this -> db -> where ( 'id', $data ) -> delete ( 'evento' ))
				return true;
			}
			else {
				return false;
			} 
	} // baja
	
	function consulta($data) {
		// trae un evento
		$this -> db -> select('e.id, e.nombre, e.fecha_inicio, e.fecha_fin, e.hora_inicio, e.hora_fin, c.nombre as nombre_cancha, e.privado, e.descripcion, e.participantes');
		$this -> db -> from('evento as e');
		$this -> db -> join( 'cancha as c', 'c.id = e.cancha');
		$this -> db -> where ( 'e.id = ', $data );
		$query = $this -> db -> get ( 'evento' );
		$result = $query -> result();

		if ($query -> num_rows() > 0){
			return $result['0'];
		}
		else
			return false;
	} // consulta
	
	function listar() {
		// lista todos los eventos
		$this -> db -> select('e.id, e.nombre, e.fecha_inicio, e.fecha_fin, e.hora_inicio, e.hora_fin, c.nombre as nombre_cancha, e.privado, e.descripcion, e.participantes');
		$this -> db -> from('evento as e');
		$this -> db -> join( 'cancha as c', 'c.id = e.cancha');
		$this -> db -> order_by('e.id', 'asc');
		$query = $this -> db -> get ();

		return $query -> result();		
		
	} // listar
	
	function listar_canchas(){
		$this -> db -> select('c.id as id_cancha, c.nombre as nombre_cancha, tc.nombre as tipo_cancha');
		$this -> db -> order_by('id_cancha', 'asc');
		$this -> db -> from('cancha as c');
		$this -> db -> join( 'tipo_cancha as tc', 'c.tipo = tc.id');
		
		$query = $this -> db -> get ();
		return $query -> result();
	}
	
	function modificacion($data) {
		//trae los datos a modificar del usuario con id=$data[id]
		if (! ($data == null)) {
			$update = array (
					'nombre' => $data ['nombre'],
					'fecha_inicio' => $data ['fecha_inicio'],
					'fecha_fin' => $data ['fecha_fin'],
					'hora_inicio' => $data ['hora_inicio'],
					'hora_fin' => $data ['hora_fin'],
					'cancha' => $data ['cancha'],
					'privado' => $data ['privado'],
					'descripcion' => $data ['descripcion'],
					'participantes' => $data ['participantes']
			);
			
			$this -> db -> where ( 'id', $data ['id'] );
			$query = $this -> db -> update ( 'evento', $update );
			
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
	} // modificacion
		
	function enviar_email($data){
		$this -> load -> library('email');
		
		$evento = $data['evento'];
		$msj = "invitacion a " . $evento -> nombre . 
		" \n descripcion: " . $evento -> descripcion . 
		" \n el dia: " . $evento -> fecha_inicio . 
		" \n hasta: " . $evento -> fecha_fin .
		" \n hora: " . $evento -> hora_inicio . " - " . $evento -> hora_fin .
		"\n Att: " . $this -> session -> userdata('nombre'); 
		
		$this -> email -> from($this -> session -> userdata('email'));
		$this -> email -> to('miqa.listte@hotmail.com');
		$this -> email -> subject('E-mail Test');
		$this -> email -> message($msj);
		
		$this -> email -> send();
		
		echo $this->email->print_debugger();
		
	}
} // clase
?>