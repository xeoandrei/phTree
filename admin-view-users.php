<?php
    include_once('partials/admin_header.php');
    $users = $user -> getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container my-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">User ID:</th>
                    <th scope="col">First Name:</th>
                    <th scope="col">Last Name:</th>
                    <th scope="col">User Type:</th>
                    <th scope="col">Email:</th>
                    <th scope="col">Action:</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $val){ ?>
                <tr>
                    <td><?php echo $val -> userId ?></td>
                    <td><?php echo $val -> firstName ?></td>
                    <td><?php echo $val -> lastName ?></td>
                    <td><?php echo $val -> usertype ?></td>
                    <td><?php echo $val -> email ?></td>
                    <?php if($val -> usertype == 'admin'){ ?>
                        <td><a class='btn btn-danger' href="controller/downgrade-account_query.php?userId=<?php echo $val -> userId ?>" onclick="return confirm('Are you sure you want to downgrade this user to user level?')">Downgrade</a></td>
                    <?php } else { ?>
                        <td><a class='btn btn-success' href="controller/upgrade-account_query.php?userId=<?php echo $val -> userId ?>" onclick="return confirm('Are you sure you want to upgrade this user to admin level?')">Upgrade</a></td>
                    <?php } ?>

                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</body>
</html>

