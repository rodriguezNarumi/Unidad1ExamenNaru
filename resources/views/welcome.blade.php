<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body id="fondo" style="background-image: url(images/naranja.jpg);">

    <!--aqui va mi nabvar (barra de navegacion)-->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LARAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="instalacion">Instalacion</a>
        <a class="nav-link" href="vistas">Vistas</a>
        <a class="nav-link" href="vistasBlade">VistasBlade</a>
        <a class="nav-link" href="rutas">Rutas</a>
        <a class="nav-link" href="controladores">Controladores</a>
        <a class="nav-link" href="datos">Base De Datos</a>
      </div>
    </div>
  </div>
</nav>

   <!--aqui va la parte de mi imagen principal la pagina de inicio-->
<div>
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/laravel.jpg" width="1550" height="380" />
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/rutass.png" width="1550" height="380" />
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/instalacion.jpg" width="1550" height="380" />
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<!--Espacio para las vistas-->
@yield('Contenido')


<div class="container-expand-lg">
      <div class="jumbotron p-2 p-md-4 text-white rounded bg-dark">
        <div class="col-md-5 px-0">
          <h1 class="display-4 font-italic">NOTA IMPORTANTE</h1>
          <p class="lead my-3">Si deseas saber mas sobre el los temas subcrivete en nuesta canal de youtube y en fasebook, ahi podremos ponerte mas atencion y estar altanto, podras ingresar con tu correo electronico.</p>
          <div class="p-3">
        
   <form  style="width: 15rem;">
  <div class="mb-1" 
   >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-danger">Subscribirte</button>
</form><br>

<ul class="nav justify-content-center text-white rounded bg-white">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="https://www.facebook.com/">FASEBOOK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://www.youtube.com/">YOUTUBE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://github.com/">GITHUB</a>
  
</ul>
            

            
          </div>
 
        </div>
      </div>
</div>
      

       

        


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    
  </body>
</html>