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
		
		 <!--formulario-->
		<FIELDSET name = "modificacion_usuario"> 
		<LEGEND> <b> Esta seguro que desea resetear al usuario: </b> </LEGEND>
		<br>		
		
		<LABEL> <b> Id: <?php echo $usuario -> id; ?> </b></LABEL> <br>
		<br>
		
		<LABEL> <b> Nombre: <?php echo $usuario -> nombre ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Apellido: <?php echo $usuario -> apellido ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Fecha de Nacimiento: <?php echo date('d-M-Y', strtotime( $usuario -> nacimiento) ); ?> </b> </LABEL> <br>
		 <br>
		
		<LABEL> <b> E-mail: <?php echo $usuario -> email ?> </b> </LABEL> <br>
		<br>
		
		<INPUT TYPE = "hidden" NAME = "clave" SIZE = "40" MAXLENGTH="40" value = <?php echo $this -> session -> userdata('clave') ?>> <br>
		
		<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_users'" VALUE = Cancelar>
		<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/resetear_clave/<?php echo $usuario -> id;?>'" VALUE = Resetear> <br>
		</FIELDSET>
		
		</FORM>
	</DIV>
	</DIV> <!-- / centro -->
</DIV> <!-- principal -->