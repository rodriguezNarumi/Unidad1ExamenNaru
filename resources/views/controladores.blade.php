@extends('welcome')
@section('Contenido')






  <div class="container">

 <center> <h2>COMO CREAR CONTROLADORES EN LARAVEL 8!!</h2></center>

 <p><H5>Laravel nos brinda una capa de controladores que nos permite organizar la lógica de nuestras rutas dentro de métodos llamados «acciones» y de clases conocidas como «controladores». En esta lección aprenderás cómo generar tu primer controlador desde la consola utilizando Artisan y cómo asociar rutas a acciones específicas dentro de dicho controlador.</H5></p>
<br>
<h2>Crear un controlador con Laravel</h2>
<p><H5>Podemos generar un nuevo controlador con el comando:</H5></p>
<div class="p-2 mb-1 bg-light text-dark"># php artisan make:controller NoteController</div>
<br>
<p><H5>Deberíamos ver el mensaje «Controller created successfully» en la consola y de vuelta al editor deberíamos ver una nueva clase en app/Http/Controllers/NoteController:</H5></p>
<div class="p-2 mb-1 bg-light text-dark">?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NoteController extends Controller
{
    //
}</div>
<br>
<h2>¿Qué es un controlador?</h2>
<p><H5>Un controlador no es más que una clase de PHP. Esta clase extiende de la clase App\Http\Controllers\Controller que está dentro de tu aplicación (en el mismo directorio donde NoteController fue generado).</H5></p>
<br>
<p><H5>Si abrimos app/Http/Controllers/Controller.php podremos ver cómo dicha clase extiende de Illuminate\Routing\Controller.</H5></p>
<br>
<p><H5>Debido a que estas dos clases se llaman Controller, la clase de Laravel es importada con el alias BaseController.</H5></p>
<div class="p-2 mb-1 bg-light text-dark">?php
namespace App\Http\Controllers;
//...
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    //...
}</div>
<br>
<p><H5>Extender de los controladores base nos da funcionalidad adicional como veremos más adelante; pero esto es opcional, aún sin extender de Controller tendremos un controlador válido:</H5></p>
<div class="p-2 mb-1 bg-light text-dark">?php
namespace App\Http\Controllers;
class NoteController
{
    //
}</div>
<br>
<p><H5>Es importante señalar que los controladores a los que hagamos referencia desde routes/web.php deben tener el nombre de espacio App\Http\Controllers y por lo tanto estar ubicados en el directorio app/Http/Controllers/. Aunque esto se puede personalizar desde app/Providers/RouteServiceProvider.php.</H5></p>

<br>
<h2>Crear acciones en el controlador</h2>
<p><H5>Una acción de un controlador no es más que un simple método de PHP. Este método debe ser público, por ejemplo:</H5></p>
<div class="p-2 mb-1 bg-light text-dark">?php
namespace App\Http\Controllers;
class NoteController
{
    public function create()
    {
        return view('add-note');
    }
}</div>
<br>

<h2>Enlazar rutas a la acción de un controlador</h2>
<p><H5>Crear una o más acciones no es suficiente para que Laravel comience a usarlas, necesitamos enlazarlas desde el archivo de rutas correspondiente. Enlacemos la ruta notas/crear a la acción create dentro de NoteController:</H5></p>
<div class="p-2 mb-1 bg-light text-dark">?php
// routes/web.php
Route::get('notas/crear', 'NoteController@create')
    ->name('notes.create');</div>
<br>

<p><H5>Luego de mover y enlazar todas las acciones, nuestro archivo de rutas lucirá así:</H5></p>
<div class="p-2 mb-1 bg-light text-dark">?php
?php
// routes/web.php
Route::get('/', 'NoteController@index')->name('notes');
Route::get('notas/{id}', 'NoteController@show')->name('notes.show');
Route::get('notas/crear', 'NoteController@create')->name('notes.create');
// store...
Route::get('notas/{id}/editar', 'NoteController@edit')->name('notes.edit');</div>
<br>




</div>
   


    



@endsection