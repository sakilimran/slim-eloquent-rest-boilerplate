<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require __DIR__ . '/../vendor/autoload.php';

$app = (new App\App())->get();
$app->run();