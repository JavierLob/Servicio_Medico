<html>
	<head>
		<title>Registro - Persona</title>
		<script type="text/javascript" src="../js/libro.js"></script>
	</head>
	<body>
		<form name="pant" method="POST" action="../control/c_persona.php">
			<table width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
			<table width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
				<tr>	
					<td width="100%"><img src="../imagenes/encabezado.png" width="100%" height="79" alt=""/></td>
				</tr>
				</table>
				<hr width="881" size="3" color="red"><br><br>
				<table border="0" width="881"  align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>
						<td valign="top">
							<ul type="none">
								<lh><h3>Menu</h3></lh>
								<li><a href="v_persona.php">Registro de pacientes</a></li><br>
								<li><a href="#">Consulta</a></li>
							</ul>
						</td>
					<td>
				<table width="700"  align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>
						<th align="center"><h3>Registro de Paciente</h3></th>
					</tr>
				</table>
				<table  align="center" width="27%">
					<tr>
						<td width="50%">Nombres<br><input type="text" name="prno" value="<?php if (isset($_GET["prno"])) echo $_GET["pla"]?>"></td>
						<td width="50%"><br><input type="text" name="seno"></td>
					</tr>
					<tr>
						<td>Apellidos<br><input type="text" name="prap"></td>
						<td><br><input type="text" name="seap"></td>
					</tr>
					<tr>
						<td colspan="2">Cedula<br><input type="text" name="cepe"></td>
					</tr>
					<tr>
						<td colspan="3">Direcci&oacute;n<br><textarea type="text" name="dipe"></textarea></td>
					</tr>
					<tr>
						<td>Sexo<br>
							<select name="sexpe">
								<option value="N">Seleccionar...</option>
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
						</td>
					</tr>
				</table>
				<table align="center" width="300">
					<tr>
						<td colspan="3">Fecha de nacimiento</td>
					</tr>
					<tr>
						<td width="9%">
							<select name="fecdipe">
								<option>D&iacute;a</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
						</td>					
						<td width="9" align="center">
							<select name="fecmepe">
								<option>Mes</option>
								<option value="1">Enero</option>
								<option value="2">Febrero</option>
								<option value="3">Marzo</option>
								<option value="4">Abril</option>
								<option value="5">Mayo</option>
								<option value="6">Junio</option>
								<option value="7">Julio</option>
								<option value="8">Agosto</option>
								<option value="9">Septiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
							</select>
						</td>
						<td width="9%">
							<select name="fecanpe">
								<option>A&ntilde;o</option>
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