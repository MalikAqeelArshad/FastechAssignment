<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Download Assignment Repositery
- Install composer and postman in your pc
- Insall any server in your pc e.g. wamp, ammps, xammp etc and start the server
- Go to the htdocs or www folder of your localhost server
- Open cmd window
- cmd: git clone https://github.com/MalikAqeelArshad/FastechAssignment.git
- After download the project open the task folder 'FastechAssignment'
- Configure with mysql database in .env file
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=fastechtask
- DB_USERNAME=root
- DB_PASSWORD=mysql
- 
- Open cmd window in project folder and run some commands;
- cmd: composer install
- cmd: php artisan migrate
- cmd: php artisan serve

- Open postman and can register/login/logout, profile update urls with these methods (get,post,put)
- post: http://127.0.0.1:8000/api/auth/register
- post: http://127.0.0.1:8000/api/auth/login
- post: http://127.0.0.1:8000/api/auth/logout
- get: http://127.0.0.1:8000/api/auth/profile
- put: http://127.0.0.1:8000/api/auth/profile
- get: http://127.0.0.1:8000/api/auth/users (admin can see list of user)
