@extends('welcome')
@section('Contenido')

  <div class="container">

  <center><h2>COMO CREAR BASE DE DATOS EN LARAVEL</h2></center>

  <center><B><p><H5> Hola que tal Bienvenidos, continuando con el curso, hoy veremos lo que es la creación de la base de datos, la estructura de las tablas y las migraciones que Laravel  nos ofrece para facilitarnos el trabajo.</H5></p></B></center>
          <center><img style="margin:10px;" alt="" src="images/pre.png" width="650" height="200"  /></center>
          <br>
          <center><B><p><H5>Base de datos (Database)</H5></p></B></center>
    <img style="float:left; margin:10px;" alt="" src="images/person.jpg" width="330" height="100" />La base de datos es un aspecto muy importante de cualquier aplicación para almacenar grandes cantidades de información, Laravel nos proporciona  las migraciones (migration) que es una funcionalidad que nos ayuda bastante en la creación de la estructura de las tablas.
    <br>
    <br>
    <br>
    <B><p><H5>PASO 1:</H5></p></B>
    <img style="float:right; margin:10px;" src="images/pan.png" width="550" height="250"  />Lo primero es abrir el panel de control de Xampp, iniciar el servidor de Apache y MySQL. Si aun no tienes instalado Xampp clic Aquí, Al hacer clic en nuevo,  nos mostrará la opción de “crear base de datos” 
    para nuestro ejemplo el nombre de la base de datos es curso_de_laravel y hacer clic en crear. 
    <br>
    <br>
    <br>
    <br>
    <B><p><H5>PASO 2:</H5></p></B>
    <B><p><H5>Abrimos el proyecto que está en:</H5></p></B>
    <div class=" bg-light text-dark">C:/xampp/htdocs/curso-laravel</div>
    <br>
    <p>En el directorio principal encontramos el archivo .env donde realizaremos las configuraciones de nuestra base de datos, en el campo DB_DATABASE colocamos el nombre de la base de datos creada en nuestro caso curso_de_laravel.</p>
    <br>
   <p>Las demás configuraciones son por defecto, usuario root  y password vacío, en caso que su base de datos cuenta con un usuario y contraseña se debe ingresar esos datos, guardamos los cambios.</p>
    <br>

    <img style="float:left; margin:10px;" src="images/tr.png" width="550" height="250"  /> Asi como aparese en la imagen nos deve salir para crear la base de datos.
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   <br>
    <B><p><H5>Migraciones en laravel</H5></p></B>
    <B><p>Para crear las migraciones utilizaremos Artisan que es una interfaz de línea de comandos de Laravel. </p></B>
    <B><p>El nombre de la tabla debe ir en plural en nuestro caso alumnos </p></B>
    <div class=" bg-light text-dark">php artisan make:migration create_alumnos_table</div>
    <br>
    <center><img style="margin:10px;" alt="" src="images/cdm.png" width="550" height="250"  /></center>
    <br>
    <B><p>La instrucción creará un archivo en la carpeta de migrations con extensión .php como lo siguiente. </p></B>
    <br>
    <center><img style="margin:10px;" alt="" src="images/cmd2.png" width="550" height="250"  /></center>
    <br>
    <B><p>Ahora crearemos las columnas de nuestra tabla alumnos, aquí es donde la clase Blueprint nos permite manipular las consultas como objetos, en nuestro ejemplo crearemos cuatro campos nombre, apellido, edad y dirección. </p></B>
    <br>
    <center><img style="margin:10px;" alt="" src="images/cmd3.png" width="550" height="250"  /></center>
    <br>
    <B><p>Una vez llenado los campos necesarios en nuestras tablas ejecutamos las migraciones con el comando de artisan migrate (php artisan migrate). </p></B>
    <br>
    <center><img style="margin:10px;" alt="" src="images/cmd4.png" width="550" height="250"  /></center>
    <br>
    <B><p>Artisan automáticamente creará las tablas y toda su estructura de campos en nuestra base de datos.. </p></B>
    <br>
    <center><img style="margin:10px;" alt="" src="images/cmd5.png" width="550" height="250"  /></center>
    <br>
  </div>
    
  @endsection