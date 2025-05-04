<?php
require_once __DIR__ + '/../dao/PaymentDao.php';
require_once __DIR__ + '/BaseService.php';

class PaymentService extends BaseService {
    public function __construct() {
        parent::__construct(new PaymentDao());
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
