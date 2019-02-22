# School Demo

A simple project developed on Laravel to register Students 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Laravel 5.7
Composer 1.8.4
MySQL 5.7

```

### Installing


Download or clone the project,and access it through console or powershell

```
$ cd name SchoolDemo
```

Execute the following command

```
$composer install
```

Modify the name of the .env.example file. by .env

Create database SchoolDemo on MySQL

```
CREATE DATABASE schooldemo /*!40100 COLLATE 'utf8_spanish_ci' */
```

Run migrations and the seeder

```
$php artisan migrate:refresh --seed
```

Finally we just have to generate a key for our app.

```
$ php artisan key: generate
```

Ready we can run the project.

```
$ php artisan serve
```

Use the following passswords

```
User:admin password: admin123 => can do anything has administrator role
User:user password: 123456 => only see a list of the Students registered by the administrator has user role
```


## Built With

* [Laravel](https://laravel.com) - The web framework used
* [MySQL](https://www.mysql.com) - Database


## Contributing

Please leave me a message


## Authors

* **Manuel Córdoba** - 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details




