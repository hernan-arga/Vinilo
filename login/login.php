<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Vinilo! - Login</title>

	<!--CSS Bootstrap-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!--Mi CSS-->
	<link rel="stylesheet" type="text/css" href="../css/mis-css/default-theme.css">

	<!--Font Awesome-->
	<link rel="stylesheet" type="text/css" href="../font-awesome/web-fonts-with-css/css/fontawesome-all.css">

	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Sarala|Stardos+Stencil:700|Comfortaa:400,700" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-inverse" style="border-radius:0px;" id="barra-principal">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        	</button>	
	        	<a class="navbar-brand" href="#" title="Vinyl!"><img src="../images/vinyl-bowie-resized.gif" id="icono-principal"></a>
	        </div>
	        <div class="collapse navbar-collapse" id="myNavbar">
	        	<ul class="nav navbar-nav">
	        		<li class="active"><a title="Pagina Principal" href="../index.html"><span class="glyphicon glyphicon-home"></span></a></li>
	        		<li class="dropdown">
	        			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Link 1<span class="caret"></span></a>
	        			<ul class="dropdown-menu">
	        				<li><a href="#">Link 1.1</a></li>	
							<li><a href="#">Link 1.2</a></li>
	        				<li><a href="#">Link 1.3</a></li>
	        			</ul>
	        		</li>
					<li class="disabled"><a href="#">Link 2</a></li>
	        		<li><a title="Contacto" href="#"><span class="glyphicon glyphicon-phone-alt"></span></a></li>
	        	</ul>
	        	<ul class="nav navbar-nav navbar-right">
	        		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
	        		<li><a href="../login/login.php"><span class="fas fa-sign-in-alt"></span> Iniciar Sesion</a></li>
	        	</ul>
	        </div>
	    </div>
	</nav>


	<div class="jumbotron" style="margin-bottom:-40px;">
		<div class="container-fluid">
			<h1>Iniciar Sesion</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<br>
	</div>

	<!-- Formulario de Iniciar Sesion -->
	<br>
	<form method="post" name="datos_usuario" id="datos_usuario">
		<div class="row" style="margin: 0px;">
			<div class="container col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2" style="padding-top: 60px;">
				<div class="panel panel-primary">
					<div class="panel-heading"><span class="fas fa-sign-in-alt"></span> Iniciar Sesion</div>
					<div class="panel-body" style="padding-top: 30px">
						<div class="input-group" style="margin-bottom: 25px">
							<span class="input-group-addon"><i class="fa fa-user-circle"></i></span><input type="form-group" name="nombre_usuario" class="form-control" placeholder="Usuario o correo electronico">
							</div>
						<div class="input-group" style="margin-bottom: 25px">
							<span class="input-group-addon"><i class="fa fa-key"></i></span><input type="form-group" name="edad_usuario"class="form-control" placeholder="Contraseña">
						</div>
						<div class="input-group">
							<div class="checkbox">
								<!-- Meter "Recordar usuario" aca -->
							</div>
						</div>
						<div style="margin-bottom: 10px">
							<button name="enviando" type="submit" class="btn-success btn-sm">iniciar sesion</button>
							<button type="button" class="btn-primary btn-sm">iniciar sesion con Facebook</button>
						</div>
						<div style="border-top: 1px solid black; color: black; padding-top: 15px">Si no tenes una cuenta te podes registrar <a href="#">aca</a></div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<?php
		if(isset($_POST["enviando"])){

			$usuario = $_POST["nombre_usuario"];
			$edad = $_POST["edad_usuario"];

			if($usuario == "Juan" && $edad >= 18){
				echo "<p class=\"validado\">Puedes entrar</p>";
			}

			else{
				echo "<p class=\"no_validado\">No puedes entrar</p>";
			}
		}


	?>

	<!-- Footer -->
	<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>footer</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col-md-5">
						<h2>Alguna cosa mas</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
						<a href="#"><button class="btn btn-primary">lorem</button></a>
					</div>
					<div class="col-md-3">
						<ul id="footer-links">
							<h2>Links</h2>
							<li><a href="#"><span class="label label-default">link 1</span></a></li>
							<li><a href="#"><span class="label label-default">link 2</span></a></li>
							<li><a href="#"><span class="label label-info">link 3</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">	
						<span class="glyphicon glyphicon-copyright-mark"></span></i> 2018 Ahí Tene'
					</div>
				</div>
			</div>
		</div>

<!--Las otras cosas de Bootstrap (Jquery primero, despues Popper.js y luego Bootstrap.js)-->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>