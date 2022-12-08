<?php
    include_once('partials/user_header.php');
    $product = new Product();
    $productId = $_GET['productId'];
    $products = $product->getProductById($productId);
?>

    <!DOCTYPE html>
    <html lang="en">
    <body>
        <div class="container my-5">
            <h1>Confirm Checkout?</h1>
            <?php $image='assets/products/'.$products->image;?>
            <img src=<?php echo "$image"?> class="img-fluid rounded-start" style="width: 45%; height: 75%"; alt="...">
            <h4><?php echo $_GET['productName'] ?></h4>
            <h4><?php echo $_GET['total'] ?></h4>
            <a href="controller/place-order_query.php?productId=<?php echo $_GET['productId'] ?>&total=<?php echo $_GET['total'] ?>" class="btn btn-primary">Buy now</a>
        </div>
    </body>
    </html>

<?php
    include_once('partials/user_footer.php');
?>