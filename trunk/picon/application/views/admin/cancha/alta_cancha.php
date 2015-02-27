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
	
	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>admin_cont/alta_cancha" METHOD = "POST">
	
	 <!--formulario-->
	<FIELDSET name = "alta_evento"> 
	<LEGEND> <b> Alta de una cancha </b> </LEGEND> 
	
	<LABEL> <b> Nombre </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "nombre" SIZE = "30" MAXLENGTH="50">
	<br>
	
	<LABEL> <b> Direccion </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "direccion" SIZE = "30" MAXLENGTH="50">
	<br>
	
	<LABEL> <b> Latitud </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "latitud" SIZE = "30" MAXLENGTH="15">
	<br>
	
	<LABEL> <b> Longitud </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "longitud" SIZE = "30" MAXLENGTH="15">
	<br>
	
	<LABEL> <b> Descripcion </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "descripcion" SIZE = "30" MAXLENGTH="50">
	<br>
	
	<LABEL> <b> Tipo de cancha: </b> </LABEL> <br>
	<SELECT required name = 'tipo'>	
	<?php 
		echo '<OPTION value="' .$tipo[$i] -> id_tipo.'" SELECTED> Elija un tipo de cancha </OPTION>';
		for ($i = 0; $i < sizeof($tipo); $i++) {
			echo '<OPTION value="'.$tipo[$i] -> id_tipo.'">'.$tipo[$i] -> nombre_tipo.'</OPTION>';
	}?>
	</SELECT>
	<br>
	<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_canchas'" VALUE = Cancelar>
	<INPUT TYPE = "submit" VALUE = "guardar">
	</FIELDSET>
	
	</FORM>


	</DIV> <!-- / centro -->
</DIV> <!-- principal -->