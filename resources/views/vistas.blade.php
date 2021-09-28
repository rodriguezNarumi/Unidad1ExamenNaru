@extends('welcome')
@section('Contenido')

      <div class="container">
      <center><h2><B>COMO CREAR VISTAS EN LARAVEL 8!!</B></h2></center>

         
      <center><B><p><H5>Crear una vista.</H5></p></B></center>
    <img style="float:left; margin:10px;" alt="" src="images/vistass2.png" width="330" height="100" />Las vistas generalmente se encuentran en el directorio /resources/views de la carpeta principal de nuestro proyecto. 
    Crear una vista con Laravel es muy sencillo, 
    simplemente necesitamos crear un archivo .php (o .blade.php como veremos en la lección siguiente) en el directorio  /views. 
    Dentro de este archivo escribimos el HTML de la vista.
    <br>
    <br>


    <center><B><p><H5>Retornar una vista:</H5></p></B></center>
    <img style="float:right; margin:10px;" src="images/vistass.png" />Para retornar una vista retornamos el llamado a la función helper view pasando como argumento el nombre de la vista. El nombre del archivo es relativo a la 
    carpeta resources/views y no es necesario indicar la extensión del archivo: <div class=" bg-light text-dark">public function index()
{
    return view('users');
}</div>
    <br>
    <br>
    <br>

    <center><B><p><H5>Pasar datos a la vista</H5></p></B></center>
    <div class=" bg-light text-dark">$users = [
    'Joel',
    'Ellie',
    'Tess',
    //...
];
return view('users', [
    'users' => $users
]); </div>
    <img style="float:right; margin:10px;" src="images/dat.jpg" />Podemos pasar datos a la vista mediante un arreglo asociativo, donde las llaves son el nombre de las variables que queremos pasar a la vista y el valor son los datos que queremos asociar:

<br>
<br>
<br>
<br>
<br>
<center><p>También podemos usar el método with encadenándolo al llamado a la función view para pasar datos a la vista en formato de array asociativo:</p></center>
<div class="p-2 mb-1 bg-light text-dark">return view('users')->with([
    'users' => $users
]);</div>
<br>
<center><p>Con with también podemos pasar las variables de forma individual:</p></center>
<div class="p-2 mb-1 bg-light text-dark">return view('users')
    ->with('users', $users)
    ->with('title', 'Listado de usuarios');</div>
<br>
<center><p>Si los datos que queremos pasar a la vista se encuentran dentro de variables locales podemos utilizar la función compact,  la cual acepta como argumentos los nombres de las variables y las convierte en un array asociativo:</p></B></center>
<div class="p-2 mb-1 bg-light text-dark">$users = [
    ...
];
$title = 'Listado de usuarios';
return view('users', compact('users', 'title'));</div>
<br>
<br>
<br>
<br>

      
@endsection