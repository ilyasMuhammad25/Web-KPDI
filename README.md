# INLIS Lite
Integrate Library System with complete Authentication (User, Group, Permission Management) and responsive admin template using latest codeigniter framework (CI4).

Running using both **MySQL** and **PostgreSQL**

## Server Requirements
Composer is required.
- [composer](https://getcomposer.org/download/)

PHP version 7.2 or higher is required, with the following extensions installed: 
- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:
- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## Installation 
### Clone Repo & update via composer
`git clone https://gitlab.com/hamkamannan/inlislite.git` then `composer install` then `composer update`

```
$ cd inlislite
$ git clone https://gitlab.com/hamkamannan/inlislite.git .
$ composer install
$ composer update
```

## Setup 

- Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

```
$ cd inlislite 
$ cp env .env
$ vi .env
```

- Custom the Database Config for **MySQL**

```
# mysql
database.default.hostname = 127.0.0.1
database.default.database = inlislite
database.default.username = root
database.default.password = root
database.default.DBDriver = MySQLi
```

- Custom the Database Config for **PostgreSQL**

```
# postgre
database.default.DSN = pgsql:host=127.0.0.1;port=5432;dbname=postgres
database.default.database = 
database.default.username = postgres
database.default.password = postgres
database.default.DBDriver = postgre
```

- Migration

```
$ cd inlislite
$ php spark migrate
```

- Seed

```
$ cd inlislite
$ php spark db:seed InitSeeder
```

If there is error on running Seeding, execute this command, below and repeat again on step Migration

```
$ cd inlislite
$ php spark migrate:rollback
```

## Run Application

```
$ cd adminigniter
$ php spark serve
```

Voila! **Adminigniter** started on http://localhost:8080


Changes Log
----
 
### Version 1.0 (June 19, 2021)

```
 - Release of this script
 ```

Author
----

**Hamka Mannan (hamka@mannan.id)**

