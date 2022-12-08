<?php

require_once('../classes/user.php');
$user = new User();

$user -> upgradeAccount($_GET['userId']);
header('location: ../admin-view-users.php');

?>