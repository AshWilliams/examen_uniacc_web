<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Examen 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.validate.css" />

</head>
<body>

  <?php
    include_once("header.php");
    session_start();
    if ( ! isset($_SESSION['noticias'])){ 
      $_SESSION['noticias'] = array();
    }
    
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
        $arr_noticias['titulo'] = $_POST["titulo"];
        $arr_noticias['noticia'] = $_POST["noticia"];
        array_push($_SESSION['noticias'],$arr_noticias);
        
        foreach ($_SESSION['noticias'] as $item) {
       
		?>
		<article class="post clearfix">					
					<h2 class="post-title">
						<a href="#"><?php echo $item["titulo"]; ?></a>
					</h2>
					<p><span class="post-fecha">26 de Junio de 2018</span> por <span class="post-autor"><a href="#">Robert Rozas</a></span></p>
					<p class="post-contenido text-justify">
            <?php echo $item["noticia"]; ?>
					</p>

					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer Mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
					</div>
		</article>
    <?php
         }
		  }
		?>
  <form data-validate="yes" method="post" action="noticia.php">
        <fieldset class="control-group">
          <label class="control-label">Titulo</label>
          <div class="controls">
            <input  class="form-control" name="titulo" id="titulo" maxlength="300" required="required" />
            <span class="help-inline"></span>            
          </div>
          <label class="control-label">Noticia</label>
          <div class="controls">
            <textarea class="form-control" rows="3" data-minlength="5" maxlength="100" required="required" name="noticia" id="noticia"></textarea>
            <span class="help-inline"></span>
          </div>
        </fieldset>
        
        <div class="form-group">                
        <fieldset class="form-actions">
          <button type="submit" id="submit" name="submit" class="btn btn-primary">Guardar Noticia</button>
        </fieldset>              
        </div>
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