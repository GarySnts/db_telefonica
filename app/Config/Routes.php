<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//linea
$routes->get('ver_lineas', 'LineasController::index');
$routes->get('nueva_linea', 'LineasController::nuevaLinea');
$routes->post('agregar_linea','LineasController::agregarLinea');

$routes->get('eliminar_linea/(:num)', 'LineasController::eliminarLinea/$1');
$routes->get('buscar_linea/(:num)','LineasController::buscarLinea/$1');
$routes->post('modificar_linea','LineasController::modificarLinea');



//cliente
$routes->get('ver_clientes', 'ClientesController::index');
$routes->get('nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('agregar_cliente', 'ClientesController::agregarClientes');

$routes->get('eliminar_cliente/(:num)', 'ClientesController::eliminarCliente/$1');
$routes->get('buscar_cliente/(:num)','ClientesController::buscarCliente/$1');
$routes->post('modificar_cliente','ClientesController::modificarCliente');



//plan
$routes->get('ver_planes', 'PlanesController::index');
$routes->get('nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post('agregar_plan', 'PlanesController::agregarPlan');


$routes->get('eliminar_plan/(:num)', 'PlanesController::eliminarPlan/$1');
$routes->get('buscar_plan/(:num)','PlanesController::buscarPlan/$1');
$routes->post('modificar_plan','PlanesController::modificarPlan');