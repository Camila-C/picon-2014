<BODY>
<DIV class = "container-fluid">
	<DIV class = "row">
		 <DIV class="col-lg-12"> <?php //cabecera?>
		 
		</DIV> <!-- cabecera -->
	</DIV> <!-- row cabecera -->
	<DIV class = "row">
		<DIV class="col-lg-2"> <?php //izquierda?>
			<DIV class ="clima">
				<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
				<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"><a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a></div>
				<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
			</DIV> <!-- clima -->	
		</DIV> <!-- lateral izquierdo -->
		
		<DIV class="col-lg-8"> <?php //centro?> 
		
		<INPUT TYPE = "button" VALUE = "Alta" ONCLICK = "location= '<?php echo base_url();?>admin_cont/alta_evento'">
		<table BORDER=1>
		 	<tr>
				<th> Id </th>
				<th> Nombre </th>
				<th> Fecha inicio </th>
				<th> Fecha fin </th>
				<th> Hora inicio </th>
				<th> Hora fin </th>
				<th> Lugar </th>
				<th> Privacidad </th>
				<th> Descripcion </th>
				<th> Participantes </th>
				<th> Modificar </th>
				<th> Eliminar </th>
			</tr>
		<?php foreach ($evento as $row){
			
		?>	
			<tr>
				<td> <?php echo $row -> id; ?> </td>
				<td> <?php echo $row -> nombre; ?> </td>
				<td> <?php echo $row -> fecha_inicio; ?> </td>
				<td> <?php echo $row -> fecha_fin; ?> </td>
				<td> <?php echo $row -> hora_inicio; ?> </td>
				<td> <?php echo $row -> hora_fin; ?> </td>
				<td> <?php echo $row -> nombre_cancha; ?> </td>
				<td> <?php echo $row -> privado; ?> </td>
				<td> <?php echo $row -> descripcion; ?> </td>
				<td> <?php echo $row -> participantes; ?> </td>
				<td> <a href='<?php echo base_url();?>admin_cont/modificar_evento/<?php echo $row -> id; ?>'> Modificar </a> </td>
				<td> <a href='<?php echo base_url();?>admin_cont/confirmar_baja_evento/<?php echo $row -> id; ?>'> Eliminar </a> </td>
				<td> <a href='<?php echo base_url();?>usuarios_cont/invitaciones/<?php echo $row -> id; ?>'> Invitaciones </a> </td>
			</tr>
		
		<?php } ?>
		</table>
	
		<INPUT TYPE = "button" VALUE = "Volver" ONCLICK = "location= '<?php echo base_url();?>admin_cont/index'">
	
		</DIV> <!-- / centro -->
		
		<DIV class="col-lg-2"> <?php //derecha?>
			<DIV class="publicidad"><img src = <?php echo base_url()."assets/img/anuncie_aqui.jpg";?> width="100%" height="100%" ></DIV>
		</DIV> <!-- lateral derecho -->
		</DIV><!-- row -->
</DIV> <!-- principal -->