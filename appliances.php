<?php
    include_once('partials/user_header.php');
    $products = $furniture -> getFurnitures();
?>



<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container my-5">
        <div class="row">

                <?php foreach($products as $val){ ?>
                <div class="col-lg-4">
                    <div class="card my-2">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $val -> name ?></h5>
                            <p class="card-text">Price: ₱<?php echo $val -> price ?></p>
                            <a class="btn btn-primary" href="confirm-checkout.php?productName=<?php echo $val -> name ?>&productId=<?php echo $val -> furnitureId ?>&total=<?php echo $val -> price ?>">Buy</a>
                        </div>
                    </div>
                </div>
                <?php } ?>


        </div>


    </div>
</body>
</html>

<?php
    include_once('partials/user_footer.php');
?>

