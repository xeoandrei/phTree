<?php
    include_once('partials/user_header.php');
    $id = $_SESSION['user_session'];
    $users = $user->getUserById($id);
?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="fw-bold float-start">My Account</h1>
        </div>
        <div class="card-body row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                <h2 class="mb-4 fw-bold">Profile</h2>
                <p>First Name: <?php echo $users->firstName ?></p>
                <p>Last Name: <?php echo $users->lastName ?></p>
                <p>Email: <?php echo $users->email ?></p>                
            </div>
        </div>
    </div>
</div>

<?php
    include_once('partials/user_footer.php');
?>
