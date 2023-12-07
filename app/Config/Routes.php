<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/applyloan', 'Home::applyLoan');
$routes->get('/getMoreInfoLoan', 'Home::getMoreInfoLoan');
$routes->get('/getStatesInfo', 'Home::getStatesInfo');

$routes->post('/analyzeLoan', 'Home::analyzeLoan');


$routes->get('/login', 'User::login');
$routes->post('/make_login', 'User::make_login');
$routes->get('/logout', 'User::logout');
$routes->get('/addAdminAccount', 'User::addAdminAccount');



$routes->get('/profile', 'User::profile');
$routes->get('/dashboard', 'AdminDashboard::index');
$routes->get('/get_all_loans_opportunity', 'AdminDashboard::get_all_loans_opportunity');
$routes->get('/opportunity', 'AdminDashboard::opportunityDetail');
$routes->get('/editopportunity', 'AdminDashboard::editopportunity');
$routes->get('/getLoanAnalysis', 'AdminDashboard::getLoanAnalysis');

$routes->get('/creditsense', 'Home::creditSense');
$routes->get('/allbanks', 'Home::allbanks');
$routes->get('/loanprocessholding', 'Home::loanProcessHolding');




