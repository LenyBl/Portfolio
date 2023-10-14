<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('contact', 'Contact::view');
$routes->post('/send', 'Contact::send', ['as' =>'send.email']);


