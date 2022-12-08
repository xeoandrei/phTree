<?php
    require_once('database.php');
    class Product{

        private $productId, $name, $price, $quantity, $category, $db;

        function __construct()
        {
            $this->db = new Database();
        }

        //getters

        function getProductId(){
            return $this->productId;
        }

        function getName(){
            return $this->name; 
        }

        function getPrice(){
            return $this->price;
        }

        function getQuantity(){
            return $this->quantity;
        }

        function getCategory(){
            return $this->category;
        }

        function getImage(){
            return $this->image;
        }


        //setters

        function setProductId($productId){
            $this->productId = $productId;
        }

        function setName($name){
            $this->name = $name; 
        }

        function setPrice($price){
            $this->price = $price ;
        }

        function setQuantity($quantity){
            $this->quantity = $quantity;
        }

        function setCategory($category){
            $this->category = $category;
        }

        function setImage($image){
            $this->image = $image;
        }



        function getProducts(){
            $this->db->query("SELECT * FROM products");
            return $this->db->resultset();
        }

        function getFurnitures(){
            $this->db->query("SELECT * FROM products WHERE category = 'Furniture'");
            return $this->db->resultset();
        }

        function getAppliances(){
            $this->db->query("SELECT * FROM products WHERE category = 'Appliance'");
            return $this->db->resultset();
        }

        function getProductById($productId){
            $this->db->query("SELECT * FROM products WHERE productId = :productId");
            $this->db->bind(":productId",$productId);
            return $this->db->getSingle();

        }

        function getAppliance(){
            $this->db->query("SELECT * FROM products WHERE category ='Appliance'");
            return $this->db->resultset();
        }

        function getFurniture(){
            $this->db->query("SELECT * FROM products WHERE category ='Furniture'");
            return $this->db->resultset();
        }

        function addProduct(){
            $this->db->query("INSERT INTO products (name, price, quantity, category, image) VALUES (:name, :price, :quantity, :category, :image)");
            $this->db->bind(":name", $this->name);
            $this->db->bind(":price", $this->price);
            $this->db->bind(":quantity", $this->quantity);
            $this->db->bind(":category", $this->category);
            $this->db->bind(":image", $this->image);
            $this->db->execute();

        }

        function updateProduct($data){
            $this->db->query("UPDATE products SET name = :name, price = :price, quantity = :quantity,  category = :category, image = :image WHERE productId = :productId");
            $this->db->bind(":productId", $data['productId']);
            $this->db->bind(":name", $data['name']);
            $this->db->bind(":price", $data['price']);
            $this->db->bind(":quantity", $data['quantity']);
            $this->db->bind(":category", $data['category']);
            $this->db->bind(":image", $data['image']);
            $this->db->execute();
            

        }

        function deleteProduct($productId){
            $this->db->query("DELETE FROM products WHERE productId = :productId");
            $this->db->bind(":productId", $productId);
            $this->db->execute();

        }

        function countRowProducts(){
            $this->db->query("SELECT * FROM products");
            $this->db->execute();
            return $this->db->rowCount();
        }

        function isQuantityZero($productId){
            $this -> db -> query("SELECT * FROM products WHERE productId = :productId");
            $this -> db -> bind(":productId", $productId);
            $this -> db -> execute();
            $result = $this->db->getSingle();
            if($result -> quantity == 0) {
                return true;
            } else {
                return false;
            }
        }

        function decrementProductQuantity($productId){
            $this->db->query("UPDATE products SET quantity = quantity - 1 WHERE productId = :productId");
            $this->db->bind(":productId", $productId);
            $this->db->execute();
        }

        function countRowFurnitures(){
            $this->db->query("SELECT * FROM products WHERE category = 'Furniture'");
            $this->db->execute();
            return $this->db->rowCount();
        } 

        function countRowAppliances(){
            $this->db->query("SELECT * FROM products WHERE category = 'Appliance'");
            $this->db->execute();
            return $this->db->rowCount();
        } 


    }

?>
