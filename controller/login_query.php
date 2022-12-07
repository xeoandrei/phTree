<?php

require_once('../classes/user.php');

if(isset($_POST['login'])){
    $user = new User();
    $user -> setEmail($_POST['email']);
    $user -> setPassword($_POST['password']);
    $user -> login();
}

?>