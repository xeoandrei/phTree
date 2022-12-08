<?php
    include_once('partials/admin_header.php');
    $orders = $order -> getOrders();
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container my-5">
        <?php 
            if(isset($_SESSION['successMessage'])){
                echo "<div class='alert alert-success'>" . $_SESSION['successMessage'] . "</div>";
                unset($_SESSION['successMessage']);
            }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Order ID:</th>
                    <th scope="col">Customer ID:</th>
                    <th scope="col">Product ID:</th>
                    <th scope="col">Total:</th>
                    <th scope="col">Action:</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $val){ ?>
                <tr>
                    <td><?php echo $val -> orderId ?></td>
                    <td><?php echo $val -> customerId ?></td>
                    <td><?php echo $val -> productId ?></td>
                    <td>₱<?php echo $val -> total ?></td>
                    <td><a class="btn btn-danger" href="controller/admin-delete-order.php?orderId=<?php echo $val -> orderId ?>" onclick="return confirm('Are you sure you want to delete this order?')">Delete</a></td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</body>
</html>

