<?php 
	session_start(); //inicia la session, la cual permite trabajar con la variable $_SESSION

    $usuario=(isset($_SESSION['idusuario']))?$_SESSION['idusuario']:"";//toma el valor que se guarda en la variable vista que está en la variable $_SESSION
    $msj=(isset($_SESSION['msj']))?$_SESSION['msj']:"";//toma el valor que se guarda en la variable vista que está en la variable $_SESSION
    $vista=(isset($_GET['vista']))?$_GET['vista']:"";//toma el valor que se guarda en la variable vista que está en la URL.
    if(!$usuario)  //verifica si existe algún usuario logueado en el arreglo usuario de la variable $_SESSION
    {
        echo '<script>alert("Acceso Denegado! Usted no tiene una sesión iniciada en el sistema.");window.location.href="../index.php";</script>'; // Si no existe un usuario logeado entonces le mostraŕa un mensaje y lo sacará para el inicio! 
    }


    require_once('../modelo/m_rol.php');//Trae el archivo clase_rol.php para instanciarlo
    require_once('../libreria/utilidades.php');//Trae el archivo utilidades.php para luego instanciarlo
    require_once('../modelo/m_bitacora.php');//Trae el archivo utilidades.php para luego instanciarlo
    $lobjRol=new clsRol;//Instancia la clase clsRol en $lobjRol, para poder usar sus metodos y atributos 
    $lobjUtil=new clsUtil;//Instancia la clase clsUtil en $lobjRol, para poder usar sus metodos 
    $lobjBitacora=new clsBitacora;//Instancia la clase clsUtil en $lobjRol, para poder usar sus metodos
    $menu='';//Declaro la variable $menu
    $lobjRol->set_Rol($_SESSION['idrol']);//Aquí se envia  mediante un metodo SET a la clase rol el idrol del usuario (que se guardo cuando se logueo en el sistema).
    $laModulos=$lobjRol->consultar_modulos();//Se consultan y se guardan en la variable $laModulos los módulos que tiene asignado el rol del usuario,

    $Acceso_servicio=false;//Para verificar que el usuario no entre a un servicio que no tiene asignado declaro una variable como false, y luego la cambiaré a true si alguno de los servicios que tiene asignado el usuario es igual a la direccion a la que está entrando.

    //Obtengo la carpeta del modulo
    $carpeta= split('/',$vista); 
    if($carpeta[0]=='')
        $activo='active';
    // se arma en la variable $menu todo el menu que se le mostrará al usuario
    $menu.='<li class="'.$activo.'"><a href="intranet.php">Inicio</a></li>';    
    for($i=0;$i<count($laModulos);$i++) //Se recorre un ciclo para poder extraer los datos de cada uno de los módulos que tiene asignado el rol
    {
        
        $modulo=strtolower($lobjUtil->quitar_acentos($laModulos[$i][1]));        
        $activo=($modulo==$carpeta[0])?'active':'';

        $menu.='<li class="dropdown '.$activo.'" >'; 
        $menu.='<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$laModulos[$i][1].'<span class="caret"></span></a>';//Aquí se guar el nombre del módulo y los servicios de este modulo se van a ir anidando a partir de aquí.
        $menu.='<ul class="dropdown-menu" role="menu">';
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); // aquí se consultan y guardan en la variable $laServicios los servicios que tiene registrado este módulo.
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        { 
            if($laServicios[$j][3])//Sí el servicio es visible para el menú lo agrega, sino no
            {    
                $menu.='<li><a href="?vista='.$laServicios[$j][2].'">'.$laServicios[$j][1].'</a></li>'; //aqui se van agregando cada uno de los servicios al menú.
            }
            if($vista=="" || $vista==$laServicios[$j][2])//aquí voy comparando los servicios del usuario con la direccion a la cual a entrado.
            {
                $Acceso_servicio=true;

            }                                       
        } 
        $menu.='</ul>'; 
        $menu.='</li>'; //se cierra la construccion del menú
    }


    $lcReal_ip=$lobjUtil->get_real_ip();//Ejecuta el función get_real_ip para saber la IP de el usuario.
    $lcDireccion=$_SERVER['REQUEST_URI'];//obtiene la direccion en la que se encuentra el usuario
    $ldFecha=date('Y-m-d h:m');//obtiene la fecha actual

    $lobjBitacora->set_Datos($lcDireccion,$ldFecha,$lcReal_ip,'','','',$_SESSION['idusuario'],$Acceso_servicio); //envia los datos a la clase bitacora
    $lnHecho=$lobjBitacora->registrar_bitacora();//registra los datos en la tabla tbitacora.

    /*if(!$Acceso_servicio)  //verifica si existe algún usuario logueado en el arreglo usuario de la variable $_SESSION
    {
        echo '<script>alert("Acceso Denegado! Usted no tiene el acceso permitido a este servicio del sistema.");window.location.href="intranet.php";</script>'; // Si no tiene asignado el servicio al cual intentó entrar, entonces lo manda al inicio de la intranet.! 
    }*/
?>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Intranet - Servicio Medico</title>
	    <link href="../estilo/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/bootstrap-3/css/style-intranet.css" rel="stylesheet">
	    <link href="../estilo/bootstrap-3/css/style-responsive.css" rel="stylesheet">
        <link href="../estilo/bootstrap-3/DataTables-1.10.2/media/css/jquery.dataTables.css" rel="stylesheet">
	    <link href="../estilo/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
	    <script src="../estilo/bootstrap-3/DataTables-1.10.2/media/js/jquery.js"></script>        
        <script src="../js/jquery.maskedinput.min.js"></script>

		<script type="text/javascript" src="../js/validaciones.js"></script>
		<script type="text/javascript" src="../js/validacion.js"></script>
	</head>
	<body class="sticky-header">
		<div class="left-side sticky-left-side" style="/* overflow: hidden; */ /* outline: none; */">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="../estilo/bootstrap-3/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="../estilo/bootstrap-3/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="../estilo/bootstrap-3/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">José Vargas</a></h4>
                        <span>ADMINISTRADOR</span>
                    </div>
                </div>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href=""><i class="fa fa-home"></i> <span>INICIO</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>link2</span></a>
                    <ul class="sub-menu-list">
                        <li><a href=""> link</a></li>
                        <li><a href=""> link</a></li>
                    </ul>
                </li>
                <li class=""><a href=""><i class="fa fa-bullhorn"></i> <span>link3</span></a></li>
                <li class=""><a href=""><i class="fa fa-bullhorn"></i> <span>link3</span></a></li>
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
		<section class="main-content">

            <header class="header-section">

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-bars"></i></a>
                <!--toggle button end-->

                <!--search start-->
                
                <!--search end-->

                <div class="menu-right">
                    <ul class="notification-menu">
                        <li class="">
                            <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="../estilo/bootstrap-3/images/photos/user-avatar.png" alt="">
                                José Vargas | <i class="text-primary fa fa-user"></i> Administrador
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--notification menu end -->

            </header>


			<section style="margin-top:2px;" class="main">
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
  		<footer style="margin-top:0">&copy Derechos reservados <?php print(date('Y')); ?></footer>
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
    <script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <!--common scripts for all pages-->
    <script src="../js/scripts.js"></script>


</html>