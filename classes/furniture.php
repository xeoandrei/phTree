<?php
    require_once('database.php');
    class Furniture{

        private $id, $name, $price, $quantity, $db;

        function __construct()
        {
            $this->db = new Database();
        }

        //getters

        function getId(){
            return $this->id;
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


        //setters

        function setId($id){
        $this->id = $id;
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


        function getFurnitures(){
            $this->db->query("SELECT * FROM furniture");
            return $this->db->resultset();
        }

        function getFurnitureByid($id){
            $this->db->query("SELECT * FROM furniture WHERE id = :id");
            $this->db->bind(":id",$id);
            return $this->db->single();

        }

        function addFurniture(){
            $this->db->query("INSERT INTO furniture (name, price, quantity) VALUES (:name, :price, :quantity)");
            $this->db->bind(":name", $this->name);
            $this->db->bind(":price", $this->price);
            $this->db->bind(":quantity", $this->quantity);
            $this->db->execute();

        }

        function updateFurniture($data){
            $this->db->query("UPDATE furniture SET name = :name, price = :price, quantity = :quantity WHERE id = :id");
            $this->db->bind(":id", $data['id']);
            $this->db->bind(":name", $data['name']);
            $this->db->bind(":price", $data['price']);
            $this->db->bind(":quantity", $data['quantity']);
            $this->db->execute();

        }

        function deleteFurniture($id){
            $this->db->query("DELETE FROM furniture WHERE id = :id");
            $this->db->bind(":id", $id);
            $this->db->execute();

        }

        function countRow(){
            $this->db->query("SELECT * FROM furniture");
            $this->db->execute();
            return $this->db->rowCount();
        } 


    }

?>
