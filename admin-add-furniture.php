<?php
    include_once('partials/admin_header.php');
?>
<div class="container my-5">
    <h1>ADD FURNITURE</h1>

    <form action="controller/furniture_query.php" method = "post">
        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="name" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label class="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="admin-furnitures.php" class="btn btn-dark">Cancel</a>
    </form>
</div>