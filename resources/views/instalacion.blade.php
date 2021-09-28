@extends('welcome')
@section('Contenido')
      <div class="container">
       <center> <h2><B>COMO INSTALAR LARAVEL 8 en windows!!</B></h2></center>
       <br>
          
          <center><B><p><H5> Primero tenemos que tener un programa que haga de servidor apache y tenga php, nosotros usaremos Xampp, aunque también les recomendamos Laragon.</H5></p></B></center>
          <center><img style="margin:10px;" alt="" src="images/xamp.jpg" width="350" height="100"  /></center>

          <B><p><H5> Una vez hemos instalado Xampp, en un terminal ponemos este comando:.</H5></p></B>
          <div class="p-2 mb-1 bg-light text-dark">php -v</div>
          <br>

          <B><p><H5> Si PHP se ha instalado correctamente, nos debería salir algo así:</H5></p></B>
          <div class="p-2 mb-1 bg-light text-dark">PHP 7.0.11 (cli) ( NTS )
             Copyright (c) 1997-2016 The PHP Group
            Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
             with Zend OPcache v7.0.11, Copyright (c) 1999-2016, by Zend Technologies</div>
          <br>
          <B><p><H5> Si PHP se ha instalado correctamente, nos debería salir algo así:</H5></p></B>
          <div class="p-2 mb-1 bg-light text-dark">PHP 7.0.11 (cli) ( NTS )
             Copyright (c) 1997-2016 The PHP Group
            Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
             with Zend OPcache v7.0.11, Copyright (c) 1999-2016, by Zend Technologies</div>
          <br>
          <B><p><H4> Instalando Composer:</H4></p></B>
          <B><p><H5>Es un gestor de dependencias de PHP y básicamente se encarga de instalar las librerias que nuestros proyectos necesitan y de mantenerlas actualizadas para que funcionen correctamente.</H5></p></B>
          <B><p><H5>Para instalar Composer en Windows visitamos la siguiente página:
          <div class="p-2 mb-1 bg-light text-dark">https://getcomposer.org/Composer-Setup.exe</div>
          Una vez hemos descargado el instalador, lo ejecutamos y le damos “Siguiente” a todos los pasos.</H5></p></B>
          <br>
          <B><p><H5> Una vez terminada su instalación, abrimos una consola de Windows y ejecutamos el comando “composer”. Si todo ha salido bien, nos mostrará una lista de comandos para ejecutar.</H5></p></B>
          <center><img style="margin:10px;" alt="" src="images/composer.jpg" width="350" height="250"  /></center>
         <br>
         <B><p><H4> Crear un Proyecto:</H4></p></B>
         <B><p><H5>Para crear un nuevo proyecto en Laravel disponemos de estas dos formas: Utilizando composer ponemos el comando:</H5></p></B>
         <div class="p-2 mb-1 bg-light text-dark">composer create-project --prefer-dist laravel/laravel nombre-proyecto "5.4.*"</div>
         <br>
         <B><p><H5>Utilizando el instalador de Laravel ejecutamos estos dos comandos:</H5></p></B>
         <div class="p-2 mb-1 bg-light text-dark">composer global require "laravel/installer" laravel new nombre-proyecto</div>
         <br>
         <B><p><H5>Estos comandos generarán una carpeta llamada “nombre-proyecto” que tendrá la instalación básica del framework. Si lo hacemos con composer tenemos que copiar el archivo .env.example a .env y generar una clave nueva para el proyecto con estos comandos:</H5></p></B>
         <div class="p-2 mb-1 bg-light text-dark">copy .env.example .env php artisan key:generate</div> 
         <br>
         <B><p><H5>Una vez tenemos estos pasos hechos correctamente, en un terminal de Windows vamos a la carpeta del proyecto (justo dentro) y para ejecutar Laravel y que podamos ver el proyecto usamos el comando:</H5></p></B>
         <div class="p-2 mb-1 bg-light text-dark">php artisan serve</div>
         <br>
         <B><p><H5>Cuando esté activo, entramos al navegador, ponemos la ip que nos ha dicho en la terminal al iniciarse (normalmente es 127.0.0.1:8000) y veremos esto:</H5></p></B>
         <center><img style="margin:10px;" alt="" src="images/laravel1.jpg" width="350" height="250"  /></center>
         <br>
        </div>
        </div>
 
        @endsection