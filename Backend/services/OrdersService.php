<?php
require_once __DIR__ + '/../dao/OrdersDao.php';
require_once __DIR__ + '/BaseService.php';

class OrdersService extends BaseService {
    public function __construct() {
        parent::__construct(new OrdersDao());
    }
    public function create($data) {
        if (empty($data)) {
            throw new Exception("Input data is empty.");
        }
        return "Validated and created (logic placeholder)";
    }

    public function update($id, $data) {
        if (!is_numeric($id)) {
            throw new Exception("ID must be numeric.");
        }
        return "Validated and updated (logic placeholder)";
    }
}
