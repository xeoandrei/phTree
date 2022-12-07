<?php
    require_once('config/database.php');
    $db = new Database();
    include_once('partials/user_header.php');
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container my-5">
        <?php
            if(isset($_SESSION['successMessage'])){
                echo "<div class='alert alert-success'>" . $_SESSION['successMessage'] . "</div>";
                unset($_SESSION['successMessage']);
            } else if(isset($_SESSION['errorMessage'])){
                echo "<div class='alert alert-danger'>" . $_SESSION['errorMessage'] . "</div>";
                unset($_SESSION['errorMessage']);
            }
        ?>
        <form action="controller/login_query.php" method="post">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control mb-3">
            <button class="btn btn-primary" type="submit" name="login">
                Login
            </button>
        </form>
        <a href="register.php" style="color:black;">Create an account?</a>
    </div>
</body>
</html>

<?php
    include_once('partials/user_footer.php');
?>