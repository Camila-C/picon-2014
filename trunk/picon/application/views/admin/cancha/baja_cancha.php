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
	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>admin_cont/baja_cancha" METHOD = "POST">
	
	 <!--formulario-->
	<FIELDSET name = "baja_evento"> 
	<LEGEND> <b> Baja de una cancha </b> </LEGEND> 
	
	<LABEL> <b> Id </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "id" SIZE = "30" MAXLENGTH="30">
	<br>
	
	<INPUT TYPE = "submit" VALUE = "dar de baja">
	</FIELDSET>
	
	</FORM>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->