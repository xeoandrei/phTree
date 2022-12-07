<?php
    require_once('database.php');

    class User {
        private $id, $firstName, $lastName, $email, $password, $db;

        function __construct(){
            $this -> db = new Database();
        }

        //Getters
        function getId(){
            return $this -> id;
        }

        function getFirstName(){
            return $this -> firstName;
        }

        function getLastName(){
            return $this -> lastName;
        }
        
        function getEmail(){
            return $this -> email;
        }

        function getPassword(){
            return $this -> password;
        }
        //

        //Setters
        function setId($id){
            $this -> id = $id;
        }

        function setFirstName($firstName){
            $this -> firstName = $firstName;
        }

        function setLastName($lastName){
            $this -> lastName = $lastName;
        }

        function setEmail($email){
            $this -> email = $email;
        }

        function setPassword($password){
            $this -> password = $password;
        }
        //

        function getUsers(){
            $this -> db -> query('SELECT * FROM users');
            return $this -> db -> resultSet();
        }

        function getUserById($id){
            $this -> db -> query('SELECT * FROM users WHERE id = :id');
            $this -> db -> bind(':id', $id);
            return $this -> db -> getSingle();
        }

        function checkIfEmailExists(){
            try {

            } catch (PDOException $e) {
                echo $e -> getMessage();
            }

        }

        function register(){
            try {
                $check = false;
                $this -> db -> query("SELECT email FROM users WHERE email = :email");
                $this -> db -> bind(':email', $this -> email);
                $this -> db -> execute();
    
                $userRow = $this -> db -> getSingle();
    
                if($this -> db -> rowCount() > 0) {
                    $_SESSION['errorMessage'] = "Sorry email is already taken.";
                    header('location: ../register.php');
                } else {
                    $hashedPassword = password_hash($this -> password, PASSWORD_DEFAULT);
                    $this -> db -> query('INSERT INTO users(firstName, lastName, usertype, email, password) VALUES (:firstName, :lastName, :usertype, :email, :password)');
                    $this -> db -> bind(':firstName', $this -> firstName);
                    $this -> db -> bind(':lastName', $this -> lastName);
                    $this -> db -> bind(':usertype', 'user');
                    $this -> db -> bind(':email', $this -> email);
                    $this -> db -> bind(':password', $hashedPassword);
                    $this -> db -> execute();
                    $_SESSION['successMessage'] = "You have successfully registered! You may now login.";
                    header('location: ../login.php');
                }

            } catch (PDOException $e) {
                echo $e -> getMessage();
            }

        }

        function login(){
            try {
                $this -> db -> query('SELECT * FROM users WHERE email = :email');
                $this -> db -> bind(':email', $this -> email);
                $this -> db -> execute(array(':email'));
                $userRow = $this -> db -> getSingle();

                if($this -> db -> rowCount() > 0){
                    if(password_verify($this -> password, $userRow -> password)){
                        $_SESSION['usertype'] = $userRow -> usertype;
                        $_SESSION['user_session'] = $userRow -> userId;
                        header('location: ../profile.php');
                    } else {
                        $_SESSION['errorMessage'] = 'Sorry, the credentials you have provided are incorrect. Please try again.';
                        header('location: ../login.php');
                    }
                } else {
                        $_SESSION['errorMessage'] = 'Sorry, the email you have provided is not registered.';
                        header('location: ../login.php');
                }

            } catch (PDOException $e) {
                echo $e -> getMessage();
            }
        }

        function isLoggedIn(){
            if(isset($_SESSION['user_session'])){
                return true;
            }
        }

        function isAdmin(){
            if($_SESSION['usertype'] === 'admin'){
                return true;
            }
        }

        function redirect($url){
            header("location: $url");
        }

        function logout(){
            session_destroy();
            unset($_SESSION['user_session']);
            return true;
        }

    }
?>