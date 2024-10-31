<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Home
$routes->get('/add-task', 'Home::addTask');
$routes->post('/add-task/save', 'Home::save');


//Route Login dan Register
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/save', 'AuthController::save');
$routes->post('/login/auth', 'AuthController::checkLogin');

//Logout
$routes->get('/logout', 'AuthController::logout');

$routes->get('/(:any)', 'Home::index/$1');

//TODO: data per user, link per user DONE
