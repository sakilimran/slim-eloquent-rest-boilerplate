# Slim Eloquent REST Boilerplate Application

A PHP-based user-authenticated REST API boilerplate by [S. M. Sakil Imran], using:
* [Slim 3 Framework](https://www.slimframework.com/docs/)
* [Eloquent ORM](https://laravel.com/docs/5.6/eloquent)
* [JWT Authentication](https://github.com/tuupola/slim-jwt-auth) / [PHP-JWT](https://github.com/firebase/php-jwt)
* [Monolog](https://github.com/Seldaek/monolog)
* [PHPUnit](https://phpunit.readthedocs.io/en/7.1/index.html)
* [Phinx](http://docs.phinx.org/en/latest/index.html)
* [Pimple](https://pimple.symfony.com)

## Installation
* `git clone https://github.com/sakilimran/slim-eloquent-rest-boilerplate.git` clone git repo
* `cd slim-eloquent-rest-boilerplate` change working directory to root project folder
* `composer install` install dependencies
* create `Config.php` file from this: `app/Config/Config-default.php` with your configurations
* create `phinx.yml` file from this: `phinx-default.yml` with your configurations
* `vendor/bin/phinx migrate` run initial database migration

## Run
* `cd public` change working directory to public folder and run `localhost -S localhost:8000` via command line
* or you can use Apache, set virtual host to *public* folder

## Tests
Execute unit tests via PHPUnit by running `./vendor/bin/phpunit ./tests/`.  You can debug tests via XDebug by running `./phpunit-debug ./tests/` (use Git Bash if on Windows).
This boilerplate's test suite features 100% code coverage out-of-the-box (see report in *./test/coverage/*).  To regenerate code coverage HTML report, run `./vendor/bin/phpunit --coverage-html ./tests/coverage/ --whitelist ./app/ ./tests/`

## API Documentation
### HTTP Codes
* `200` API request successful
* `400` API request returned an error
* `401` Unauthorized (access token missing/invalid/expired)
* `404` API endpoint not found
### Authentication
Endpoint | Parameters | Description
--- | --- | ---
`POST /users` | `username` *string* required<br>`password` *string* required | creates a user
`POST /users/login` | `username` *string* required<br>`password` *string* required | generates user access token
### Endpoints
All RESTful API endpoints below require a `Authorization: Bearer xxxx` header set on the HTTP request, *xxxx* is replaced with token generated from the Authentication API above.
#### Categories
Endpoint | Parameters | Description
--- | --- | ---
`GET /categories` | *n/a* | lists all categories
`GET /categories/{id}` | *n/a* | gets category data by ID
`GET /categories/{id}/todo` | *n/a* | lists all todo items for a category
`POST /categories/` | `name` *string* required<br>`category` *integer* required | creates a category
`PUT /categories/{id}` | `name` *string* optional<br>`category` *integer* optional | updates a category
`DELETE /categories/{id}` | *n/a* | delete category and associated todo items
#### Todo Items
Endpoint | Parameters | Description
--- | --- | ---
`GET /todo` | *n/a* | lists all todo items
`GET /todo/{id}` | *n/a* | gets todo item data by ID
`POST /todo` | `name` *string* required<br>`category` *integer* required | creates a todo item
`PUT /todo/{id}` | `name` *string* optional<br>`category` *integer* optional | updates a todo item
`DELETE /todo/{id}` | *n/a* | deletes a todo item
