<BODY>
<DIV class=" principal">
	<DIV class = "row" >
		<DIV class = "row">
			<DIV class="col-lg-12"> <?php //cabecera?>
				<img
					src=<?php echo base_url().$this -> session -> userdata('imagen'); ?>
					height="100px" width="100px"> <LABEL> <b> E-mail: <?php echo $this -> session -> userdata('email'); ?> </b>
				</LABEL> <br> <INPUT TYPE="button" VALUE="desloguear" class = "btn-success"
					ONCLICK="location= '<?php echo base_url();?>main/desloguear'">
			</DIV>	<!-- cabecera -->
		</DIV> <?php //row?>
		
		<DIV class="col-lg-2"> <?php //izquierda?>
			<DIV class="clima">
				<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
				<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom">
					<a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a>
				</div>
				<script type="text/javascript"
					src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
			</DIV>
			<!-- clima -->
			<ul class = "nav nav-pills nav-stacked"> <?php // menu?>
				<li><a href="<?php echo base_url()."main/logueado"?>"> Inicio </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/index"?>"> Mi perfil </a></li>
				<li class = "active"><a href="<?php echo base_url()."usuarios_cont/mis_eventos"?>"> Mis eventos </a></li>
				<li><a href=""> Crear evento </a></li>
			</ul>
		</DIV>	<!-- lateral izquierdo -->

		<DIV class="col-lg-8"> <?php //centro?>

			<ul class = "nav nav-tabs" role="tablist">
				<li><a href="<?php echo base_url()."usuarios_cont/eventos_sucedidos"?>"> Sucedidos </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/eventos_proximos"?>"> Proximos </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/eventos_pendientes"?>"> Pendientes </a></li>				
			</ul>
			<?php echo "centro?";?>
			<?php echo "Dar de alta un nuevo evento: ";?>
			<INPUT TYPE = "button" VALUE = "Alta" ONCLICK = "location= '<?php echo base_url();?>usuarios_cont/alta_evento'">
		</DIV>
		<!-- / centro -->

		<DIV class="col-lg-2"> <?php //derecha?>
				<img src=<?php echo base_url()."assets/img/anuncie_aqui.jpg";?>>
		</DIV>
		<!-- lateral derecho -->
	</DIV> <?php //row?>
</DIV>	<!-- principal -->



