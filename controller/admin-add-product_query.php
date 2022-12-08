<?php

    require_once('../classes/product.php');

    if(isset($_POST['save'])) {
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setQuantity($_POST['quantity']);
        $product->setCategory($_POST['category']);
        $product->addProduct();
    }   

?>