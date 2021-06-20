#  Usuarios

```php
    $admin->email="admin@admin.com";
    $admin->password = Hash::make('_admin');
    
    //Teachers
    $teacher->email="laucha@teacher.com";
    $teacher->password = Hash::make('_teacher');

    $teacher1->email="jaco@teacher.com";
    $teacher1->password = Hash::make('_teacher');
    
    $teacher2->email="tomba@teacher.com";
    $teacher2->password = Hash::make('_teacher');

    $teacher3->email="cacique@teacher.com";
    $teacher3->password = Hash::make('_teacher');
    
    //Students
    $student->email="laucha@student.com";
    $student->password = Hash::make('_student');

    $student1->email="jaco@student.com";
    $student1->password = Hash::make('_student');

	$student2->email="tomba@student.com";
    $student2->password = Hash::make('_student');
        
    $student3->email="cacique@student.com";
    $student3->password = Hash::make('_student');

```



# Dependencias

---
* Bootstrap 5.0
* PHP 7.4.10 (XAMPP)
* Laravel 8 LTS
* Composer LTS
* NodeJS LTS

# Run project

---
## Por primera vez

---
Clona el proyecto, **renombra** el archivo **.env.example por .env**
*EN EL .ENV CAMBIAR LAS VARIABLES!*

**.ENV** (Revisar que las variables)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taller_php_1
DB_USERNAME=tu_usuario <---- INGRESA AHI TU USER DE BD
DB_PASSWORD=tu_pass <----INGRESA AHI TU PASS DE BD

```



**Corre los siguientes comandos**

```bash
composer install
composer dumpautoload -o
npm install
npm run dev
php artisan key:generate
php artisan config:clear
php artisan config:cache
php artisan migrate:fresh --seed
```

## Correr el server

---
```bash
php artisan serve
```
## Limpiar base de datos y cargar datos de prueba

---

```bash
php artisan migrate:fresh --seed
```

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
