<?php
require_once __DIR__ . '/../services/MenuItemService.php';


Flight::route('GET /api/menuitem', function() {
    $service = new MenuItemService();
    Flight::json($service->getAll());
});


Flight::route('GET /api/menuitem/@id', function($id) {
    $service = new MenuItemService();
    Flight::json($service->getById($id));
});


Flight::route('POST /api/menuitem', function() {
    $data = Flight::request()->data->getData();
    $service = new MenuItemService();
    Flight::json($service->create($data));
});


Flight::route('PUT /api/menuitem/@id', function($id) {
    $data = Flight::request()->data->getData();
    $service = new MenuItemService();
    Flight::json($service->update($id, $data));
});


Flight::route('DELETE /api/menuitem/@id', function($id) {
    $service = new MenuItemService();
    Flight::json(['deleted' => $service->delete($id)]);
});
