# laravel58-api-multi-db
laravel 5.8 rest api using postgre and mongo

composer install

php artisan key:generate
php artisan jwt:secret 

- copy .env.example to .env
  cp .env.example .env

set env

DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

DB_CONNECTION_SECOND=pgsql
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=5432
DB_DATABASE_SECOND=
DB_USERNAME_SECOND=
DB_PASSWORD_SECOND=

SWAGGER_VERSION=2.0
L5_SWAGGER_CONST_HOST=localhost:8000/
L5_schemes=http


generate api doc

php artisan  l5-swagger:generate

exaple api
<p align="center"><img src="https://i.ibb.co/Qdn8Kds/swauth.png"></p>

email :  sulaemanr46@gmail.com
