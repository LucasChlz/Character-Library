<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL);

$router->namespace("App\Controllers");

$router->group('/');
$router->get('/','HomeController:index');

$router->get('/register','HomeController:register');
$router->post('/register','HomeController:register');

$router->dispatch();