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

        function query($query){
            $this -> stmt = $this -> connection -> prepare($query);
        }

        function execute(){
            return $this -> stmt -> execute();
        }

        function resultSet(){
            $this -> execute();
            return $this -> stmt -> fetchAll(PDO::FETCH_OBJ);
        }

        function rowCount(){
            return $this -> stmt -> rowCount();
        }

        function getSingle(){
            $this -> execute();
            return $this -> stmt -> fetch(PDO::FETCH_OBJ);
        }

        function bind($param, $value, $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this -> stmt -> bindValue($param, $value, $type);
        }



    }
?>