<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/applyloan', 'Home::applyLoan');
$routes->post('/analyzeLoan', 'Home::analyzeLoan');

$routes->get('/creditsense', 'Home::creditSense');
$routes->get('/allbanks', 'Home::allbanks');
$routes->get('/loanprocessholding', 'Home::loanProcessHolding');




