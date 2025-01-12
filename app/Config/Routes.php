<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'loginController::index');
$routes->get('anasayfa', 'HomePageController::index');

$routes->post('/login/submit', 'loginController::submit');
$routes->get('logout', 'LoginController::logout');
$routes->get('/login', 'LoginController::index');
$routes->post('incele', 'SiparisInceleController::index');

$routes->get('qr', 'QRCodeController::generateQRCode');
$routes->get('text', 'TextController::index');