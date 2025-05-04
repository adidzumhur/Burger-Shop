<?php
require_once __DIR__ . '/../services/OrderItemService.php';


Flight::route('GET /api/orderitem', function() {
    $service = new OrderItemService();
    Flight::json($service->getAll());
});


Flight::route('GET /api/orderitem/@id', function($id) {
    $service = new OrderItemService();
    Flight::json($service->getById($id));
});


Flight::route('POST /api/orderitem', function() {
    $data = Flight::request()->data->getData();
    $service = new OrderItemService();
    Flight::json($service->create($data));
});


Flight::route('PUT /api/orderitem/@id', function($id) {
    $data = Flight::request()->data->getData();
    $service = new OrderItemService();
    Flight::json($service->update($id, $data));
});


Flight::route('DELETE /api/orderitem/@id', function($id) {
    $service = new OrderItemService();
    Flight::json(['deleted' => $service->delete($id)]);
});
