<html>
	<head>
		<title>Consulta - Persona</title>
		<script type="text/javascript" src="../js/validaciones.js"></script>
	</head>
	<body>
		<form name="cons" method="POST" action="../control/c_persona.php">
			<table width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
			<table width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
				<tr>	
					<td width="100%"><img src="../imagenes/encabezado.png" width="100%" height="79" alt=""/></td>
				</tr>
				</table>
				<hr width="881" size="3" color="red"><br><br>
				<table border="1" width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>
						<td valign="top">
							<ul type="none">
								<lh><h3>Menu</h3></lh>
								<li><a href="v_registrodoctor.php">Gestion de Citas</a></li><br>
								<li><a href="v_consulta.php">Consulta</a></li><br>
								<li><a href="v_referencia.php">Referencia</a></li><br>
								<li><a href="#">Examenes de Laboratorio</a></li><br>
							</ul>
						</td>
						<td>
				<table border="1" width="700" height="70" align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>
						<th align="center"><h3>Consulta de Paciente</h3></th>
					</tr>
				</table>
				<table  border="1" align="center" width="300">
					<tr height="50">
						<td align="right" colspan="2">Fecha de Consulta:<input type="text" id="fecha" name"fecha" onkeypress="ValidaSoloNumeros()"> </td>
					</tr>
					<tr height="50">
						<td colspan="2">Motivo de Consulta:<br><textarea>Ingrese Motivo...</textarea></td>
					</tr>
					<tr>
						<th align="left" colspan="2">Examen Fisico</th>
					</tr>
					<tr height="50">
						<td align="center">Peso:<input size="2"></td><td align="center">Talla:<input size="2"></td>
					</tr>
					<tr height="50">
						<td align="center">FC:<input size="2"></td><td align="center">Pulso:<input size="2"></td>
					</tr>
					<tr height="50">
						<td align="center">FR:<input size="2"></td><td align="center">TA:<input size="2"></td>
					</tr>
					<tr height="50">
						<td colspan="2" >Referido al Servicio de:<br><textarea>Ingrese Servicio...</textarea></td>
					</tr>
					<tr height="50">
						<td colspan="2" >Observacion:<br><textarea>Ingrese Observacion...</textarea></td>
					</tr>
					<tr>
						<td><input type="button" value="Imprime" onClick="imprime()"></td>
					</tr>
				</table>
				</td>
					</tr>
				</table>
			</table> 
		</form>
	</body>
</html>