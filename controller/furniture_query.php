<?php

    require_once('../classes/furniture.php');

    if(isset($_POST['save'])) {
        $furniture = new Furniture();
        $furniture->setName($_POST['name']);
        $furniture->setPrice($_POST['price']);
        $furniture->setQuantity($_POST['quantity']);
        $furniture->addFurniture();
    }   

?>