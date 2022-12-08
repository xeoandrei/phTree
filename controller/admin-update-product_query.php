<?php

    require_once('../classes/product.php');

    if(isset($_POST['update'])) {
        $product = new Product();
        $data = [
            'productId' => ($_POST['productId']),
            'name' => ($_POST['name']), 
            'price' => ($_POST['price']), 
            'quantity' => ($_POST['quantity']), 
            'category' => ($_POST['category'])
        ];
        $product->updateProduct($data);
        print_r($data);
    }   
    // header('location: ../admin-products.php');
?>