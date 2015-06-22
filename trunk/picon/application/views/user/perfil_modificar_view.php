<BODY>
<DIV class =" principal">
	<DIV class = "row">
	
<!-- ---------------CABECERA------------------------------------------------------------------------------------------------------------------ -->		
	
	<DIV class="row">
	 
		<DIV class="col-lg-12"> <?php //cabecera?>
			<img src=<?php echo base_url().$this -> session -> userdata('imagen'); ?>
				 height="100px" width="100px"> <LABEL> <b> E-mail: <?php echo $this -> session -> userdata('email'); ?> </b>
			</LABEL> <br> <INPUT TYPE="button" VALUE="desloguear"
					ONCLICK="location= '<?php echo base_url();?>main/desloguear'">
			</DIV>	<?php //cabecera?>
	</DIV> <?php //row cabecera?>
		
<!-- ------------------ LATERAL IZQUIERDO ---------------------------------------------------------------------------------------------------- -->		
	
	
	<DIV class="col-lg-2"> <?php //izquierda?>
		<DIV class ="clima">
			<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
			<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"><a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a></div>
			<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
		</DIV> <?php // clima ?>	
		
		<ul> <?php // menu?>
			<li><a href="<?php echo base_url()."main/logueado"?>"> Inicio </a></li>
			<li><a href="<?php echo base_url()."usuarios_cont/index"?>"> Mi perfil </a></li>
			<li><a href="<?php echo base_url()."usuarios_cont/mis_eventos"?>"> Mis eventos </a></li>
			<li><a href=""> Crear evento </a></li>
		</ul>
	</DIV> <?php //lateral izquierdo ?>

		
<!-- --------------- CENTRO  ----------------------------------------------------------------------------------------------------------------- -->		
	
	<DIV class="col-lg-8"> <?php //centro?> 

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
	
	</DIV> <?php // centro ?>
			
<!-- ----------- LATERAL DERECHO ------------------------------------------------------------------------------------------------------------- -->		
			
		<DIV class="col-lg-2"> <?php //derecha?>
				<img src=<?php echo base_url()."assets/img/anuncie_aqui.jpg";?>>
		</DIV>		<?php //lateral derecho ?>
			
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->		
		
	</DIV> <?php //row?>
</DIV>	<?php //principal ?>
