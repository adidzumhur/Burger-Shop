<?php
require_once 'dao/CustomerDao.php';
require_once 'dao/OrdersDao.php';

$customerDao = new CustomerDao();
$orderDao = new OrdersDao();
$customerDao->insert([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => password_hash('password123', PASSWORD_DEFAULT),
    'role' => 'Customer'
]);
$orderDao->insert([
    'user_id' => 1,
    'status' => 'Pending',
    'total_price' => 25.50,
    'order_date' => date('Y-m-d H:i:s')
]);
$customers = $customerDao->getAll();
echo "CUSTOMERS:\n";
print_r($customers);
$orders = $orderDao->getAll();
echo "ORDERS:\n";
print_r($orders);
?>
