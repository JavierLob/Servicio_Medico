<?php 
	session_start();
	$vista=$_GET['vista'];
	$msj = $_SESSION['msj'];
?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Intranet - Servicio Medico</title>
	    <link href="../estilo/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../estilo/bootstrap-3/css/style-intranet.css" rel="stylesheet">
	    <link href="../estilo/bootstrap-3/DataTables-1.10.2/media/css/jquery.dataTables.css" rel="stylesheet">
	    <script src="../estilo/bootstrap-3/DataTables-1.10.2/media/js/jquery.js"></script>

		<script type="text/javascript" src="../js/validaciones.js"></script>
		<script type="text/javascript" src="../js/validacion.js"></script>
	</head>
	<body>
		<header class="span12">
			<img src="../imagenes/encabezado.png" width="100%" height="100" alt=""/>
		</header>
		<section class="span12">
			<aside style="margin-top:2px;" class="col-sm-3 col-md-2 sidebar">
				<nav>
					<ul>
						<li><a href="./intranet.php">Inicio</a></li>
						<li><a href="?vista=etnia">Etnia</a></li>
						<li><a href="?vista=sede">Sede</a></li>
						<li><a href="?vista=tiporeferencia">Tipo Referencia</a></li>
						<li><a href="?vista=centroasistencial">Centro Social</a></li>
						<li><a href="?vista=tipoexamen">Tipo Examen</a></li>
						<li><a href="?vista=tipo_paciente">Tipo Paciente</a></li>
						<li><a href="?vista=laboratorio">Laboratorio</a></li>
						<li><a href="?vista=departamento">Departamento</a></li>
						<li><a href="?vista=estado">Estado</a></li>
						<li><a href="?vista=carrera">Carrera</a></li>
						<li><a href="?vista=municipio">Municipio</a></li>
						<li><a href="?vista=parroquia">Parroquia</a></li>
						<li><a href="?vista=discapacidad">Discapacidad</a></li>
						<li><a href="?vista=enfermedadescronicas">Enfermedades Cronicas</a></li>
						<li><a href="logout.php">Cerrar Sesión</a></li>
					</ul>
				</nav>
			</aside>
			<section style="margin-top:2px;" class="col-sm-9 col-md-10 main">
				<?php
		            if(file_exists($vista.'.php')) //verifica el contenido de la variable vista.
		            {
		                    include($vista.'.php');// y si exite el archivo que trae este incluirá el cintenido
		            }   
		            else
		            {
		                include_once('inicio.php');// Si no exite o no tiene nada la variable vista entonces trae por defecto la vista panel_inicio.php
		            }		                
            	?> 
			</section>
		</section>
  		<footer>&copy Derechos reservados <?php print(date('Y')); ?></footer>
	</body>
    <script src="../estilo/bootstrap-3/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="../estilo/bootstrap-3/DataTables-1.10.2/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
        $('#filtro').dataTable();
    } );
        $(function () {
            $("[data-toggle='popover']").popover();
        });
        <?php
        	if(($msj) && (!empty($msj)))
        		print('alert("'.$msj.'");');

        	unset($_SESSION['msj']);
        ?>
    </script>
</html>