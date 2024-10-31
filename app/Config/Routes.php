<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Home
$routes->get('/', 'Home::index');
$routes->get('/add-task', 'Home::addTask');


//Route Login dan Register
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/save', 'AuthController::save');
$routes->post('/login/auth', 'AuthController::checkLogin');

//Logout
$routes->post('/login/auth', 'AuthController::logout');



