<?php /**esta ventana es usada por el usuario para administrar los eventos que ha creado y enviar las invitaciones*/ ?>

<BODY>
<DIV class =" principal">
<DIV class =" cabecera ">

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
	
	<DIV class = "cartel">
		
		
		
		<LABEL> <b> Id: <?php echo $ev->id ?> </b></LABEL> <br>
		<br>
		
		<LABEL> <b> Nombre: <?php echo $ev->nombre ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Fecha de inicio : <?php echo date('Y/m/d', strtotime( $ev -> fecha_inicio )); ?> </b> </LABEL> <br>
		 <br>
		 
		<LABEL> <b> Fecha de fin : <?php echo date('Y/m/d', strtotime( $ev -> fecha_fin )); ?> </b> </LABEL> <br>
		<br>
		 
		<LABEL> <b> Hora de inicio : <?php echo date('h:i', strtotime( $ev -> hora_inicio )); ?> </b> </LABEL> <br>
		<br>
		 
		<LABEL> <b> Hora de fin : <?php echo date('h:i', strtotime( $ev -> hora_fin )); ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Privado: <?php echo $ev->privado ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Descripcion: <?php echo $ev->descripcion ?> </b> </LABEL> <br>
		<br>
		
		<LABEL> <b> Participantes: <?php echo $ev->participantes ?> </b> </LABEL> <br>
		<br>
				
		<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_eventos'" VALUE = Cancelar>
		<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/baja_evento/<?php echo $ev -> id; ?>'" VALUE = Eliminar> <br>
		</FIELDSET>
		
		</FORM>
	</DIV>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->