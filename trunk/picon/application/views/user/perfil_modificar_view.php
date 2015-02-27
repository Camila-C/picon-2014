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

	<?php echo validation_errors(); ?>
	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>usuarios_cont/modificacion_form" METHOD = "POST" enctype="multipart/form-data">
	
	 <!--formulario-->
	<FIELDSET name = "modificacion_usuario"> 
	<LEGEND> <b> Modificación de datos de usuario: establecer nuevos valores </b> </LEGEND> 
			
	
	<INPUT TYPE = "hidden" NAME = "id" SIZE = "40" MAXLENGTH="40" value = "<?php echo $this -> session -> userdata('id') ?>"  >
	<br>
	
	<LABEL> <b> Nombre </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "nombre" SIZE = "40" MAXLENGTH="40" value = "<?php echo $this -> session -> userdata('nombre') ?>" >
	<br>
	
	<LABEL> <b> Apellido </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "apellido" SIZE = "40" MAXLENGTH="40" value = "<?php echo $this -> session -> userdata('apellido') ?>" >
	<br>
	
	<LABEL> <b> Fecha de nacimiento: </b> </LABEL> <br>
	<?php $fecha = strtotime( $this -> session -> userdata('nacimiento') ); ?>
	<INPUT TYPE = "date" NAME = "nacimiento" VALUE = "<?php echo date('Y-m-d', $fecha); ?>">
	<br>
	
	<LABEL> <b> E-mail </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "email" SIZE = "40" MAXLENGTH="40" value = "<?php echo $this -> session -> userdata('email') ?>" >
	<br>
	
	<INPUT TYPE = "hidden" NAME = "clave" SIZE = "40" MAXLENGTH="40" value = "<?php echo $this -> session -> userdata('clave') ?>" >
	<br>
	
	<LABEL> <b> *Ingrese clave anterior </b> </LABEL> <br>
	<INPUT TYPE = "password" NAME = "clave2" SIZE = "40" MAXLENGTH="40">
	<br>
	
	<LABEL> <b> *Ingrese clave nueva </b> </LABEL> <br>
	<INPUT TYPE = "password" NAME = "clave_nueva" SIZE = "40" MAXLENGTH="40">
	<br>
	
	<INPUT TYPE = "hidden" NAME = "imagen" SIZE = "40" MAXLENGTH="40" value = <?php echo $this -> session -> userdata('imagen') ?>>
		
	<br>
	<INPUT TYPE = "button" VALUE = "Cancelar" ONCLICK = "location = '<?php base_url();?>usuarios_cont/'">
	<INPUT TYPE = "submit" VALUE = "Guardar">
	</FIELDSET>
	
	</FORM>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->