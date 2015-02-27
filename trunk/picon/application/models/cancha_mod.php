<?php
class cancha_mod extends CI_Model {
	
	function __construct() {
		parent::__construct ();
	}
	
	function alta($data) {
		// alta de un cancha
		if ($this -> db -> insert ( 'cancha', $data['data'] )) {
			return true;
		} else {
			return false;
		}
	} // alta
	
	function baja($data) {
		// baja de un cancha
		$this -> db -> select ( 'id, nombre, direccion, latitud, longitud, descripcion, tipo' ) -> from ( 'cancha' ) -> where ( 'id = ', $data );
		$query = $this -> db -> get ();
		
		if ($query -> num_rows() > 0) {	//si existe:
			$this -> db -> where ( 'id', $data ) -> delete ( 'cancha' );
			return true;
		} else {
			return false;
		}
	} // baja
	
	function consulta($data) {
		// trae un cancha
		$this -> db -> select('c.id, c.nombre, c.direccion, c.latitud, c.longitud, c.descripcion, tc.nombre as nombre_tipo');
		$this -> db -> from('cancha as c');
		$this -> db -> join( 'tipo_cancha as tc', 'tc.id = c.tipo');
		$this -> db -> where ( 'c.id = ', $data );
		$query = $this -> db -> get ( 'cancha' );
		$result = $query -> result();
		
		if ($query -> num_rows() > 0){
			return $result['0'];
		}
		else
			return false;
	} // consulta
	
	function listar() {
		// lista todos los canchas
		
		$this -> db -> select('c.id, c.nombre, c.direccion, c.latitud, c.longitud, c.descripcion, tc.nombre as nombre_tipo');
		$this -> db -> from('cancha as c');
		$this -> db -> join( 'tipo_cancha as tc', 'tc.id = c.tipo');
		$this -> db -> order_by('c.id', 'asc');
		$query = $this -> db -> get ();

		return $query -> result();		
		
	} // listar
	
	function listar_tipos(){
		// lista todos los canchas
		$this -> db -> select('id as id_tipo, nombre as nombre_tipo');
		$this -> db -> order_by('id_tipo', 'asc');
		$this -> db -> from('tipo_cancha');
		
		$query = $this -> db -> get ();
		return $query -> result();
			
	}//listar tipos
	
	function modificacion($data) {
		//trae los datos a modificar del usuario con id=$data[id]
		if (! ($data == null)) {
			$update = array (
					'nombre' => $data ['nombre'],
					'direccion' => $data ['direccion'],
					'latitud' => $data ['latitud'],
					'longitud' => $data ['longitud'],
					'descripcion' => $data ['descripcion'],
					'tipo' => $data ['tipo'],
			);
			
			$this -> db -> where ( 'id', $data ['id'] );
		
			$query = $this -> db -> update ( 'cancha', $update );
			
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
	} // modificacion
		
		
} // clase
?>