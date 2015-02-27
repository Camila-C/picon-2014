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

	<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>admin_cont/modificacion_form_evento" METHOD = "POST">

	<!--formulario-->
	<FIELDSET name = "modificacion_evento"> 
	<LEGEND> <b> Modificación de un evento: establecer nuevos valores </b> </LEGEND> 
	
	<br>
	<LABEL> <b> Id: <?php echo $ev -> id;?> </b></LABEL>
	<INPUT TYPE = "hidden" NAME = "id" SIZE = "30" MAXLENGTH="30" value = "<?php echo $ev -> id; ?>" >
	<br>
	
	<LABEL> <b> Nombre </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "nombre" SIZE = "30" MAXLENGTH="30" value = "<?php echo $ev -> nombre; ?>" >
	<br>
	
	<LABEL> <b> Fecha de inicio </b> </LABEL> <br>
	<?php $fecha_i = strtotime( $ev-> fecha_inicio ); ?>
	<INPUT TYPE = "date" NAME = "fecha_inicio" SIZE = "30" value = "<?php echo date('Y-m-d', $fecha_i); ?>" >
	<br>
	
	<LABEL> <b> Fecha de fin </b> </LABEL> <br>
	<?php $fecha_f = strtotime( $ev-> fecha_fin ); ?>
	<INPUT TYPE = "date" NAME = "fecha_fin" SIZE = "30" value = "<?php echo date('Y-m-d', $fecha_f); ?>" >
	<br>
	
	<LABEL> <b> Hora de inicio </b> </LABEL> <br>
	<?php $hora_i = strtotime( $ev-> hora_inicio ); ?>
	<INPUT TYPE = "time" NAME = "hora_inicio" SIZE = "30" value = "<?php echo date('h:i', $hora_i); ?>" >
	<br>
	
	<LABEL> <b> Hora de fin </b> </LABEL> <br>
		<?php $hora_f = strtotime( $ev-> hora_fin ); ?>
	<INPUT TYPE = "time" NAME = "hora_fin" SIZE = "30" value = "<?php echo date('h:i', $hora_f); ?>" >
	<br>
	
	<LABEL> <b> Lugar </b> </LABEL> <br>
	<SELECT name = "lugar">
	<?php
		//echo '<OPTION value="' .$lugar[$i] -> tipo_cancha.'" SELECTED> Elija el lugar </OPTION>';
		for ($i = 0; $i < sizeof($lugar); $i++) {
			if ($ev -> nombre_cancha == $lugar -> nombre_cancha){
				echo '<OPTION value="'.$lugar[$i] -> id_cancha.'" SELECTED>'.$lugar[$i] -> nombre_cancha.' , ' .$lugar[$i] -> tipo_cancha.'</OPTION>';
			} else {
				echo '<OPTION value="'.$lugar[$i] -> id_cancha.'">'.$lugar[$i] -> nombre_cancha.' , ' .$lugar[$i] -> tipo_cancha.'</OPTION>';
			}	
}?>
	</SELECT>
	<br>
	
	<LABEL> <b> Privado </b> </LABEL> <br>
	<SELECT name = "privado">
	<?php if ($ev -> privado == 'Si') {
			echo '<OPTION TYPE = "radio" value="'.$ev -> privado.'" SELECTED> Si </OPTION>';
			echo '<OPTION TYPE = "radio" value="'.$ev -> privado.'" > No </OPTION>';
		}
		else{
			echo '<OPTION value="'.$ev -> privado.'" > Si </OPTION>';
			echo '<OPTION value="'.$ev -> privado.'" SELECTED > No </OPTION>';		}
			?>
	</SELECT>
	<br>
	
	<LABEL> <b> Descripcion </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "descripcion" SIZE = "30" MAXLENGTH="30" value = "<?php echo $ev -> descripcion; ?>" >
	<br>
	
	<LABEL> <b> Participantes (numero) </b> </LABEL> <br>
	<INPUT TYPE = "text" NAME = "participantes" SIZE = "30" MAXLENGTH="30" value = "<?php echo $ev -> participantes; ?>" >
	<br>
	
	<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_eventos'" VALUE = Cancelar>
	<INPUT TYPE = "submit" VALUE = "guardar">
	</FIELDSET>
	
	</FORM>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->