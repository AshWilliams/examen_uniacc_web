<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Examen 1</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.validate.css" />
</head>
<body>

	<?php
	  include_once("header.php");  
	  
	?>

	<section class="jumbotron">
		<div class="container">
			<h1>Hackerman Blog</h1>
			<p>Blog de diseño web</p>
		</div>
	</section>

	<section class="main container">
		<?php
			if(isset($_POST["submit"])){
				//envio el correo
				$para      = 'robert.rozas@uniacc.edu';
				$titulo    = $_POST["Nombre"];
				$mensaje   = $_POST["Mensaje"];
				$cabeceras = 'From: '. $_POST["Correo"] . "\r\n";
		
				mail($para, $titulo, $mensaje, $cabeceras);
				echo "Correo Enviado de forma correcta";
			}
		?>
		<form role="form" data-validate="yes" id="Formulario" action="#" method="POST">
                <div class="form-group">
                    <label class="control-label" for="Nombre">Nombres</label>
                    <input type="text" class="form-control" id="Nombre" required="required" name="Nombre" placeholder="Introduzca su nombre" required autofocus />
					<span class="help-inline"></span>  
				</div>            
                <div class="form-group">
                    <label class="control-label" for="Motivo">Motivo de Contacto</label>
                    <select name="Motivo" class="form-control" required="required">
                        <option value="Consulta General">Consulta General</option>
                        <option value="Realizar Pedido">Realizar Pedido</option>
                        <option value="Informe un problema">Informe un problema</option>
					</select>
					<span class="help-inline"></span>  
                </div>
                <div class="form-group">
                    <label class="control-label" for="Correo">Dirección de Correo Electrónico</label>
                    <input type="email" class="form-control" id="Correo" required="required" name="Correo" placeholder="Introduzca su correo electrónico" required />
					<span class="help-inline"></span>  
				</div>
                <div class="form-group">
                    <label class="control-label" for="Mensaje">Mensaje</label>
                    <textarea rows="5" cols="30" class="form-control" required="required" id="Mensaje" name="Mensaje" placeholder="Introduzca su mensaje" required ></textarea>
					<span class="help-inline"></span>  
				</div>
                <div class="form-group">                
                    <input type="submit" id="submit" name="submit"  class="btn btn-primary" value="Enviar">
                    <input type="reset" class="btn btn-default" value="Limpiar">                
                </div>
                <div id="respuesta" style="display: none;"></div>
        </form>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Robert Rozas Navarro - Hackerman</p>
					<a href="https://stackoverflow.com/users/1987838/hackerman">
					   <img src="https://stackoverflow.com/users/flair/1987838.png" width="208" height="58" alt="profile for Hackerman at Stack Overflow, Q&amp;A for professional and enthusiast programmers" title="profile for Hackerman at Stack Overflow, Q&amp;A for professional and enthusiast programmers">
					</a>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline text-right">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Cursos</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.validate.js"></script>
</body>
</html>