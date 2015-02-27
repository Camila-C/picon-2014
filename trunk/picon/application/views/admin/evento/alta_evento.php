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
	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>admin_cont/alta_evento" METHOD = "POST">
	
	 <!--formulario-->
	<FIELDSET name = "alta_evento"> 
	<LEGEND> <b> Alta de un evento </b> </LEGEND> <br>
	<br>
	
	<br>
	<LABEL> <b> Nombre </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "nombre" SIZE = "30" MAXLENGTH="50">
	<br>
	
	<LABEL> <b> Fecha de inicio </b> </LABEL> <br>
	<INPUT TYPE = "date" NAME = "fecha_inicio">
	<br>
	
	<LABEL> <b> Fecha de fin </b> </LABEL> <br>
	<INPUT TYPE = "date" NAME = "fecha_fin">
	<br>
	
	<LABEL> <b> Hora de inicio </b> </LABEL> <br>
	<INPUT TYPE = "time" NAME = "hora_inicio">
	<br>
	
	<LABEL> <b> Hora de fin </b> </LABEL> <br>
	<INPUT TYPE = "time" NAME = "hora_fin">
	<br>
	
	<LABEL> <b> Lugar </b> </LABEL> <br>
	
	<SELECT required name = "cancha">	
	<?php 
		echo '<OPTION value="' .$lugar[$i] -> id_tipo.'" SELECTED> Elija el lugar </OPTION>';
		for ($i = 0; $i < sizeof($lugar); $i++) {
			echo '<OPTION value="'.$lugar[$i] -> id_cancha.'">'.$lugar[$i] -> nombre_cancha.' , ' .$lugar[$i] -> tipo_cancha.'</OPTION>';
	}?>
	</SELECT>
	<br>
	
	<LABEL> <b> El evento es privado? </b> </LABEL> <br>
	<SELECT required name = 'privado'>
		<OPTION> Si </OPTION>
		<OPTION> No </OPTION>
	</SELECT>
	<br>
	
	<LABEL> <b> Descripcion </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "descripcion" SIZE = "30" MAXLENGTH="50">
	<br>
	
	<LABEL> <b> Cantidad de participantes (numero) </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "participantes" SIZE = "30" MAXLENGTH="30">
	<br>
	
	<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_eventos'" VALUE = Cancelar>
	<INPUT TYPE = "submit" VALUE = "guardar">
	</FIELDSET>
	
	</FORM>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->