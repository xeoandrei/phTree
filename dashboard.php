<?php
    include_once('partials/admin_header.php');
?>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header bg-dark text-white py-3">
                    Dashboard
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm p-4 mb-5 bg-body rounded">
                                <h4>All Users <i class="fas fa-user"></i></h4>
                                <h3><?php echo $user->countRowUsers()?></h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm p-4 mb-5 bg-body rounded">
                                <h4>All Products <i class="fas fa-layer-group"></i></h4>
                                <h3><?php echo $product->countRowProducts()?></h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm p-4 mb-5 bg-body rounded">
                                <h4>All Orders <i class="fas fa-bag-shopping"></i></h4>
                                <h3><?php echo $order->countRowOrders()?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center shadow-sm p-4 mb-5 bg-body rounded">
                                <h4>All Furnitures <i class="fas fa-couch"></i></h4>
                                <h3><?php echo $product->countRowFurnitures()?></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center shadow-sm p-4 mb-5 bg-body rounded">
                                <h4>All Appliances <i class="fas fa-tablet"></i></h4>
                                <h3><?php echo $product->countRowAppliances()?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</div>
