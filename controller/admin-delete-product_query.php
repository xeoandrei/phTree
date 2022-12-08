<?php

    require_once('../classes/product.php');

    $product = new Product();
    $productId = $_GET['productId'];
    $products = $product->deleteProduct($productId);  

    header('location: ../admin-products.php');
?>