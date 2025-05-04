<?php
require 'vendor/autoload.php';
require_once __DIR__ . '/Database.php';

Flight::set('flight.log_errors', true);
require_once __DIR__ . '/routes/CustomerRoutes.php';
require_once __DIR__ . '/routes/MenuItemRoutes.php';
require_once __DIR__ . '/routes/OrdersRoutes.php';
require_once __DIR__ . '/routes/OrderItemRoutes.php';
require_once __DIR__ . '/routes/PaymentRoutes.php';

Flight::route('GET /', function() {
    readfile(__DIR__ . '/home.html');
});
Flight::start();
