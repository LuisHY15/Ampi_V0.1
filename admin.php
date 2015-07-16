<?php
@session_start();

#if ( !isset($_SESSION['userId']) ){
#	header("Location: index.php");
#	die;
#}

#include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* clientes */
		case "calendario":
			$paginaPHP = "php/calendario.php";
		break;
		case "usuarios":
			$paginaPHP = "php/usuarios.php";
		break;
		case "usuarioAgregar":
			$paginaPHP = "php/usuarioAgregar.php";
		break;
		case "usuarioEditar":
			$paginaPHP = "php/usuarioEditar.php";
		break;
		case "agenda":
			$paginaPHP = "php/agenda.php";
		break;
		case "agendaAgregar":
			$paginaPHP = "php/agendaAgregar.php";
		break;
		case "agendaEditar":
			$paginaPHP = "php/agendaEditar.php";
		break;
		case "propiedadesMis":
			$paginaPHP = "php/propiedadesMis.php";
		break;
		case "propiedadesOtras":
			$paginaPHP = "php/propiedadesOtras.php";
		break;
		case "propiedadesAgregar":
			$paginaPHP = "php/propiedadesAgregar.php";
		break;
		case "propiedadesEditar":
			$paginaPHP = "php/propiedadesEditar.php";
		break;
		case "rentas":
			$paginaPHP = "php/rentas.php";
		break;
		case "rentasAgregar":
			$paginaPHP = "php/rentasAgregar.php";
		break;
		case "rentasEditar":
			$paginaPHP = "php/rentasEditar.php";
		break;

	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>MEDIA GRID |</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="css/dropzone.css" rel="stylesheet">
<!--Summernote [ OPTIONAL ]-->
	<link href="css/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="js/fuelux.css" type="text/css">
<script src="js/app.v1.js"></script>
<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">Media Grid</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar_default.jpg"> </span> admin <b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>
		</header>
		<section>
			<section class="hbox stretch">
				<!-- .aside -->
				<aside class="bg-black lter aside-md hidden-print hidden-xs" id="nav">
					<section class="vbox">
						<section class="w-f scrollable">
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
								<!-- nav -->
								<nav class="nav-primary hidden-xs">
									<ul class="nav">
									    <li><a href="admin.php?m=agenda"><i class="fa fa-angle-right"></i><span>Agenda</span></a></li>
									    <li><a href="admin.php?m=usuarios"><i class="fa fa-angle-right"></i><span>Usuarios</span></a></li>
										<li class="">
											<a href="#webpage" class=""><i class="fa fa-angle-right icon"></i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Propiedades</span> </a>
											<ul class="nav lt" style="display: none;">
												<li> <a href="admin.php?m=propiedadesMis"> <i class="fa fa-angle-right"></i> <span>Mis</span> </a> </li>
												<li> <a href="admin.php?m=propiedadesOtras"> <i class="fa fa-angle-right"></i> <span>Otras</span> </a> </li>
											</ul>
										</li>
										<li><a href="admin.php?m=rentas"><i class="fa fa-angle-right"></i><span>Rentas</span></a></li>
										<li> <a href="admin.php?m=calendario"> <i class="fa fa-angle-right"></i> <span>Calendario</span> </a> </li>
									</ul>
								</nav>
								<!-- / nav -->
							</div>
						</section>
					</section>
				</aside>
				<!-- /.aside -->
				<section id="content">
					<section class="vbox">
						<!--<header class="header bg-white b-b b-light"> <p>Layout with black color</p> </header>-->
						<section class="scrollable wrapper w-f">
							<?php include $paginaPHP; ?>
						</section>
						<footer class="footer bg-white b-t b-light text-right">
							<p><a href="http://nuevolaredo.f403.mx">F403.MX Nuevo Laredo</a></p>
						</footer>
					</section>
					<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
				</section>
			</section>
		</section>
	</section>
	
	<!--
	<script src="js/summernote.min.js"></script>
	<script src="js/app.v1.js"></script>
	<script src="js/fuelux.js"></script>
	<script src="js/parsley.min.js"></script>-->
	<script src="js/dropzone.min.js"></script>
	<script src="js/app.plugin.js"></script>
</body>
</html>