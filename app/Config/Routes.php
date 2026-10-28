<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('aboutus', 'Home::about');
$routes->get('updates', 'Home::updates');
$routes->get('socials', 'Home::socials');    