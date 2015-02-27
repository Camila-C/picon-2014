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
		
	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>admin_cont/alta_user" METHOD = "POST">
	
	 <!--formulario-->
	<FIELDSET name = "alta_user"> 
	<LEGEND> <b> Alta de un usuario </b> </LEGEND> 
	
	<LABEL> <b> Nombre </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "nombre" SIZE = "30" MAXLENGTH="20">
	<br>
	
	<LABEL> <b> Apellido </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "apellido" SIZE = "30" MAXLENGTH="30">
	<br>
	
	<LABEL> <b> Fecha Nacimiento </b> </LABEL> <br>
	<INPUT TYPE = "date" NAME = "nacimiento">
	<br>
	
	<LABEL> <b> E-mail </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "email" SIZE = "30" MAXLENGTH="50">
	<br>
	
	<LABEL> <b> Clave </b> </LABEL> <br>
	<INPUT TYPE = "password" NAME = "clave" SIZE = "30" MAXLENGTH="10">
	<br>
	
	<LABEL> <b> Rol </b> </LABEL>
	<?php for ($i = 0; $i < sizeof($rol); $i++) {
			echo '<INPUT TYPE = "radio" NAME = "rol" VALUE = "'.$rol[$i] -> id_rol.'"> '.$rol[$i] -> nombre_rol.' </OPTION>';
	}?>
	<br>
	<INPUT TYPE = "submit" VALUE = "guardar">
	</FIELDSET>
	
	</FORM>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->