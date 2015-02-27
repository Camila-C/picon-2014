<BODY>
<DIV class =" principal">
	 <DIV class="cabecera">
	 
	</DIV> <!-- cabecera -->

	<DIV class="lateral_izquierdo">
		<DIV class ="clima">
			<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
			<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"><a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a></div>
			<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
		</DIV> <!-- clima -->	
	</DIV> <!-- lateral izquierdo -->
	
	<DIV class="lateral_derecho">
		<DIV class="publicidad"><img src = <?php echo base_url()."assets/img/anuncie_aqui.jpg";?> width="100%" height="100%" ></DIV>
	</DIV> <!-- lateral derecho -->
	
	<DIV class="centro"> 
	
	
	<DIV class = "cartel">
		<?php echo validation_errors(); ?>
	<!-- 	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php// echo base_url(); ?>admin_cont/modificacion_form_cancha" METHOD = "POST" enctype="multipart/form-data">
		 -->
		 <!--formulario-->
		<FIELDSET name = "modificacion_usuario"> 
		<LEGEND> <b> Esta seguro que desea eliminar al usuario: </b> </LEGEND>
		<br>

		<?php $c = $cancha; ?>
		
		<LABEL> <b> Id: <?php echo $c->id ?> </b></LABEL> <br>
		<br>
		
		<LABEL> <b> Nombre: <?php echo $c->nombre ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Direccion: <?php echo $c->direccion ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Latitud: <?php echo $c->latitud ?> </b></LABEL> <br>
		<br>
		
		<LABEL> <b> Longitud: <?php echo $c->longitud ?> </b></LABEL> <br>
		<br>
		
		<LABEL> <b> Descripcion: <?php echo $c->descripcion ?> </b></LABEL> <br>
		<br>
		
		<LABEL> <b> Tipo: <?php echo $c->nombre_tipo ?> </b></LABEL> <br>
		<br>
				
		<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_canchas'" VALUE = Cancelar>
		<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/baja_cancha/<?php echo $c -> id; ?>'" VALUE = Eliminar> <br>
		</FIELDSET>
		
		</FORM>
	</DIV>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->