<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 //index
$routes->get('/', 'IndexController::index');
$routes->get('about', 'IndexController::about');
$routes->get('login', 'IndexController::login');
$routes->get('signup', 'IndexController::signup');
$routes->get('indexdonate', 'IndexController::indexdonate');


//signup & login
$routes->get('signup', 'IndexController::signup');
$routes->post('submit-signup', 'IndexController::signupProcess');

$routes->get('login', 'IndexController::login');
$routes->post('submit-login', 'IndexController::loginProcess');
$routes->get('logout', 'IndexController::logout');

$routes->post('submit-donate', 'IndexController::donateProcess');
$routes->get('receipt', 'IndexController::receipt');



//user
$routes->get('user', 'UserController::userhomepage', ['filter' => 'userAuth']);
$routes->get('profile', 'UserController::viewProfile', ['filter' => 'userAuth']);
$routes->post('submit-edit-profile', 'UserController::editProfileProcess');


$routes->get('asnaf', 'UserController::asnafpage', ['filter' => 'userAuth']);
$routes->post('addasnaf', 'UserController::addasnaf', ['filter' => 'userAuth']);
$routes->get('viewasnaf', 'UserController::viewAsnaf', ['filter' => 'userAuth']);
$routes->post('submit-edit-asnaf', 'UserController::editAsnafProcess');

$routes->get('computer', 'UserController::computerpage', ['filter' => 'userAuth']);
$routes->post('addcomputer', 'UserController::addcomputer', ['filter' => 'userAuth']);
$routes->get('viewcomputer', 'UserController::viewComputer', ['filter' => 'userAuth']);
$routes->post('submit-edit-computer', 'UserController::editComputerProcess');

$routes->get('provision', 'UserController::provisionpage', ['filter' => 'userAuth']);
$routes->post('addprovision', 'UserController::addprovision', ['filter' => 'userAuth']);
$routes->get('viewprovision', 'UserController::viewProvision', ['filter' => 'userAuth']);
$routes->post('submit-edit-provision', 'UserController::editProvisionProcess');


$routes->get('status', 'UserController::statuspage', ['filter' => 'userAuth']);


//admin
$routes->get('admin/adminhome', 'AdminController::adminhomepage', ['filter' => 'adminAuth']);
$routes->get('admin/user-list', 'AdminController::userlist', ['filter' => 'adminAuth']);
$routes->get('admin/search-user', 'AdminController::searchuser', ['filter' => 'adminAuth']);
$routes->get('admin/detail-user/(:num)', 'AdminController::viewuserdetail/$1', ['filter' => 'adminAuth']);
$routes->post('admin/detail-user/admin/update-user-data', 'AdminController::editUserProcess',['filter' => 'adminAuth']);
$routes->get('delete-user/(:num)', 'AdminController::deleteuser/$1', ['filter' => 'adminAuth']);



$routes->get('admin/asnaf-list', 'AdminController::asnaflist', ['filter' => 'adminAuth']);
$routes->get('admin/search-asnaf', 'AdminController::searchasnaf', ['filter' => 'adminAuth']);
$routes->get('admin/detail-asnaf/(:num)', 'AdminController::viewasnafdetail/$1', ['filter' => 'adminAuth']); 
$routes->post('admin/detail-asnaf/admin/update-asnaf-status', 'AdminController::editAsnafProcess',['filter' => 'adminAuth']);
$routes->get('delete-asnaf/(:num)', 'AdminController::deleteasnaf/$1', ['filter' => 'adminAuth']);



$routes->get('admin/computer-list', 'AdminController::computerlist', ['filter' => 'adminAuth']);
$routes->get('admin/search-computer', 'AdminController::searchcomputer', ['filter' => 'adminAuth']);
$routes->get('admin/detail-computer/(:num)', 'AdminController::viewcomputerdetail/$1', ['filter' => 'adminAuth']);
$routes->post('admin/detail-computer/admin/update-computer-status', 'AdminController::editComputerProcess',['filter' => 'adminAuth']);
$routes->get('delete-computer/(:num)', 'AdminController::deletecomputer/$1', ['filter' => 'adminAuth']);



$routes->get('admin/provision-list', 'AdminController::provisionlist', ['filter' => 'adminAuth']);
$routes->get('admin/search-provision', 'AdminController::searchprovision', ['filter' => 'adminAuth']);
$routes->get('admin/detail-provision/(:num)', 'AdminController::viewprovisiondetail/$1', ['filter' => 'adminAuth']);
$routes->post('admin/detail-provision/admin/update-provision-status', 'AdminController::editProvisionProcess',['filter' => 'adminAuth']);
$routes->get('delete-provision/(:num)', 'AdminController::deleteprovision/$1', ['filter' => 'adminAuth']);


$routes->get('admin/donation-list', 'AdminController::searchdonation', ['filter' => 'adminAuth']);
$routes->get('admin/detail-donation/(:num)', 'AdminController::viewdonationdetail/$1', ['filter' => 'adminAuth']);
$routes->get('delete-donation/(:num)', 'AdminController::deletedonation/$1', ['filter' => 'adminAuth']);









