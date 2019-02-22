School Demo


Installation
<br>
Download or clone the projet

$ cd name SchoolDemo
   
execute the following command.

   $ composer install
   
Modify the name of the .env.example file. by .env

Create database SchoolDemo on MySQL

CREATE DATABASE `schooldemo` /*!40100 COLLATE 'utf8_spanish_ci' */

Run migrations

$php artisan migrate

Run the seeder

php artisan migrate:refresh --seed

Finally we just have to generate a key for our app.

    $ php artisan key: generate
    
Ready we can run the project.

   $ php artisan serve

