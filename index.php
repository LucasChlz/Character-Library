<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL);

$router->namespace("App\Controllers");

$router->group('/');
$router->get('/','HomeController:index');

$router->get('/register','HomeController:register');
$router->post('/register','HomeController:register');

$router->get('/login','HomeController:login');
$router->post('/login','HomeController:login');

$router->group('/home');
$router->get('/','LibraryController:index');
$router->get('/loggout','LibraryController:loggout');

$router->group('/character');
$router->get('/','CharacterController:index');
$router->get('/create','CharacterController:create');

$router->dispatch();