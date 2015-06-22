<?php 

Class Usuario_mod extends CI_Model{
	
	function login($email, $clave){
	
		$this -> db -> select('u.id, u.nombre, u.apellido, u.nacimiento, u.clave, u.email, rol.nombre as rol, u.imagen');
		$this -> db -> from('usuario as u');
		$this -> db -> where('u.email', $email);
		$this -> db -> where('u.clave', $clave);
		$this -> db -> join( 'rol', 'rol.id = u.rol');
				
		$query = $this -> db -> get();		
		$result = $query -> result();		
		if($query -> num_rows() > 0){			
			return $query -> result();			
			}
		else{
			return false;
			}
		
	}
	
	function consulta($id = null) {
		// trae un usuario
		$this -> db -> where ( 'id = ', $id );
		$query = $this -> db -> get ( 'usuario' );
		$result = $query -> result();

		if ($query -> num_rows() > 0){
			return $result['0'];
		}
		else
			return false;
	} // consulta
	
	function modificacion($data){ //hecha por user
		if (! ($data == null)) {
			$update = array (
					'nombre' => $data ['nombre'],
					'apellido' => $data ['apellido'],
					'nacimiento'=> $data['nacimiento'],
					'clave' => $data ['clave'],
					'email' => $data ['email'],					
			);
				
			$this->db->where ( 'id', $data ['id'] );
			$query = $this->db->update ( 'usuario', $update );
				
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
	}//modificacion	

	function modificacion_img($data){ //hecha por user
		if (! ($data == null)) {
			$update = array ('imagen'=> $data -> imagen);
				
			$this -> db -> where ( 'id', $data -> id );
			$query = $this -> db -> update ( 'usuario', $update );

			if ($query) {
				return true;
			} else {
				return false;
			}
		}
	} //function modificacion_img
	
	function alta($data){  //hecha por admin
		if (! ($data == null)) {
				$insert = array (
						'nombre' => $data ['nombre'],
						'apellido' => $data ['apellido'],
						'nacimiento' => $data ['nacimiento'],
						'clave' => $data ['clave'],
						'email' => $data ['email'],
						'rol' => $data['rol'],
						'imagen' => $data ['imagen'],
						
				);
					
				$query = $this->db->insert ( 'usuario', $insert );
					
				if ($query) {
					return true;
				} else {
					return false;
				}
			}
		
	} //funcion alta
	
	function baja($data){ //hecha por admin
		if (! ($data == null)) {
			
			$this -> db -> where ('id', $data);
			$query = $this->db->delete ( 'usuario');
				
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
	} //funcion baja

	function resetear_clave($id = NULL){
		if (! ($this -> session -> userdata('id') == null)) {
			$update = array(
					'id' => $id,
					'clave' => 'none'
			);
			$this -> db -> where ( 'id', $update['id'] );
			$query = $this -> db -> update ( 'usuario', $update );
			
			if ($query) {
				return true;
			} else {
				return false;
			}
		}
	} // end resetear_clave
	
	function listar() {
		// lista todos los eventos
		$this -> db -> order_by('id', 'asc');
		$this -> db -> from('usuario');
	
		$query = $this -> db -> get ();
		return $query -> result();
		
	
	
	} // listar
	
	function listar_roles(){
		$this -> db -> select('id as id_rol, nombre as nombre_rol');
		$this -> db -> order_by('id_rol', 'asc');
		$this -> db -> from('rol');
		
		
		
		$query = $this -> db -> get ();
		return $query -> result();
			
	}
	
	function mapa(){
		$this -> load -> library('googlemaps');
		
		$config = array();
		$config['center'] = '-40.811885, -62.996184';
		$config['zoom'] = '13';
		$config['directions'] = true;
		$config['map_height'] = '65%';
		$config['map_width'] = '590px';
		$config['map_type'] = 'ROADMAP';		//tipo de mapa
		$config['scrollwheel'] = true;			//hacer zoom con la ruedita
		$config['keyboardShortcuts'] = true;	//teclas de navegacion y +/-
		$config['draggable'] = true;			//permite arrastrar el mapa
		//$config['onclick'] = agregar marker
		//$config['onrightclick'] = despliega menu
		
		
		/*$polyline = array();
		 $polyline['points'] = array('-40.8025484,-62.9985775', '-40.8057766,-62.9976119', '-40.8105195,-62.9956438');
		
		$this -> googlemaps -> add_polyline($polyline);*/
		
		
		
		$this -> googlemaps -> initialize($config);
		
		$marker = array();
		$marker['title'] = 'marcador_1'; //se muestra al pasar el mouse por encima
		$marker['position'] = '-40.7946704,-62.9872892';
		$marker['draggable'] = true;
		$marker['infowindow_content'] = 'Esto es una infowindow';
		
		$this -> googlemaps -> add_marker($marker);
		
		$data['map'] = $this -> googlemaps -> create_map();
		
		return $data;
	} //mapa
}//clase
?>