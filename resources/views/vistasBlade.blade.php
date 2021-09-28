
@extends('welcome')
@section('Contenido')
      <div class="container">

      <center><h2><B>COMO CREAR VISTAS CON BLADE EN LARAVEL 8!!</B></h2></center>
      
 
    <center><img style="margin:10px;" alt="" src="images/vistBlade.png" width="350" height="150"  /></center>
    
    <h5><I>Para poder crear las vistas de nuestro proyecto en Laravel tenemos la opción de utilizar Blade, el cual es el motor de creación de plantillas simples proporcionado por Laravel. Permite realizar operaciones con datos,sustitución de plantillas.</I></h5>
  <BR>
  <h5><I>También cuenta con archivos partials, los cuales son pequeños segmentos de código que se usan para partes especificas como formularios, secciones.</I></h5>
  <BR>
  <h3><B>¿POR QUE BLADE?</B></h3>
  <br>
  <ol class="list-group list-group-numbered">
  <li class="list-group-item">Blade permite utilizar código PHP Simple en las vistas</li>
  <li class="list-group-item">Plantillas mas simples y limpias en código.</li>
  <li class="list-group-item">Incluye sistema de cache que mejora la rapidez.</li>
  <li class="list-group-item">Herencia de plantillas</li>
  <li class="list-group-item">Creación de plantillas Máster.</li>
</ol><br>
<h5><I>A pesar de que estas son algunas ventajas puede no siempre ser la mejor opción, esto depende de la necesidad de tu proyecto, pero es una buena opción para iniciar con proyectos sencillos.</I></h5>
   <br>
   <h3><B>Creación de Vistas.</B></h3>
   <br>
   <h5><I>Las vistas que se generan usando Blade usan la extensión .blade.php y se encuentran en la ruta resources/views <br>

Como ejemplo vamos a crear una Pagina Maestra, es decir una plantilla que se repite en varias paginas, en este archivo podemos tener HTML y usar CSS.</I></h5>
<br>
<h3><B>Paso 1: </B></h3>
<h5><I>Crear archivo  nuevo en resources\view con la extensión blade.php (principal.blade.php).</I></h5>
<br>
<img style="margin:10px;" alt="" src="images/blade1.png" />
<br>

<h3><B>Paso 2: </B></h3>
<h5><I>Crear controlador en la ruta http\Controllers en el ejemplo creamos HomeController.php en este archivo crearemos la función para mostrar la vista.</I></h5>
<div class=" bg-light text-dark"> class HomeController extends Controller
{
    public function inicio(){
        return view('principal');
    }
}</div>
<br>

<h3><B>Paso 3: </B></h3>
<h5><I>Crear ruta al archivo en la ubicación routes\web.php. Al crear esta ruta nos permite visualizar la vista como pagina principal.</I></h5>
<div class=" bg-light text-dark"> Route::get('/', 'HomeController@inicio');</div>
</div>
<br>

<h5>De esta forma puedes visualizar como pagina tu plantilla Blade llamada principal.blade.php.</h5>
@endsection


