<?php
    require_once('config.php');

    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASSWORD;
        private $dbname = DB_NAME;

        private $connection, $error, $stmt;
        private $dbConnected = false;

        function __construct(){
            $dsn = 'mysql:host=' . $this -> host . ';dbname=' . $this -> dbname;
            $option = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try {
                $this -> connection = new PDO($dsn, $this -> user, $this -> pass, $option);
                $this -> dbConnected = true;
            } catch (PDOException $e) {
                $this -> error = $e -> getMessage();
                $this -> dbConnected = false;
            }
        }

        function getError(){
            return $this -> error;
        }

        function isConnected(){
            return $this -> dbConnected;
        }

    }
?>