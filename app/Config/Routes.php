<?php

/* use CodeIgniter\Router\RouteCollection; */

/**
  @var RouteCollection $routes
 

*/

$routes->get('/', 'Home::index');
//Rotas Incidente Grafana
$routes->get('/incidents', 'IncidentController::index', ['filter' => 'auth']);
$routes->get('/incidents/create', 'IncidentController::create', ['filter' => 'auth']);
$routes->post('/incidents/store', 'IncidentController::store', ['filter' => 'auth']);
$routes->get('/incidents/edit/(:num)', 'IncidentController::edit/$1', ['filter' => 'auth']);
$routes->post('/incidents/update/(:num)', 'IncidentController::update/$1', ['filter' => 'auth']);
$routes->get('/incidents/delete/(:num)', 'IncidentController::delete/$1', ['filter' => 'auth']);
$routes->post('/incidents/filter', 'IncidentController::filterIncidents', ['filter' => 'auth']);


//Rotas Incidente Limpeza de Caixa
$routes->get('/cto_clear', 'CtoClearController::index', ['filter' => 'auth']);
$routes->get('/cto_clear/create', 'CtoClearController::create', ['filter' => 'auth']);
$routes->post('/cto_clear/store', 'CtoClearController::store', ['filter' => 'auth']);
$routes->get('/cto_clear/edit/(:num)', 'CtoClearController::edit/$1', ['filter' => 'auth']);
$routes->post('/cto_clear/update/(:num)', 'CtoClearController::update/$1', ['filter' => 'auth']);
$routes->get('/cto_clear/delete/(:num)', 'CtoClearController::delete/$1', ['filter' => 'auth']);
$routes->post('/cto_clear/filter', 'CtoClearController::filterIncidents', ['filter' => 'auth']);

//Rotas para autenticação de login
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');

//Login master
$routes->get('/master/login', 'LoginController::loginMasterPage'); // Rota para a página de login master
$routes->post('/master/login', 'LoginController::loginMaster'); // Rota para autenticação do login master

//Rotas para criar um novo usuário.
/* $routes->get('/users', 'UserController::index');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/users/update/(:num)', 'UserController::update/$1');
$routes->get('/users/delete/(:num)', 'UserController::delete/$1'); */

// Rotas para gerenciar usuários, exigindo permissão master
$routes->get('/users', 'UserController::index', ['filter' => 'masterauth']);
$routes->get('/users/create', 'UserController::create', ['filter' => 'masterauth']);
$routes->post('/users/store', 'UserController::store', ['filter' => 'masterauth']);
$routes->get('/users/edit/(:num)', 'UserController::edit/$1', ['filter' => 'masterauth']);
$routes->post('/users/update/(:num)', 'UserController::update/$1', ['filter' => 'masterauth']);
$routes->get('/users/delete/(:num)', 'UserController::delete/$1', ['filter' => 'masterauth']);




