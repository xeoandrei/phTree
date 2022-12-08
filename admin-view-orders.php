<?php
    include_once('partials/admin_header.php');
    $orders = $order -> getOrders();
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container my-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Order ID:</th>
                    <th scope="col">Customer ID:</th>
                    <th scope="col">Product ID:</th>
                    <th scope="col">Total:</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $val){ ?>
                <tr>
                    <td><?php echo $val -> orderId ?></td>
                    <td><?php echo $val -> customerId ?></td>
                    <td><?php echo $val -> productId ?></td>
                    <td>₱<?php echo $val -> total ?></td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</body>
</html>

