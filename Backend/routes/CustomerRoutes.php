<?php
require_once __DIR__ . '/../services/CustomerService.php';


Flight::route('GET /api/customer', function() {
    $service = new CustomerService();
    Flight::json($service->getAll());
});


Flight::route('GET /api/customer/@id', function($id) {
    $service = new CustomerService();
    Flight::json($service->getById($id));
});


Flight::route('POST /api/customer', function() {
    $data = Flight::request()->data->getData();
    $service = new CustomerService();
    Flight::json($service->create($data));
});


Flight::route('PUT /api/customer/@id', function($id) {
    $data = Flight::request()->data->getData();
    $service = new CustomerService();
    Flight::json($service->update($id, $data));
});


Flight::route('DELETE /api/customer/@id', function($id) {
    $service = new CustomerService();
    Flight::json(['deleted' => $service->delete($id)]);
});
