<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('Sample', 'UserController::index');

$routes->get('Sample 2', 'SecondController::index');

$routes->get('Sample 3', 'ThirdController::index');


$routes->get('index', 'ThirdController::index');

$routes->get('about', 'ThirdController::aboutme');

$routes->get('educ', 'ThirdController::education');

$routes->get('hobbies', 'ThirdController::hobbies');

$routes->get('future', 'ThirdController::future');

//blog

$routes->get('index', 'BlogController::index');

$routes->get('create', 'BlogController::create');

$routes->get('edit', 'BlogController::edit');


$routes->get('blog', 'BlogController::index');

$routes->get('blog/create', 'BlogController::create');
$routes->post('blog/store', 'BlogController::store');

$routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('blog/update/(:num)', 'BlogController::update/$1');


//movies

$routes->get('movies', 'MoviesController::movies');

$routes->get('movies_create', 'MoviesController::movies_create');
$routes->post('movies_store', 'MoviesController::movies_store');

$routes->get('movies_edit/(:num)', 'MoviesController::movies_edit/$1');
$routes->post('movies_update/(:num)', 'MoviesController::movies_update/$1');

$routes->delete('movies_delete/(:num)', 'MoviesController::movies_delete/$1');
