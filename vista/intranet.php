<html>
	<head>
		<title>Registro - Persona</title>
	    <link href="../estilo/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../estilo/bootstrap-3/css/style-intranet.css" rel="stylesheet">
	    <link href="../estilo/bootstrap-3/DataTables-1.10.2/media/css/jquery.dataTables.css" rel="stylesheet">
	    <script src="../estilo/bootstrap-3/DataTables-1.10.2/media/js/jquery.js"></script>

		<script type="text/javascript" src="../js/validaciones.js"></script>
	</head>
	<body>
		<header class="span12">
			<img src="../imagenes/encabezado.png" width="100%" height="79" alt=""/>
		</header>
		<section class="span12">
			<aside class="col-sm-3 col-md-2 sidebar">
				<nav>
					<ul>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</nav>
			</aside>
			<section class="col-sm-9 col-md-10 main">
				<?php
                if(file_exists($vista.'.php')) //verifica el contenido de la variable vista.
                {
                        include($vista.'.php');// y si exite el archivo que trae este incluirá el cintenido
                }   
                else
                {
                    include_once("panel_inicio.php");// Si no exite o no tiene nada la variable vista entonces trae por defecto la vista panel_inicio.php
                }
                    
            	?> 
          	<footer>© Equipo de desarrollo aulafrontino.</footer>
			</section>
		</section>
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

    </script>
</html>