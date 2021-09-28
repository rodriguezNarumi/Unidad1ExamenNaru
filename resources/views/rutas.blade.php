@extends('welcome')
@section('Contenido')


  <div class="container">

  <center><h2>COMO UTILIZAR LAS RUTAS EN LARAVEL 8!!</h2></center>
  <center><p><H5>El sistema de Rutas de Laravel es bastante intuitivo y fácil de manejar, pero a la vez muy potente, con éste podemos crear todo tipo de rutas en la aplicación:
       sencillas o complejas. En esta lección aprenderás cómo crear tus primeras rutas en un proyecto de Laravel.</H5></p></center>
<br>
<center><img style="margin:10px;" alt="" src="images/ruts.png" width="850" height="450"  /></center>
<br>
<center><p><H5>Las rutas son una capa muy importante en Laravel, es por ello que el Framework destina un directorio en la carpeta raíz, llamado routes,
     para ubicar todas las rutas de la aplicación. .</H5></p></center>
<br>
<center><p><H5>tiene 2 archivos de rutas web.php y api.php. Como sus nombres lo expresan en web.php se definen las rutas para la web y en api.php las rutas para crear
     APIs para la aplicación.</H5></p></center>
<br>
<center><p><H5>Podemos definir rutas de varias maneras en esta lección lo hicimos usando una función anónima, que sigue el siguiente formato:</H5></p></center>
<div class="p-2 mb-1 bg-light text-dark">Route::get('/esta-es-la-url', function () {
    return 'Hola mundo';
});</div>
<br>
<center><p><H5>Se escribe la clase Route que llama al método relacionado con el verbo HTTP, en este caso, get que acepta dos parámetros: el primero es la URL que se llamará desde el navegador y 
    el segundo es una función anónima que devuelve lo que queremos mostrar.</H5></p></center>
<br>
<center><h2>Rutas con parámetros</h2></center>
<center><p><H5>PTambién con el sistema de rutas de Laravel puedes crear rutas más complejas que necesiten de parámetros dinámicos.  Se pueden definir de la siguiente forma:</H5></p></center>
<div class="p-2 mb-1 bg-light text-dark">Route::get('/usuarios/detalles/{id}', function ($id) {
    return "Detalles del usuario: {$id}";
});;</div>
<br>
<center><img style="margin:10px;" alt="" src="images/ruts1.png" width="600" height="250"  /></center>

<br>
  </div>
   

  @endsection