<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' =>'accueil']);

$routes->get('projets', 'Home::projets', ['as' => 'projets']);

$routes->get('veille-technologique', 'Home::veille', ['as' => 'veille']);

$routes->get('E4', 'Home::e4', ['as' => 'fichier.e4']);

$routes->get('contact', 'Contact::view');
$routes->post('/send', 'Contact::send', ['as' =>'send.email']);


