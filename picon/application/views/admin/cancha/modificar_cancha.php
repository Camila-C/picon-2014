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

		<FORM ACCEPT-CHARSET = "utf-8" ACTION = "<?php echo base_url(); ?>admin_cont/modificacion_form_cancha" METHOD = "POST">

			 <!--formulario-->
			<FIELDSET name = "modificacion_cancha"> 
			<LEGEND> <b> Modificación de un cancha: establecer nuevos valores </b> </LEGEND> <br>
			
			<LABEL> <b> Id: <?php echo $data -> id;?> </b> </LABEL> <br>
				<INPUT TYPE = "hidden" NAME = "id" SIZE = "30" MAXLENGTH="11" value = "<?php echo $data -> id; ?>" >
			<br>
			
			<LABEL> <b> Nombre </b> </LABEL> <br>
				<INPUT TYPE = "text" NAME = "nombre" SIZE = "30" MAXLENGTH="50" value = "<?php echo $data -> nombre; ?>" >
			<br>
			
			<LABEL> <b> Direccion </b> </LABEL> <br>
				<INPUT TYPE = "text" NAME = "direccion" SIZE = "30" MAXLENGTH="50" value ="<?php echo $data -> direccion;?>">
			<br>
			
			<LABEL> <b> Latitud </b> </LABEL> <br>
				<INPUT TYPE = "text" NAME = "latitud" SIZE = "30" MAXLENGTH="15" value ="<?php echo $data -> latitud;?>">
			<br>
			
			<LABEL> <b> Longitud </b> </LABEL> <br>
				<INPUT TYPE = "text" NAME = "longitud" SIZE = "30" MAXLENGTH="15" value ="<?php echo $data -> longitud;?>">
			<br>
			
			<LABEL> <b> Descripcion </b> </LABEL> <br>
				<INPUT TYPE = "text" NAME = "descripcion" SIZE = "30" MAXLENGTH="50" value ="<?php echo $data -> descripcion;?>">
			<br>
			
			<LABEL> <b> Seleccione nuevo tipo de cancha </b> </LABEL>
			<SELECT name = "tipo">	
			
			
			<?php for ($i = 0; $i < sizeof($tipo); $i++){
					if( $data -> nombre_tipo == $tipo[$i] -> nombre_tipo){
						echo '<OPTION value="'.$tipo[$i] -> id_tipo.'" SELECTED>'.$tipo[$i] -> nombre_tipo; '</OPTION>';
					}
					else{
						echo '<OPTION value="'.$tipo[$i] -> id_tipo.'">' .$tipo[$i] -> nombre_tipo; '</OPTION>';
					}
				}?>
			</SELECT>
			<br>
			<br>
			<INPUT TYPE = "button" ONCLICK = "location = '<?php echo base_url();?>admin_cont/administrar_canchas'" VALUE = Cancelar>
			<INPUT TYPE = "submit" VALUE = "guardar">
			</FIELDSET>
			
		</FORM>

	</DIV> <!-- / centro -->
</DIV> <!-- principal -->