<?php

    require_once('../classes/order.php');

    $order = new Order();
    $orderId = $_GET['orderId'];
    $order -> deleteOrder($orderId);  
    $_SESSION['successMessage'] = 'Successfully deleted order.';
    header('location: ../admin-view-orders.php');
?>