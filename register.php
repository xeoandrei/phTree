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
            if(isset($_SESSION['errorMessage'])){
                echo "<div class='alert alert-danger'>" . $_SESSION['errorMessage'] . "</div>";
                unset($_SESSION['errorMessage']);
            }
        ?>
        <form action="controller/register_query.php" method="post">
            <label for="firstName" class="form-label">First Name:</label>
            <input type="text" id="firstName" name="firstName" class="form-control mb-3">
            <label for="lastName" class="form-label">Last Name:</label>
            <input type="text" id="lastName" name="lastName" class="form-control mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control mb-3">
            <button class="btn btn-primary" name="register" type="submit" value="submit">
                Register
            </button>
        </form>
        <a href="login.php" style="color:black;">Already have an account?</a>
    </div>
</body>
</html>

<?php
    include_once('partials/user_footer.php');
?>