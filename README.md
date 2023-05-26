<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> -->
# La La Lead

A simple and effective subscription funnel, made with Laravel.

<p align="left">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About La La Lead

La La Lead can be used as a starting point to develop subscription funnels (typically, landing pages that invite users to leave their contacts, for call me back services, etcetera).
Being developed with Laravel and Bootstrap, it offers a well structured, solid and secure basic environment for your project.

## Requirements

- Apache
- Mysql
- Php 8.1

Since Laravel is database agnostic, it will be quite easy to switch to another DBMS (Postgres, etcetera) in case you need.

## Installation

Pull from this repository and make a copy of .env.example, located in the root of the project. 

Name the new file .env and enter your database connection data (lines 11-16).

Then launch 
<pre>
composer install
php artisan migrate
</pre>

and you should be fine. 

To start local server, launch
<pre>php artisan serve</pre>

Heading to http://localhost:8000 you should see your basic landing page. Try to fill the form and you should be able to see a new record in the database, in the table "leads".

Enjoy and feel free to change the code as you need :)

## Screenshots

![Homepage](https://lamorbidamacchina.com/images/lalalead/screenshot_home.png?raw=true "Homepage")

![Thank you page](https://lamorbidamacchina.com/images/lalalead/screenshot_thankyou.png?raw=true "Thank you page")

## Security Vulnerabilities

If you discover a security vulnerability within La La Lead, please send an e-mail to [simone@lamorbidamacchina.com](mailto:simone@lamorbidamacchina.com). All security vulnerabilities will be promptly addressed.

## License

La La Lead is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
