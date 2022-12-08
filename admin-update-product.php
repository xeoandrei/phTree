<?php
    include_once('partials/admin_header.php');
    require_once('classes/product.php');
    $product = new Product();
    $productId = $_GET['productId'];
    $products = $product->getProductById($productId);
?>
<div class="container my-5">
    <h1>UPDATE PRODUCT</h1>
    <form action="controller/admin-update-product_query.php" method = "post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $products->productId;?>" name="productId">
        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" value="<?php echo $products->name;?>" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" value="<?php echo $products->price;?>" name="price" min="1" required>
        </div>
        <div class="mb-3">
            <label class="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $products->quantity;?>" min="1" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-control" value="<?php echo $products->category;?>" required>
                <option value = "">--Select Category--</option>
                <option value="Appliance">Appliance</option>
                <option value="Furniture">Furniture</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/png, image/jpeg" required>
        </div>
        <?php $image='assets/products/'.$products->image;?>
        <img src=<?php echo "$image"?> class="img-fluid rounded-start" width="75" height="75" alt="..."><br><br>
        <button type="submit" class="btn btn-primary" name="update">Submit</button>
        <a href="admin-products.php" class="btn btn-dark">Cancel</a>
    </form>
</div>