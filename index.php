<?php 
	session_start();
    $msj=(isset($_SESSION['msj']))?$_SESSION['msj']:"";//toma el valor que se guarda en la variable vista que está en la variable $_SESSION

?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Departamento de Bienestar Estudiantil de la UPTP 'JJ Montilla'">
		<meta name="author" content="">
		<title>Bienestar Estudiantil | SALUD</title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
		<link rel="shortcut icon" href="/favicon.ico">
		<!-- Google Webfont -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!-- CSS -->
		<link rel="stylesheet" href="media/css/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="media/css/bootstrap.css">
		<link rel="stylesheet" href="media/css/style.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- MODERNIZR -->
		<script src="media/js/modernizr.custom.js"></script>
	</head>
	<body id="page-top">
		<!-- HEADER -->
		<header>
			<div class="top-bar">
				<div class="container">
					<img src="media/images/cintillo2.jpg" alt="">
				</div>
			</div>
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="col-md-12">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header page-scroll">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="./index.html">Bienestar Estudiantil</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a class="page-scroll" href="#page-top">INICIO</a></li>
								<li><a class="page-scroll" href="#acerca">ACERCA</a></li>
								<li><a class="page-scroll" href="#servicios">SERVICIOS</a></li>
								<li><a class="page-scroll" href="#faq">FAQ</a></li>
								<li><a class="page-scroll" href="#footer">CONTACTANOS</a></li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
			</nav>
		</header>
		<!-- INICIO -->
		<section id="intro">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-7">
								<h2>Bienvenido</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sapien leo, consequat sed aliquam at, convallis sit amet metus. Vivamus malesuada, ex in placerat bibendum, est dui euismod sapien, eget tincidunt nunc ipsum ut mauris.</p>
							</div>
							<div class="col-md-5 sub-form">
								<div id="sub-form">
									<form class="subscribe" action="control/c_acceso.php" id="invite" method="POST">
										<div class="heading-block border-white">
				                            <h4>ACCEDE A TU CUENTA</h4>
				                        </div>
										<input type="text" name="usuario" id="fname" class="fname" placeholder="USUARIO">
										<input type="password" class="e-mail" placeholder="CONTRASEÑA" name="clave" id="address">
										<p clas="text-danger"><a href="vista/recuperar_clave"><i class="fa fa-key"></i> Recuperar Contraseña</a></p>
										<div class="clearfix"></div>
										<div class="space40"></div>
										<button type="submit" class="btn-main btn-center" name="entrar" value="1">ACCEDER</button>
									</form>
								</div>
								<span id="result"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ACERCA -->
		<section id="acerca">
			<div class="container">
				<div class="heading-block border-color center">
	                <h2>ACERCA</h2>
	            </div>
	            <div class="row">
					<div class="col-md-8">
						<p class="text-justify">El Departamento de Bienestar Estudiantil de la UPTP "JJ Montilla" proporciona los Servicios Médicos basicos que permitan al estudiantado desarrollar sus actividades académicas de forma satisfactoria. En este sentido, se ofrece consulta medica general y emergencia a todos los miembros de la comunidad universitaria: estudiantes, docentes, personal administrativo y obrero. De igual manera los estudiantes cuentan con consultas médicas especializadas, odontología y laboratorio.</p>
						<div class="clearfix space10"></div>
						<a href="#" class="btn-main btn-left">Leer más</a>
						<div class="space40"></div>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="media/images/2.png" alt="">
					</div>
				</div>
			</div>
		</section>

		<!-- HORARIOS -->
		<section id="horarios">
			<div class="container">
				<div class="heading-block border-color center">
		            <h2>HORARIOS</h2>
		        </div>
		        <div class="row">
		        	<div class="col-md-4">
		                <div class="counter counter-lined"><span><i class="fa fa-clock-o"></i> Mañana </span> <h5>9am a 12pm</h5></div>
		        	</div>
		        	<div class="col-md-4">
		                <div class="counter counter-lined"><span><i class="fa fa-clock-o"></i> Tarde </span> <h5>3pm a 6pm</h5></div>
		        	</div>
		        	<div class="col-md-4">
		                <div class="counter counter-lined"><span><i class="fa fa-clock-o"></i> Noche </span> <h5>6pm a 9pm</h5></div>
		        	</div>
		        </div>
			</div>
		</section>
		
		<!-- SERVICIOS -->
		<section id="servicios">
			<div class="container">
				<div class="heading-block border-color center">
		            <h2>Servicios Médicos</h2>
		        </div>
		        <div role="tabpanel">
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs nav-stacked col-md-3" role="tablist">
				    <li class="active" role="presentation"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">Medicina General</a></li>
				    <li role="presentation"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">Consulta Psicopedagógica</a></li>
				    <li role="presentation"><a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">Especialidades Médicas</a></li>
				    <li role="presentation"><a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">Odontología</a></li>
				    <li role="presentation"><a href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">Laboratorio Clínico</a></li>
				    <li role="presentation"><a href="#tab-6" aria-controls="tab-6" role="tab" data-toggle="tab">Control Prenatal</a></li>
				    <li role="presentation"><a href="#tab-7" aria-controls="tab-7" role="tab" data-toggle="tab">FAMES</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content col-md-9">
				    <div role="tabpanel" class="tab-pane active" id="tab-1">
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>DOCTOR</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Dr. Francisco Gámez</td>
					          <td>9:00am a 12:00pm</td>
					        </tr>
					        <tr>
					          <td>Dra. Aleida Gutiérrez</td>
					          <td>2:00pm a 5:00pm</td>
					        </tr>
					        <tr>
					          <td>Dr. Enicson Sequera</td>
					          <td>6:00pm a 9:00pm</td>
					        </tr>
					      </tbody>
					    </table>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="tab-2">
				    	<p class="text-justify">Es un servicio dirigido a los estudiantes regulares de la Institución, prestando atención psicopedagógica con el fin de proporcionar herramientas a los estudiantes que presenten dificultades en su desempeño acádemico. El proyecto busca resguardar la salud de los educandos, y adémas, como lo expresa la titular del despacho de Educación Universitaria: "Crear el ambiente más propicio para su desarrollo académico".</p>
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>LICENCIADO</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Raúl Alcalá</td>
					          <td>2:00pm a 5:00pm</td>
					        </tr>
					      </tbody>
					    </table>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="tab-3">
				    	<p class="text-justify">Para ser referido a las Especialidades  debe pasar previamente por la consulta de Médicina General de la Institución en los turnos respectivos.</p>
				    	<h4 class="subtitulo space30">Requisitos:</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<ul class="list">
				    		<li>Carnet Estudiantil o Constacia de Estudio vigente.</li>
				    		<li>Referencia emitida por Servicio Médico de la UPTP "JJ Montilla", dichas referencias son entregadas del 1ero al 25 de cada mes.</li>
				    	</ul>
				    	<h4 class="subtitulo space30">especialidades:</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-center"><b>GINECOLOGÍA - OBSTETRICÍA </b></p>
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>DOCTOR</th>
					          <th>DIRECCIÓN</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Dr. Carlos Casal.</td>
					          <td>Clínica Oscar Raúl Casal.</td>
					          <td>Lunes a Jueves a las 2.00 pm.</td>
					        </tr>
					        <tr>
					          <td>Dr. Jesús Ballarales.</td>
					          <td>Araure.</td>
					          <td>Lunes a Viernes  a las 2.00 pm.</td>
					        </tr>
					        <tr>
					          <td>Dra. Gloria de Anzola.</td>
					          <td>Hospital Privado.</td>
					          <td>Lunes a Viernes  a las 2.00 pm</td>
					        </tr>
					      </tbody>
					    </table>

					    <p class="text-center"><b>OTORRINOLARINGOLOGÍA</b></p>
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>DOCTOR</th>
					          <th>DIRECCIÓN</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Dr. Miguel Gallo </td>
					          <td>Clínica Santa María. Acarigua.</td>
					          <td>Lunes a Viernes 2 pm.</td>
					        </tr>
					      </tbody>
					    </table>

					    <p class="text-center"><b>TRAUMATOLOGÍA</b></p>
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>DOCTOR</th>
					          <th>DIRECCIÓN</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Dr. Rafael Rodriguez.</td>
					          <td>Clínica Vargas.Araure.</td>
					          <td>Lunes a Viernes 2 pm</td>
					        </tr>
					      </tbody>
					    </table>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="tab-4">
				    	<p class="text-justify">Los estudiantes referidos reciben tratamiento periodontales, curaciones con resina fotocurables, extracciones dentales entre otras, todo esto con la finalidad de proporcionarles el mejor estado de salud bucal posible que les permita un óptimo desempeño académico.</p>
				    	<ul class="list">
				    		<li>Pasar previamente por las consultas de Medicina General de la Institución en los turnos respectivos.</li>
				    		<li>Carnet Estudiantil ó Constancia de Estudio tanto para la consulta de Médicina General como para las Especialidades.</li>
				    		<li>Las Referencias son entregadas desde el  día primero(1)  al veinticinco(25) de cada mes</li>
				    	</ul>
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>DOCTOR</th>
					          <th>DIRECCIÓN</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Varios</td>
					          <td>Damas Salesianas. Calle 33, detrás de la Clinica Santa María. Acarigua.</td>
					          <td>Lunes a Viernes: 8:00am a 12:00pm y 2:00 pm a 5:00pm</td>
					        </tr>
					      </tbody>
					    </table>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="tab-5">
				    	<table class="table table-bordered table-striped">
					      <thead>
					        <tr>
					          <th>DIRECCIÓN</th>
					          <th>HORARIO</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>Damas Salesianas. Calle 33, detrás de la avenida Paéz. Acarigua.</td>
					          <td>De Lunes a Viernes</td>
					        </tr>
					      </tbody>
					    </table>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="tab-6">
				        <h4 class="subtitulo">Primera Consulta</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">Una vez realizados los exámenes se debe asignar nueva consulta médica para la revisión de exámenes y prescri-bir los tratamientos que de allí se deriven. En pacientes que inicien su control prenatal.</p>
				    	<h4 class="subtitulo space30">Controles regulares</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">
				    		Cada cuatro (04) semanas son los controles desde el momento que la paciente visita por primera (1) vez 
				    	</p>
				    	<h4 class="subtitulo space30">Consultas en caso de embarazo de alto riesgo</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">
				    		Controles semanales a partir de las treinta y cinco (35) semanas de embarazo se refieren los pacientes de alto riesgo a las consultas especializadas de obstetricia.
				    	</p>
				    	<p class="text-justify">
				    		Los pacientes son atendidas para el parto o cesaréa en instituciones públicas ya que el FAMES no tiene cobertura en la zona.
				    	</p>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="tab-7">
				    	<h4 class="subtitulo">¿Quienes se benefician?</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">
				    		La Fundación de Asistencia Médica Estudiantil (F.A.M.ES) da servicios de atención médica, a los estudiantes que cursen una primera carrera de pregrado y que no estén amparados por seguros privados (H.C.M). Este beneficio sera otorgado hasta el día del Acto de Grado, inmediato a la culminación de su carga académica.
				    	</p>
				    	<b>Modalidades de Atención:</b>
				    	<h4 class="subtitulo space30">Emergencias</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">Son los casos que requieren atención médica y/o quirurgica inmediata, ejemplos: hemorragias, fracturas, apendicitis, quemaduras, convulsiones, crisis asmáticas o hipertensiva, etc.</p>
				    	<p class="text-justify"><b>Requisitos:</b> (Consignar en el centro de salud Convenio),  copia de Cédula de identidad, constancia de inscripcón y/o estudio vigente.</p>
				    	<h4 class="subtitulo space30">Maternidad</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">Se brindará atención médica por maternidad a las beneficiarias desde el primer semestre de su carrera universitaria.</p>
				    	<p class="text-justify"><b>Nota:</b> Las benficiarias tendrán derecho a una atención por vida académica, a menos que el embarazo no llegue a un feliz término.</p>
				    	<h4 class="subtitulo space30">Electivas</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">Son todas aquellas atenciones que puedan ser planificadas. Los casos de Septoplastia, Mastectomia, y Queratomileusis requieren aprobación prevía de la Fundación.</p>
				    	<p><b>Requisitos Básicos</b> (Consignar ante la Comisión Salud).</p>
				    	<ul class="list">
				    		<li>Fotocopias de la Cédula de Identidad.</li>
				    		<li>2 Fotos tamaño carnet.</li>
				    		<li>Constancia de estudio original vigente sellada y firmada.</li>
				    		<li>Planilla de Datos del Estudiante.</li>
				    		<li>Informe Médico.</li>
				    		<li>2 últimos recibos de pago del responsable económico.</li>
				    		<li>Control Prenatal (Para casos de maternidad).</li>
				    	</ul>
				    	<h4 class="subtitulo space30">Reembolsos</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">Son aquellos casos atendidos por Emergencia o en regiones donde no existen Centros de Salud Convenio. La tramitación debe realizarse durante los 30 días  siguientes a la fecha de la facturación. El monto a reembolsar es el estipulado en el Baremo de F.A.M.E.S. Solo se dara un reembolso por año.</p>
				    	<p><b>Requisitos</b> (Consignar ante la Comisión de Salud)</p>
				    	<ul class="list">
				    		<li>Factura firmada y sellada por la Administración del Centro de Salud y sello de cancelado.</li>
				    		<li>Oficio explicativo del bachiller o la Comisión Salud.</li>
				    	</ul>
				    	<h4 class="subtitulo space30">Especiales</h4>
				    	<div class="divider divider-center"><i class="text-primarycolor fa fa-heartbeat"></i></div>
				    	<p class="text-justify">Son los casos que por su complejidad médica o su elevado costo, no se pueden tratar por el Baremo.</p>
				    	<p><b>Requisitos Básicos</b> (Consignar ante la Comisión Salud).</p>
				    	<ul class="list">
				    		<li>Informe médico detallado que justifique el tratamiento indicado.</li>
				    		<li>Exámenes médicos que confirmen el diagnóstico.</li>
				    		<li>Informe socioeconómico.</li>
				    		<li>Carta explicativa del solicitante.</li>
				    		<li>2 presupuestos originales de las casas comerciales que suministren el material requerido.</li>
				    		<li>Informes médicos originales y facturas con sello de cancelado en caso se que el tratamiento haya sido efectuado.</li>
				    		<li>Copia del informe del organismo competente en casos de accidente u otras lesiones.</li>
				    		<li>Constancia de trabajo.</li>
				    		<li>2 últimos recibos de pago del responsable económico.</li>
				    	</ul>
				    	<div class="alert alert-warning" role="alert"><strong>NOTA:</strong> Para cualquiera de las atenciones que requieras, debes de acudir a la Comisión Salud (Bienestar Estudiantil) de tu Institución, que es el organismo encargado de orientarte y tramitar el caso ante F.A.M.ES</div>
				    </div>
				  </div>
				</div>
			</div>
		</section>

		<!-- FAQ -->
		<div id="faq" class="faq-content" style="background: #eee">
			<div class="container">
				<div class="row">
					<div class="heading-block border-color center">
		                <h2>FAQ</h2>
		                <span>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus.</span>
		            </div>
					<div class="faq-wrap">
						<div class="col-md-12">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											<i class="fa fa-comments-o"></i> 1. What is Lorem Ipsum?
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio ligula, blandit sit amet malesuada sit amet, vestibulum quis lectus. Quisque placerat non metus sed lobortis.      
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											<i class="fa fa-comments-o"></i> 2. Why do we use it?
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio ligula, blandit sit amet malesuada sit amet, vestibulum quis lectus. Quisque placerat non metus sed lobortis.      
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											<i class="fa fa-comments-o"></i> 3. Where does it come from ?
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio ligula, blandit sit amet malesuada sit amet, vestibulum quis lectus. Quisque placerat non metus sed lobortis.      
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<!-- Faq wrap content end -->
				</div>
			</div>
			<!-- /.container -->
		</div>

		<!-- FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row">

					<!-- Contact Info -->
					<div class="col-md-5" id="contact-info">
						<h5>Información <span>de contacto</span></h5>
						<ul class="contact-info">
							<li>
								<i class="fa fa-phone"></i>
								+1800 0000 0000
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								info@domain.com
							</li>
							<li>
								<i class="fa fa-map-marker"></i>
								 Avenida Circunvalación Sur, diagonal a la Cruz Roja. Acarigua, Estado Portuguesa
							</li>
							<li>
								<div class="f-social">
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-google-plus"></a>
									<a href="#" class="fa fa-dribbble"></a>
									<a href="#" class="fa fa-instagram"></a>
								</div>
							</li>
						</ul>
					</div>

					<!-- Contact Form -->
					<div class="col-md-7">
						<h5>Escribe tu <span>mensaje!</span></h5>
						<form id="contactForm" action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<input name="senderName" id="senderName" type="text" placeholder="Nombre" required="required" />
									<input type="email" name="senderEmail" id="senderEmail" placeholder="Correo" required="required"/>
								</div>
								<div class="col-md-6">
									<textarea rows="4" name="message" id="message" placeholder="Mensaje"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>*NOTA: La dirección de correo electrónico no será compartida</p>
								</div>
								<div class="col-md-6">
									<button type="submit" class="btn-main pull-right">ENVIAR</button>
								</div>
							</div>
						</form>
						<div id="sendingMessage" class="statusMessage">
							<p><i class="fa fa-spin fa-spinner"></i> Sending your message. Please wait...</p>
						</div>
						<div id="successMessage" class="successmessage">
							<p><i class="fa fa-check"></i> Thanks for sending your message! We'll get back to you shortly.</p>
						</div>
						<div id="failureMessage" class="errormessage">
							<p><i class="fa fa-close"></i> There was a problem sending your message. Please try again.</p>
						</div>
						<div id="incompleteMessage" class="statusMessage">
							<p><i class="fa fa-warning"></i> Please complete all the fields in the form before sending.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- FOOTER / COPYRIGHT -->
		<div class="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<p>&copy; 2015. Avenida Circunvalación Sur, diagonal a la Cruz Roja. Acarigua, Estado Portuguesa</p>
					</div>

					<div class="col-md-5">
						<a class="backtotop page-scroll" href="#page-top">Ir al inicio <i class="fa fa-chevron-circle-up "></i></a>
					</div>
				</div>
			</div>
		</div>

		<!-- TERMS / POPUP -->
		<div class="overlay-dark"></div>
		<div class="terms">
			<span class="t-close fa fa-close"></span>
			<h3>Terms and Conditions</h3>
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed justo a erat blandit maximus. Mauris et odio eu nisl viverra pharetra vel quis ante. Sed finibus mauris nisl, vel semper diam rutrum id. Phasellus placerat augue ac fringilla lacinia. Cras feugiat feugiat nulla, eu dignissim ante faucibus in. Phasellus a quam nunc. Nulla ac vehicula ipsum. In molestie egestas magna vitae euismod. Donec aliquet pellentesque nulla, in blandit felis aliquet id. Nunc vel mauris eget est convallis aliquam. Aliquam arcu augue, tincidunt convallis metus non, blandit fringilla lacus.</li>
				<li>Sed varius et augue eu tristique. Duis pulvinar, lorem ac vestibulum accumsan, lorem augue elementum magna, vitae vehicula orci ante at augue. Nam placerat, nulla sit amet placerat lobortis, ante sem dapibus purus, quis efficitur ipsum ipsum eget leo. Cras elementum id neque eget euismod. Vestibulum tempus, eros vitae rutrum malesuada, metus dui viverra arcu, ac molestie nisl lacus ut tellus. Proin condimentum quam quis urna venenatis cursus. Donec sit amet felis in purus convallis imperdiet quis in mi. Sed gravida, purus nec porta dapibus, est elit egestas ante, sit amet dignissim eros mauris a tortor. Integer erat elit, porttitor et lobortis a, mollis eu turpis. Etiam porttitor augue nec erat luctus, eu varius orci malesuada. Phasellus blandit leo id pretium rutrum. Nunc ac vestibulum lacus. In viverra laoreet orci, vitae dictum turpis. Nunc metus neque, rhoncus eget rhoncus congue, cursus a turpis. Duis placerat turpis nunc, vitae elementum nibh pellentesque convallis. Maecenas pulvinar leo sed fringilla venenatis.</li>
				<li>Nulla tristique libero ut pellentesque mollis. Praesent condimentum viverra lacus, at consequat sapien ultricies quis. Suspendisse nec gravida nisl, et euismod arcu. Etiam eu condimentum risus, vel gravida lacus. In vitae est a nisl scelerisque molestie id a libero. Ut eget nisi at dolor maximus hendrerit. Nam non mattis ex, quis mattis velit.</li>
			</ul>
		</div>

		<!-- Javascript -->
		<script src="media/js/jquery.js"></script>
		<script src="media/js/bootstrap.min.js"></script>
		<script src="media/js/jquery.easing.min.js"></script>
		<script src="media/js/main.js"></script>
	</body>
</html>
<script>
<?php 
	if(($msj) && (!empty($msj)))
		print('alert("'.$msj.'");');

	unset($_SESSION['msj']);
?>
</script>