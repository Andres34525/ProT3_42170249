<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta principal (Inicio)
$routes->get('/', 'Paginas::index');

// Rutas para las páginas del sitio
$routes->get('/receta', 'Paginas::receta');
$routes->get('/enviar', 'Paginas::enviar');
$routes->get('/quienes', 'Paginas::quienes');
$routes->get('/acerca', 'Paginas::acerca');

$routes->get('/registro', 'Usuario_controller::crear');
$routes->post('/usuario/guardar', 'Usuario_controller::guardar');

$routes->get('/login', 'Login_controller::index');
$routes->post('/login/ingresar', 'Login_controller::login');
$routes->get('/logout', 'Login_controller::logout');

// Página privada de usuarios
$routes->get('/usuarios', 'Usuario_controller::index');

$routes->get('usuarios', 'Usuario_controller::index');
$routes->get('usuarios/crear', 'Usuario_controller::crear');
$routes->post('usuarios/guardar', 'Usuario_controller::guardar');

$routes->get('usuarios/editar/(:num)', 'Usuario_controller::editar/$1');
$routes->post('usuarios/actualizar/(:num)', 'Usuario_controller::actualizar/$1');
$routes->get('usuarios/eliminar/(:num)', 'Usuario_controller::eliminar/$1');
