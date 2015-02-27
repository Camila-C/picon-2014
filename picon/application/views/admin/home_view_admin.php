<body>
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
	   <h1>Home</h1>
	   <h2> Bienvenido administrador <?php echo ($this -> session -> userdata('nombre'));?>! </h2>
	   
	   <INPUT TYPE = "button" VALUE = "administrar usuario" ONCLICK = "location= '<?php echo base_url();?>admin_cont/administrar_users'">
	   
	   <INPUT TYPE = "button" VALUE = "administrar eventos" ONCLICK = "location= '<?php echo base_url();?>admin_cont/administrar_eventos'">
	   
	   <INPUT TYPE = "button" VALUE = "administrar canchas" ONCLICK = "location= '<?php echo base_url();?>admin_cont/administrar_canchas'">
	   
	<INPUT TYPE = "button" VALUE = "desloguear" ONCLICK = "location= '<?php echo base_url();?>main/desloguear'">

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->