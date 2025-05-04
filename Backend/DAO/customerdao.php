<?php
require_once 'BaseDao.php';

class CustomerDao extends BaseDao {
    public function __construct() {
        parent::__construct("customers");
    }
}
?>