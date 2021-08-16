# Laravel-Clase2Ej3
<p>Ejemplo 3 del Tutorial de Laravel Framework <b>Clase 2</b> </p> 
<ul>
  <li> Ejemplos Controladores</li>
  <li> Ejemplos de Formularios</li>
  <li> Verificación de ingresos a formularios</li>
</ul>
<br>
<p> <b> Como instalar y utilizar este ejemplo </b></p>
<ol>
    <li>Instalar paquetes o dependencias, desde la terminal de VS Code o del OS estando en la carpeta del proyecto tipear </li>
    <ul type="square">
        <li>composer install</li>
        <li>composer update</li>
        <li>composer fund</li>
    </ul>
    <li>Realizar una copia del archivo .env.example</li>
    <ul type="square">
        <li>cp .env.example .env</li>
    </ul>
        <li>Generar APP_KEY que es una cadena de caracteres generada aleatoriamente por Laravel que utiliza para todas las cookies cifradas, como las cookies de sesión. Para generar la APP_KEY del proyecto ejecutar el siguiente comando </li>
    <ul type="square">
        <li>php artisan key:generate</li>
    </ul>
    <li>Debera importar el archivo laravel.sql a su motor de base de datos creando una BD llamada laravel y ejecutando el servicio</li>
    <li>Debera instalar el paquete de lengajue español (https://github.com/Laraveles/spanish) en la carpeta del Laravel-Clase2-Ej3 desde la Terminal:</li> 
    <ul type="square">
        <li> composer require laraveles/spanish</li>
        <li> php artisan laraveles:install-lang</li>
    </ul>
    <li> Configurar Laravel para que use el idioma deseado, modificando  el parámetro locale de la configuración de Laravel en config/app.php:</li>
    <ul>
        <li> Ej: español</li>
            'locale'          => 'es',
        <li> Ej: inglés</li>
            'locale'          => 'en',
    </ul>
</ol>
