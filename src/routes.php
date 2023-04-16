<?php

use core\Router;

$router = new Router();

// sistema de login feito
$router->get('/', 'HomeController@index');
$router->get('/entrar', 'LoginController@userLogin');
$router->post('/entrar', 'LoginController@userLoginAction');
$router->get('/cadastrar', 'RegisterController@userCad');
$router->post('/cadastrar', 'RegisterController@userCadAction');

// rota de teste
$router->get('/mostrar', 'TestController@show');
$router->post('/post', 'TestController@index');
