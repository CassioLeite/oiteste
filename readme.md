<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Dependencies

- Laravel 5.5.*
- PHP >=7.0
- MySql

## Dev Dependencies

>Dev Dependencies used in this project

|   Package   |  Description  | Credits
| :---        | :---          | :---
| [Laravel-lang](https://github.com/caouecs/Laravel-lang)| In this repository, you can find the lang files for the framework PHP, Laravel 4/5/6/7.|[*caouecs*](https://github.com/caouecs)|
| [Laravel Ide Helper](https://github.com/barryvdh/laravel-ide-helper)| This package generates helper files that enable your IDE to provide accurate autocompletion.| [*barryvdh*](https://github.com/caouecs)|

## Installation 

>Follow the steps bellow to install the project

  1. You can run the commands above in your terminal to inicialize the project:
  
  ```composer 
  composer install 
  ```
  2. You might want to give permission to these folders to avoid 500 error:
  ```composer 
  sudo chmod -R 777 bootstrap
  sudo chmod -R 777 storage
  ```
  
  3. Set your **```.env```** file:
  ```composer 
  cp .env.example .env
  ```
  
  4. Generate the key and set it in **```APP_KEY```** inside the **```.env```** file:
  ```composer 
  php artisan key:generate
  ```
  
  - Example:
  
  ```composer
  APP_NAME=OiAgendamentos
  APP_ENV=local
  APP_KEY=YOUR_KEY_HERE
  APP_DEBUG=true
  APP_LOG_LEVEL=debug
  APP_URL=http://localhost
  ```
  
## Setting MySql:

>Follow the steps bellow to set your the dabase
  
  Set the database connection in your **```.env```** file:
  ```composer
  DB_CONNECTION=mysql
  #DB_HOST=127.0.0.1
  #DB_PORT=3306
  #DB_DATABASE=homestead
  #DB_USERNAME=homestead
  #DB_PASSWORD=secret
  ```
  
## Seeding your database

>Follow the steps bellow to seed your database

```composer
php artisan migrate:refresh --seed  
```

- After seeding your database you can run the command bellow and use the default email and password bellow to access the application:

```composer
php artisan serve
```
- Use the email and password:

```composer
email: admin@admin.com
password: secret
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
