<?php
    include_once('partials/admin_header.php');
    echo "ULOL";
    require_once('classes/furniture.php');
    $furniture = new Furniture();
    $furnitures = $furniture->getFurnitures();
?>
<div class="container my-5">
    <h1 class="fw-bold text-center mt-2 mb-3">Furnitures</h1> 
    <nav class="navbar p-0 justify-content-end me-3">  
        <ul class="nav nav-tabs border-0">
            <li class="nav-item">
                <a class="nav-link btn btn-success" href="admin-add-furnitures.php">Add<i class="fa-solid fa-plus ms-1"></i></a>
            </li>
        </ul>    
    </nav>  
    <div class="container">  
        <div class="col-lg col-md mb-3">
            <div class="card shadow p-3 bg-body rounded">
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-sm">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            <?php foreach($furnitures as $val){ ?>
                                <tr>
                                    <td><?php echo $val->furnitureId;?></td>
                                    <td><?php echo $val->name;?></td>
                                    <td><?php echo "₱" . $val->price . ".00";?></td>
                                    <td><?php echo $val->quantity;?></td>
                                    <td><?php echo "demo";?></td>
                                    <td>
                                        <a href="admin-view-furniture.php"><i class="fa-solid fa-eye me-2"></i></a>
                                        <a href="#"><i class="fa-solid fa-pen-to-square me-2"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash me-2"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    