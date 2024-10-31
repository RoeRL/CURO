<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Home
$routes->get('/add-task', 'Home::addTask');
$routes->post('/add-task/save', 'Home::save');
$routes->get('/sprint-view','Home::sprint');

//Route Login dan Register
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/save', 'AuthController::save');
$routes->post('/login/auth', 'AuthController::checkLogin');

//Logout
$routes->get('/logout', 'AuthController::logout');

$routes->get('/', 'Home::index');

//User
$routes->get('/profile/(:any)', 'UserController::index/$1');
