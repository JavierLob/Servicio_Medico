<html>
	<head>
		<link href="../estilo/style2.css" rel="stylesheet" type="text/css"/>
		<title>Login</title>
	</head>
		<form>
			<table width="881" align="center" cellpadding="0" cellspacing="0" class="white">
				<table width="881" align="center" cellpadding="0" cellspacing="0" class="white">
					<tr>	
						<td width="100%"><img src="../imagenes/encabezado.png" width="100%" height="79" alt=""/></td>
					</tr>
				</table> 
				<hr width="881" size="3" color="red"><br><br>
				<table id="tablaReg" border="1" align="center">
					<tr>
						<th colspan="2" align="center">Acceso Usuario</th>
					</tr>
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="f_nombres" value=""></td>
					</tr>		
					<tr>
						<td>Contrase&ntilde;a:</td>
						<td><input type="password" name="f_apellidos" value=""></td>
					</tr>
				
					<tr>
						<td colspan="2"><center>
						<input type="button"  name="b_Guardar" value="Entrar" onClick="Guardar()">
						<input type="button"  name="b_Cancelar" value="Cancelar" onClick="Cancelar()"></center></td>
					</tr>
				</table>
			</table>
		</form>
</html>