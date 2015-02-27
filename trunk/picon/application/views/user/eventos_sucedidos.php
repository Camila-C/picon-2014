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
			
			<ul> <?php // menu?>
				<li><a href="<?php echo base_url()."main/logueado"?>"> Inicio </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/index"?>"> Mi perfil </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/mis_eventos"?>"> Mis eventos </a></li>
				<li><a href=""> Crear evento </a></li>
			</ul>
			
		</DIV> <!-- lateral izquierdo -->
		
		<DIV class="col-lg-8"> <?php //centro?> 

		<?php echo "Eventos sucedidos"?>
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
			</tr>
		
		<?php } ?>
		</table>

		</DIV> <!-- / centro -->
		
		<DIV class="col-lg-2"> <?php //derecha?>
			<img src = <?php echo base_url()."assets/img/anuncie_aqui.jpg";?>>
		</DIV> <!-- lateral derecho -->
		</DIV><!-- row -->
</DIV> <!-- principal -->