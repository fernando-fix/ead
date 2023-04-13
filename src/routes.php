<?php

use core\Router;

$router = new Router();

// sistema de login feito
$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@index');
$router->post('/login', 'LoginController@action');

// rota de teste
$router->post('/post', 'TestController@index');
