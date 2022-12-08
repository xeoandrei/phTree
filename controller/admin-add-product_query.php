<?php

    require_once('../classes/product.php');

    if(isset($_POST['save'])) {
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setQuantity($_POST['quantity']);
        $product->setCategory($_POST['category']);
        $product->setImage($_FILES['image']['name']);
        echo $product->setImage($_FILES['image']['name']);
        $product->addProduct();
        copy(($_FILES['image']['tmp_name']),  "../assets/products/".  $_FILES['image']['name']);
        
       
        header('location: ../admin-products.php');
    }   
    header('location: ../admin-products.php');
?>