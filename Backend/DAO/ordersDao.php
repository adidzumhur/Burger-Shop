<?php
require_once 'BaseDao.php';

class OrdersDao extends BaseDao {
    public function __construct() {
        parent::__construct("orders");
    }
}
?>