<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/home', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/Abonne', 'AbonneControl::index');
$routes->get('/Demande', 'DemandeControl::index');
$routes->get('/Emprunt', 'EmpruntControl::index');
$routes->get('/Exemplaire', 'ExemplaireControl::index');
$routes->get('/Livre', 'LivreControl::index');
