# Formulario usando laravel

### DESPLIEGUE
```
$ composer install
$ cp .env.example .env
// Se modifica el contenido del .env con los datos de la BBDD correspondiente
$ php artisan key:generate
$ php artisan config:cache
$ npm i
$ php artisan serve
// Si falla, ejectar el siguiente comando en otra terminal
$ npm run dev
```