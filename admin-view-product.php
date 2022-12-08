<?php
    include_once('partials/admin_header.php');
    require_once('classes/product.php');
    $product = new Product();
    $productId = $_GET['productId'];
    $products = $product->getProductById($productId);
?>
<div class="container my-5">
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <?php $image='assets/products/'.$products->image;?>
        <img src=<?php echo "$image"?> class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h3 class="card-title"><?php echo $products->name?></h5>
            <h5 class="card-title"><?php echo $products->category?></h5>
            <p class="card-text"><?php echo $products->price?></p>
            <p class="card-text"><small class="text-muted">Remaining Quantity: <?php echo $products->quantity?></small></p>
        </div>
        </div>
    </div>
    </div>
    <div class="mb-5">
        <a href="javascript:history.back()" class="btn btn-dark">Go Back</a>
    </div> 
</div>