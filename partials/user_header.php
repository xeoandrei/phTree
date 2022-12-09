<?php
  require_once('classes/database.php');
  require_once('classes/user.php');
  require_once('classes/order.php');
  require_once('classes/product.php');
  $db = new Database();
  $user = new User();
  $product = new Product();
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
</head>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark navbar-inner">

  <div class="container-fluid container">

    <a class="navbar-brand" href="index.php">PHTree</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="appliances.php">Appliances</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="furniture.php">Furnitures</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
            if(isset($_SESSION['usertype'])){
              if($user -> isAdmin()){
                echo '<li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Admin</a>
                      </li>';
              }
            }
        ?>
        <?php if($user -> isLoggedIn()){ ?>
          <li class="nav-item">
            <?php echo '<a class="nav-link" href="profile.php">Profile</a>';?>
          </li>

          <li class="nav-item">
            <?php echo '<a class="nav-link" href="logout.php">Logout</a>';?>
          </li>
          
          <?php } else { ?>
            <li class="nav-item">
              <?php echo '<a class="nav-link" href="login.php">Login</a>';?>
            </li>
          <?php } ?>
      </ul>
    </div>
    
  </div>

</nav>