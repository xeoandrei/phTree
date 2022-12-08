<?php
  require_once('classes/database.php');
  require_once('classes/user.php');
  require_once('classes/furniture.php');
  require_once('classes/order.php');
  $db = new Database();
  $user = new User();
  $furniture = new Furniture();
  $order = new Order();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHTree</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/user-styles.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/49aaec98d5.js" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark">

  <div class="container-fluid container">

    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Appliances</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-furnitures.php">Furnitures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-view-orders.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-view-users.php">Users</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


        <li class="nav-item">
            <a class="nav-link" href="index.php">Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
    
  </div>

</nav>