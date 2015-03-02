<html>
	<head>
		<title>Registro - Persona</title>
		<script type="text/javascript" src="../js/validaciones.js"></script>
	</head>
	<body>
		<form name="pant" method="POST" action="../control/c_persona.php">
			<table width="881" align="center" cellpadding="0" cellspacing="0" class="white">

				<table width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>	
						<td width="100%"><img src="../imagenes/encabezado.png" width="100%" height="79" alt=""/></td>
					</tr>
				</table>

				<hr width="881" size="3" color="red"><br><br>

				<table border="1" width="881" align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>
						<td  valign="top">
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
								<th align="center"><h3>Registro de Paciente</h3></th>
							</tr>
						</table>

						<table border="1" align="center" width="300">
							<tr>
								<td height="50">Tipo de Paciente<br>
									<select name="tipopaciente">
										<option>...</option>
										<option Value="estudiante">Estudiante</option>
										<option value="trabajador">Trabajador</option>
									</select>
								</td>
							</tr>
						</table><br>

						<table align="center" width="27%">
							<tr>
								<td align="center" colspan="3">
									<input type="hidden" name="ope">
									<input type="button" value="Incluir" onClick="puente(this.value)"> 
									<input type="button" value="Consultar" onClick="puente(this.value)"><br>
									<input type="button" value="Modificar" onClick="puente(this.value)"> 
									<input type="button" value="Eliminar" onClick="puente(this.value)">
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</table>
				
			</table> 
		</form>
	</body>
</html>