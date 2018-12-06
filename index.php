<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="view0port" content="width=device-width, initial-scale=1.0">
    <title>Mi tienda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
<body>
<!-- *************************************
BARRA DE NAVEGACION
************************************* -->
<header>  
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Mi sitio</a>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active"><a class="nav-link" href="#">Inicio</a></li>  
      <li class="nav-item active"><a class="nav-link" href="#">Cursos</a></li>
      <li class="nav-item active"><a class="nav-link" href="#">Libros</a></li>
      <li class="nav-item active"><a class="nav-link" href="#">Sobre mí</a></li>
      <li class="nav-item active"><a class="nav-link" href="#">Contacto</a></li>  
    </ul>
    <ul class="navbar-nav  navbar-right">
    <li><a href="login.html"><i class="fas fa-sign-in-alt"> Login</i></a></li>  
    </ul>
  </div>
</nav>

<!-- *************************************
BANNER
************************************* -->
<section>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>Los mejores productos de la red</h1>
      <p>Mejor a mas no poder</p>
    </div>
  </div>
</section>
  
  <!-- *************************************
CONTENIDO
************************************* -->
<section>
  <div class="container-fluid bg-3 text-center">
    <div class="row">
      <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
  </div>
</div>
<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p><a href="producto.html">Boostrap</a></p>
      <a href="producto.html">
        <img src="img/bootstrap.png" class="img-thumbnail img-fluid" style="width:100%" alt="bootstrap ">
      </a>
    </div>
    <div class="col-sm-3">
        <p><a href="producto.html">IndexedDB</a></p>
        <a href="producto.html">
          <img src="img/IndexedDB.png" class="img-thumbnail img-fluid" style="width:100%; height:137px;" alt="IndexedDB ">
        </a>
    </div>  
    <div class="col-sm-3">
        <p><a href="producto.html">Javascript</a></p>
        <a href="producto.html">
          <img src="img/javascript.png" class="img-thumbnail img-fluid" style="width:100%; height:137px;" alt="Javascript ">
        </a>
    </div>  
      
    <div class="col-sm-3">
        <p><a href="producto.html">PHP</a></p>
        <a href="producto.html">
          <img src="img/php.png" class="img-thumbnail img-fluid" style="width:100%; height:137px;" alt="PHP ">
        </a>
    </div>
    <div class="col-sm-3">
        <p><a href="producto.html">Boostrap</a></p>
        <a href="producto.html">
          <img src="img/bootstrap.png" class="img-thumbnail img-fluid" style="width:100%" alt="bootstrap ">
        </a>
      </div>
      <div class="col-sm-3">
          <p><a href="producto.html">IndexedDB</a></p>
          <a href="producto.html">
            <img src="img/IndexedDB.png" class="img-thumbnail img-fluid" style="width:100%; height:137px;" alt="IndexedDB ">
          </a>
      </div>  
      <div class="col-sm-3">
          <p><a href="producto.html">Javascript</a></p>
          <a href="producto.html">
            <img src="img/javascript.png" class="img-thumbnail img-fluid" style="width:100%; height:137px;" alt="Javascript ">
          </a>
      </div>  
        
      <div class="col-sm-3">
          <p><a href="producto.html">PHP</a></p>
          <a href="producto.html">
            <img src="img/php.png" class="img-thumbnail img-fluid" style="width:100%; height:137px;" alt="PHP ">
          </a>
      </div>
  </div>
</div>
</section>
<br>
<footer class="container-fluid text-center">
  <p>&copy; Todos los derechos reservados JHON CALDERON</p>
  <form>
      <div class="form-group">
        <input type="text" class="form-control" id="buscar" placeholder="Busca tus productos favoritos aquí">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
  </form> 
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body> 
</html>