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
	
	<INPUT TYPE = "button" VALUE = "Alta" ONCLICK = "location= '<?php echo base_url();?>admin_cont/alta_user'">
	<table BORDER=1>
	 	<tr>
			<th> Id </th>
			<th> Nombre </th>
			<th> Apellido </th>
			<th> Nacimiento </th>
			<th> E-mail </th>
			<th> Rol </th>
			<th> Resetear clave </th>
			<th> Eliminar </th>
		</tr>
	<?php foreach ($u as $row){	?>	
		<tr>
			<td> <?php echo $row -> id; ?> </td>
			<td> <?php echo $row -> nombre; ?> </td>
			<td> <?php echo $row -> apellido; ?> </td>
			<td> <?php echo $row -> nacimiento; ?> </td>
			<td> <?php echo $row -> email; ?> </td>
			<td> <?php echo $row -> rol; ?> </td>
			<td> <a href='<?php echo base_url();?>admin_cont/confirmar_resetear_clave_user/<?php echo $row -> id; ?>'> Resetear </a> </td>
			<td> <a href='<?php echo base_url();?>admin_cont/confirmar_baja_user/<?php echo $row -> id; ?>'> Eliminar </a> </td>
		</tr>
	
	<?php } ?>
	</table>

	<INPUT TYPE = "button" VALUE = "Volver" ONCLICK = "location= '<?php echo base_url();?>admin_cont/index'">

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->