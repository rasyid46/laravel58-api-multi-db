# laravel58-api-multi-db 
laravel 5.8 rest api using postgre and mongo <br/>

composer install <br/>

php artisan key:generate <br/>
php artisan jwt:secret  <br/>

- copy .env.example to .env <br/>
  cp .env.example .env <br/>

set env <br/>

DB_CONNECTION=mongodb <br/>
DB_HOST=127.0.0.1 <br/>
DB_PORT=27017 <br/>
DB_DATABASE= <br/>
DB_USERNAME= <br/>
DB_PASSWORD= <br/>

DB_CONNECTION_SECOND=pgsql <br/>
DB_HOST_SECOND=127.0.0.1 <br/>
DB_PORT_SECOND=5432 <br/>
DB_DATABASE_SECOND= <br/>
DB_USERNAME_SECOND= <br/>
DB_PASSWORD_SECOND= <br/>

SWAGGER_VERSION=2.0 <br/>
L5_SWAGGER_CONST_HOST=localhost:8000/ <br/>
L5_schemes=http <br/>

-migrate db and seed <br/>
    php artisan migrate <br/>
    php artisan db:seed <br/>
    
- generate api doc <br/>

    php artisan  l5-swagger:generate <br/>

exaple api <br/>
<p align="center"><img src="https://i.ibb.co/Qdn8Kds/swauth.png"></p> <br/>

email :  sulaemanr46@gmail.com
