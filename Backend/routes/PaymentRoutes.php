<?php
require_once __DIR__ . '/../services/PaymentService.php';


Flight::route('GET /api/payment', function() {
    $service = new PaymentService();
    Flight::json($service->getAll());
});


Flight::route('GET /api/payment/@id', function($id) {
    $service = new PaymentService();
    Flight::json($service->getById($id));
});


Flight::route('POST /api/payment', function() {
    $data = Flight::request()->data->getData();
    $service = new PaymentService();
    Flight::json($service->create($data));
});


Flight::route('PUT /api/payment/@id', function($id) {
    $data = Flight::request()->data->getData();
    $service = new PaymentService();
    Flight::json($service->update($id, $data));
});


Flight::route('DELETE /api/payment/@id', function($id) {
    $service = new PaymentService();
    Flight::json(['deleted' => $service->delete($id)]);
});
