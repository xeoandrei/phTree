<?php
    require_once('database.php');
    class Order{

        private $orderId, $customerId, $productId, $total, $db;

        function __construct()
        {
            $this -> db = new Database();
        }

        //getters

        function getOrderId(){
            return $this -> orderId;
        }

        function getCustomerId(){
            return $this -> customerId;
        }

        function getProductId(){
            return $this -> productId; 
        }

        function getTotal(){
            return $this -> total;
        }


        //setters


        function setOrderId($orderId){
            $this -> orderId = $orderId;
        }

        function setCustomerId($customerId){
            $this -> customerId = $customerId;
        }

        function setProductId($productId){
            $this -> productId = $productId; 
        }

        function setTotal($total){
            $this -> total = $total;
        }

        function getOrders(){
            $this -> db -> query("SELECT * FROM orders");
            return $this->db->resultset();
        }

        function getOrderById($orderId){
            $this -> db -> query("SELECT * FROM orders WHERE orderId = :orderId");
            $this -> db -> bind(":orderId", $orderId);
            return $this->db->getSingle();

        }

        function addOrder(){
            $this -> db -> query("INSERT INTO orders (customerId, productId, total) VALUES (:customerId, :productId, :total)");
            $this -> db -> bind(":customerId", $this->customerId);
            $this -> db -> bind(":productId", $this->productId);
            $this -> db -> bind(":total", $this->total);
            $this -> db -> execute();

        }

        function deleteOrder($orderId){
            $this -> db -> query("DELETE FROM orders WHERE orderId = :orderId");
            $this -> db -> bind(":orderId", $orderId);
            $this -> db -> execute();

        }

        function countRow(){
            $this -> db -> query("SELECT * FROM orders");
            $this -> db -> execute();
            return $this -> db -> rowCount();
        }




    }

?>
