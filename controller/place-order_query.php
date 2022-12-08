<?php

require_once('../classes/order.php');
require_once('../classes/user.php');
require_once('../classes/furniture.php');

$order = new Order();
$user = new User();
if($user -> isLoggedIn){
    $order -> setCustomerId($_SESSION['user_session']);
    $order -> setProductId($_GET['productId']);
    $order -> setTotal($_GET['total']);
    $order -> addOrder();
} else {
    $_SESSION['errorMessage'] = 'Please login first before placing an order.';
    header('location: ../index.php');
}


?>