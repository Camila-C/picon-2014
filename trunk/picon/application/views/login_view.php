<BODY>
<DIV class =" container-fluid">
<DIV class = "row">
	 <DIV class="col-lg-12"> <?php //cabecera?>
	 
	</DIV> <!-- cabecera -->
	
	<DIV class="col-lg-2"> <?php //izquierda?>
		<DIV class ="clima">
			<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
			<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"><a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a></div>
			<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
		</DIV> <!-- clima -->	
	</DIV> <!-- lateral izquierdo -->
	
	<DIV class="col-lg-8" > <?php //centro?> 
	
	 <H1> Juguemos un Picon! </H1>  
		<FORM ACTION = "<?php echo base_url(); ?>verifylogin/login" METHOD="POST">
		
		 <!--formulario-->
		<FIELDSET name = "Login"> 
		<LEGEND> <b> Login </b> </LEGEND> 
		
		<?php 	
			echo validation_errors();
			echo form_open('verifylogin');
		?>
		
		<LABEL> <b> E-mail </b> </LABEL> <br>
		<INPUT TYPE = "text" NAME = "email" SIZE = "25" MAXLENGTH="50">
		<br>
		<LABEL> <b> Clave </b> </LABEL> <br>
		<INPUT TYPE = "password" NAME = "clave" SIZE = "25" MAXLENGTH="8">
		<br>
		<INPUT TYPE = "submit" CLASS = "btn-success" VALUE = "login">
		</FIELDSET>
				
		</FORM>
	</DIV> <!-- centro -->

	<DIV class="col-lg-2"> <?php //derecha?>
		<img src = <?php echo base_url()."assets/img/anuncie_aqui.jpg";?> >
	</DIV> <!-- lateral derecho -->
</DIV> <?php //row?>
</DIV> <!-- principal -->