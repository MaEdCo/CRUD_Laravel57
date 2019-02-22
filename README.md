School Demo


Installation
<br>
Download or clone the projet

$ cd name SchoolDemo
   
execute the following command.

   $ composer install
   
Modify the name of the .env.example file. by .env and add our credentials.

$php artisan migrate

Finally we just have to generate a key for our app.

    $ php artisan key: generate
    
Ready we can run the project.

   $ php artisan serve

