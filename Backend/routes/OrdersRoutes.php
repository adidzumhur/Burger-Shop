<?php
require_once __DIR__ . '/../services/OrdersService.php';


Flight::route('GET /api/orders', function() {
    $service = new OrdersService();
    Flight::json($service->getAll());
});


Flight::route('GET /api/orders/@id', function($id) {
    $service = new OrdersService();
    Flight::json($service->getById($id));
});


Flight::route('POST /api/orders', function() {
    $data = Flight::request()->data->getData();
    $service = new OrdersService();
    Flight::json($service->create($data));
});


Flight::route('PUT /api/orders/@id', function($id) {
    $data = Flight::request()->data->getData();
    $service = new OrdersService();
    Flight::json($service->update($id, $data));
});


Flight::route('DELETE /api/orders/@id', function($id) {
    $service = new OrdersService();
    Flight::json(['deleted' => $service->delete($id)]);
});
