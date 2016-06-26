# TMail
## Introduction
This is a simple web server for fetching email and showing them
based on PHP and some JavaScript.

## How...
### PostgresDB [pgsql]
Before anything you need `php-pgsql` package installed.
For creating specific use in postgres sql for TMail:
```sql
CREATE USER TMail WITH PASSWORD '1234';
CREATE DATABASE TMail;
GRANT ALL PRIVILEGES ON DATABASE TMail TO TMail;
```
and run above query with following command
```sh
sudo -s postgres psql -f file.sql
```
### MongoDB
Read the mongoDB manual for laravel from [here](https://github.com/jenssegers/laravel-mongodb)
after installation, use following commands
for creating mongo db and user for our TMail
application.
```javascript
use tmail
db.createUser({user: "tmail", pwd: "1234", roles: [{role: "userAdmin", db: "tmail"}]})
```

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
