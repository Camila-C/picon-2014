<BODY>
<DIV class=" principal">
	<DIV class = "row" >
	
<!-- ---------------CABECERA------------------------------------------------------------------------------------------------------------------ -->		
		
		<DIV class = "row">
			<DIV class="col-lg-12"> <?php //cabecera?>
				<img
					src=<?php echo base_url().$this -> session -> userdata('imagen'); ?>
					height="100px" width="100px"> <LABEL> <b> E-mail: <?php echo $this -> session -> userdata('email'); ?> </b>
				</LABEL> <br> <INPUT TYPE="button" VALUE="desloguear"
					ONCLICK="location= '<?php echo base_url();?>main/desloguear'">
			</DIV>	<?php //cabecera?>
		</DIV> <?php  //row cabecera ?>
		
<!-- ------------------ LATERAL IZQUIERDO ---------------------------------------------------------------------------------------------------- -->		
		
		<DIV class="col-lg-2"> <?php //izquierda?>
			<DIV class="clima">
				<!-- www.TuTiempo.net - Ancho:204px - Alto:81px -->
				<div id="TT_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom">
					<a href="http://www.tutiempo.net/viedma.html">El Tiempo en Viedma</a>
				</div>
				<script type="text/javascript"
					src="http://www.tutiempo.net/widget/eltiempo_tyTk111E1D1B8BGUjAVDDDzzz6nUMYYlbYktkZCIq1zI3Imom"></script>
			</DIV>			<!-- clima -->
			
			<ul> <?php // menu?>
				<li><a href="<?php echo base_url()."main/logueado"?>"> Inicio </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/index"?>"> Mi perfil </a></li>
				<li><a href="<?php echo base_url()."usuarios_cont/mis_eventos"?>"> Mis eventos </a></li>
				<li><a href=""> Crear evento </a></li>
			</ul>
		</DIV>	<?php //lateral izquierdo ?>
		
<!-- --------------- CENTRO  ----------------------------------------------------------------------------------------------------------------- -->		
	
		<DIV class="col-lg-8" align="center"> <?php //centro ?>
		<h2> Mapa </h2>
			<?php echo $map['js'];?>
			<?php echo $map['html'];?>
			
		</DIV> <?php //centro ?>
		
		
<!-- ----------- LATERAL DERECHO ------------------------------------------------------------------------------------------------------------- -->		
		
		<DIV class="col-lg-2"> <?php //derecha?>
				<img src=<?php echo base_url()."assets/img/anuncie_aqui.jpg";?>>
		</DIV>		<?php //lateral derecho ?>
		
<!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->		
	
	</DIV> <?php //row?>
</DIV>	<?php //principal ?>