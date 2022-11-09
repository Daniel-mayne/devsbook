<?php
use core\Router;

$router = new Router();

// GET Method Routes
$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@signin'); // Route to login
$router->get('/cadastro', 'LoginController@signup'); // Route to register


// POST Method Routes
$router->post('/login', 'LoginController@signinAction'); //Route after login
$router->post('/cadastro', 'LoginController@signupAction'); //Route after register