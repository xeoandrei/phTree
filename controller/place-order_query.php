<?php

require_once('../classes/order.php');
require_once('../classes/user.php');
require_once('../classes/product.php');

$order = new Order();
$user = new User();
$product = new Product();
if($user -> isLoggedIn()){
    if($product -> isQuantityZero($_GET['productId'])){
        $_SESSION['errorMessage'] = 'Sorry, the product is already out of stock.';
        header('location: ../index.php');
    } else {
        $order -> setCustomerId($_SESSION['user_session']);
        $order -> setProductId($_GET['productId']);
        $order -> setTotal($_GET['total']);
        $order -> addOrder();
        $product -> decrementProductQuantity($_GET['productId']);
        $_SESSION['successMessage'] = 'You have successfuly placed your order.';
        header('location: ../index.php');
    }

} else {
    $_SESSION['errorMessage'] = 'Please login first before placing an order.';
    header('location: ../index.php');
}


?>