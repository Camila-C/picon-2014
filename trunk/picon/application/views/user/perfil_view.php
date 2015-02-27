 <body>
<DIV class =" container">
		 <DIV class="col-lg-12"> <?php //cabecera?>
			<img
				src=<?php echo base_url().$this -> session -> userdata('imagen'); ?>
				height="100px" width="100px"> <LABEL> <b> E-mail: <?php echo $this -> session -> userdata('email'); ?> </b>
			</LABEL> <br> <INPUT TYPE="button" VALUE="desloguear"
				ONCLICK="location= '<?php echo base_url();?>main/desloguear'">
		</DIV>	<!-- cabecera -->
		
		<DIV class="col-lg-2"> <?php //izquierda?>
			<DIV class ="clima">
				<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
				<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"><a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a></div>
				<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
			</DIV> <!-- clima -->
			
			<ul> <?php // menu?>
				<li><a href="<?php echo base_url()."main/logueado"?>"> Inicio </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/index"?>"> Mi perfil </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/mis_eventos"?>"> Mis eventos </a></li>
				<li><a href=""> Crear evento </a></li>
			</ul>
		</DIV> <!-- lateral izquierdo -->
	 
	<DIV class="col-lg-8"> <?php //centro?> 
	   <h1>Mi perfil</h1>
	   
	   	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>usuarios_cont/modificar_imagen" METHOD = "POST" enctype="multipart/form-data">
	
	   	<div> <img src = <?php echo base_url().$this -> session -> userdata('imagen'); ?> height = "100px" width = "100px"></div>
		<br>
		
		<INPUT type = "hidden" value = " <?php echo $this -> session -> userdata('id'); ?>" name = "id">
		
		<input type="file" name="userfile" id="archivo" value = "cambiar imagen"/> 
		<input type="submit" name="boton" value="Subir" />    
	   	
	   	</FORM>
	   	
	   	<LABEL> <b> Nombre: <?php echo $this -> session -> userdata('nombre'); ?> </b> </LABEL> 
		<br>
		
		<LABEL> <b> Apellido: <?php echo $this -> session -> userdata('apellido'); ?> </b> </LABEL> 
		<br>
	
		<LABEL> <b> Fecha Nacimiento: <?php $fecha = strtotime( $this -> session -> userdata('nacimiento') );	echo date('d-M-Y', $fecha);?> </b> </LABEL>
		<br>
		 
		<LABEL> <b> E-mail: <?php echo $this -> session -> userdata('email'); ?> </b> </LABEL> 
		<br>
		
	   	<INPUT TYPE = "button" VALUE = "Modificar datos" ONCLICK = "location= '<?php echo base_url();?>usuarios_cont/modificacion'">	   	
	</DIV> <!-- / centro -->
	
	<DIV class="col-lg-2"> <?php //derecha?>
		<img src = <?php echo base_url()."assets/img/anuncie_aqui.jpg";?> >
	</DIV> <!-- lateral derecho -->
</DIV> <!-- principal -->
   