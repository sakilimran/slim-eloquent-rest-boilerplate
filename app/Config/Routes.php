<?php
namespace App\Config;

class Routes {
    function __construct($app) {
        /* Basic routing for users */
        $app->post('/users', '\App\Controllers\UserController:create');
        $app->post('/users/login', '\App\Controllers\UserController:login');

        /* Basic routing for categories */
        $app->get('/categories', '\App\Controllers\CategoryController:all');
        $app->get('/categories/{id}', '\App\Controllers\CategoryController:find');
        $app->post('/categories', '\App\Controllers\CategoryController:create');
        $app->put('/categories/{id}', '\App\Controllers\CategoryController:update');
        $app->delete('/categories/{id}', '\App\Controllers\CategoryController:delete');
        $app->get('/categories/{id}/todos', '\App\Controllers\CategoryController:todos');

        /*
         * Route grouping example for categories:
         *
        $app->group('/categories', function () {
            $this->get('', '\App\Controllers\CategoryController:all');
            $this->post('', '\App\Controllers\CategoryController:create');
            $this->get('/{id}', '\App\Controllers\CategoryController:find');
            $this->put('/{id}', '\App\Controllers\CategoryController:update');
            $this->delete('/{id}', '\App\Controllers\CategoryController:delete');
            $this->get('/{id}/todos', '\App\Controllers\CategoryController:todos');
        });
        */

        /* Basic routing for todo */
        $app->get('/todo', '\App\Controllers\TodoController:all');
        $app->get('/todo/{id}', '\App\Controllers\TodoController:find');
        $app->post('/todo', '\App\Controllers\TodoController:create');
        $app->put('/todo/{id}', '\App\Controllers\TodoController:update');
        $app->delete('/todo/{id}', '\App\Controllers\TodoController:delete');
    }
}