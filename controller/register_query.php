<?php

require_once('../classes/user.php');

print_r($_POST);

if(isset($_POST['register'])){
    $user = new User();

    if($firstName = ""){
        $_SESSION['errorMessage'] = "Provide first name.";
        header('location: ../register.php');
    } else if($lastName = ""){
        $_SESSION['errorMessage'] = "Provide last name.";
        header('location: ../register.php');
    } else if(strlen($_POST['password']) < 6) {
        $_SESSION['errorMessage'] = "Password must be atleast 6 characters.";
        header('location: ../register.php');
    } else {
        $user -> setFirstName($_POST['firstName']);
        $user -> setLastName($_POST['lastName']);
        $user -> setEmail($_POST['email']);
        $user -> setPassword($_POST['password']);
        $user -> register();
    }


}

?>