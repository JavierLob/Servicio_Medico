<html>
	<head>

		<title>Referencia</title>

		<script type="text/javascript" src="../js/validaciones.js"></script>

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
								<tr >
									<th align="center"><h3>Referencia</h3></th>
								</tr>
							</table>

							<table border="1"  align="center" width="300">
								<tr>
									<td align="right" height="50" colspan="3">
										Fecha consulta :<input type="date"/>
									</td>
								</tr> 
								<tr>
									<td width="50%" height="40">Nombre<br><input type="text" name="prap" onkeypress="return soloLetras(event)" onpaste="return false"></td>
									<td width="50%" height="40">Apellido<br><input type="text" name="seap" onkeypress="return soloLetras(event)" onpaste="return false"></td>
								</tr>
							</table>

							<table border="1" align="center" width="300">
								<tr>
									<td height="30" colspan="3">Fecha de nacimiento</td>
								</tr>
								<tr>
									<td height="50" width="9%">
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
									<td height="50" width="9" align="center">
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
									<td width="9%" height="50">
										<select name="fecanpe">
											<option>A&ntilde;o</option>
										</select>
									</td>
								</tr>
							</table>

							<table border="1" align="center" width="300">
								<tr>
			                        <td height="50" colspan="2">Carrera<br>
										<select name="carrera">
											<option value="sel">Seleccionar...</option>
											<option value="ad">Administracion</option>
											<option value="ag">Agroalimentaria</option>
			                                <option value="el">Electricidad</option>
			                                <option value="in">Informatica</option>
			                                <option value="ma">Mantenimiento</option>
			                                <option value="me">Mecanica</option>
			                                <option value="sga">Seguridad Alimentaria</option>
										</select>
									</td>
								</tr><br>                      
			                        <td height="50" width="9">Semestre<br>
										<select name="sexpe">
											<option value="sel">Seleccionar...</option>
											<option value="I">I Semestre</option>
											<option value="II">II Semestre</option>
			                                <option value="III">III Semestre</option>
			                                <option value="IV">IV Semestre</option>
			                                <option value="V">V Semestre</option>
			                                <option value="VI">VI Semestre</option>
			                                 <option value="VII">VII Semestre</option>
			                                <option value="VIII">VIII Semestre</option>
										</select>
									</td>
			                         <td height="50" width="9">Turno<br>
										<select name="sexpe">
											<option value="sel">Seleccionar...</option>
											<option value="ad">Diurno</option>
											<option value="ag">Nocturno</option>
			                                <option value="el">Fin de Semana</option>                                                  
										</select>
									</td>
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