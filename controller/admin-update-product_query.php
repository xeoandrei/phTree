<?php

    require_once('../classes/product.php');

    if(isset($_POST['update'])) {
        $product = new Product();
        $data = [
            'productId' => ($_POST['productId']),
            'name' => ($_POST['name']), 
            'price' => ($_POST['price']), 
            'quantity' => ($_POST['quantity']), 
            'category' => ($_POST['category']),
            'image' => ($_FILES['image']['name'])
        ];
        $product->updateProduct($data);
        copy(($_FILES['image']['tmp_name']),  "../assets/products/".  $_FILES['image']['name']);
        print_r($data);
    }   
    header('location: ../admin-products.php');
?>