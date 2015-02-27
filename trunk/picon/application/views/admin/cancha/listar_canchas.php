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
	
	<INPUT TYPE = "button" VALUE = "Alta" ONCLICK = "location= '<?php echo base_url();?>admin_cont/alta_cancha'">
	
	<DIV class = "tabla" > 
		<table BORDER=1>
		 	<tr>
				<th> Id </th>
				<th> Nombre </th>
				<th> Direccion </th>
				<th> Latitud </th>
				<th> Longitud </th>
				<th> Descripcion </th>
				<th> Tipo </th>
				<th> Modificar </th>
				<th> Eliminar </th>
			</tr>
		<?php	
		
		foreach ($cancha as $row){
	
		?>	
			<tr id="tr">
				<td> <?php echo $row -> id; ?> </td>
				<td> <?php echo $row -> nombre; ?> </td>
				<td> <?php echo $row -> direccion; ?> </td>
				<td> <?php echo $row -> latitud; ?> </td>
				<td> <?php echo $row -> longitud;?> </td>
				<td> <?php echo $row -> descripcion; ?> </td>
				<td> <?php echo $row -> nombre_tipo; ?> </td>
				<td> <a href='<?php echo base_url();?>admin_cont/modificar_cancha/<?php echo $row -> id; ?>'> Modificar </a> </td>
				<td> <a href='<?php echo base_url();?>admin_cont/confirmar_baja_cancha/<?php echo $row -> id; ?>'> Eliminar </a> </td>
		
			</tr>
		<?php }	 ?>
		</table>
	</DIV> <!-- tabla -->
	<INPUT TYPE = "button" VALUE = "Volver" ONCLICK = "location= '<?php echo base_url();?>admin_cont/index'">

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->