# Laravel-Clase2Ej3
## Ejemplo 3 del Tutorial de Laravel Framework Clase 2

  * Ejemplos Controladores
  * Ejemplos de Formularios
  * Verificación de ingresos a formularios

## Como instalar y utilizar este ejemplo

1. Instalar paquetes o dependencias, desde la terminal de VS Code o del OS estando en la carpeta del proyecto tipear
```bash
composer install --ignore-platform-reqs
``` 
```bash
composer update
```
```bash
composer fund
 ```
2. Realizar una copia del archivo .env.example
```bash
cp .env.example .env
```
3. Generar APP_KEY que es una cadena de caracteres generada aleatoriamente por Laravel que utiliza para todas las cookies cifradas, como las cookies de sesión. Para generar la APP_KEY del proyecto ejecutar el siguiente comando
```bash
php artisan key:generate
```
4. Deberá crear en su motor de base de datos una BD llamada laravel_clase2ej3 y ejecutar el servicio ya que el ejemplo hace uso de la misma.
```bash
create database laravel_clase2ej3;
```
5. Para lanzar las migraciones de este ejemplo e impacten en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto
```bash
php artisan migrate
```
6. Deberá instalar el paquete de lengajue español (https://github.com/Laraveles/spanish) en la carpeta del Laravel-Clase2Ej3 desde la Terminal:
```bash
composer require laraveles/spanish
```
```bash
php artisan laraveles:install-lang
```
7. Configurar Laravel para que use el idioma deseado, modificando el parámetro locale de la configuración de Laravel en config/app.php:
- Ej: español
    - 'locale'    => 'es',
- Ej: inglés
    - 'locale'    => 'en',

## Apunte Tutorial de Laravel Framework Clase 2
[Laravel-Clase2](https://www.profmatiasgarcia.com.ar/uploads/tutoriales/Laravel-Clase2.pdf)

## Licencia
[GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html)
