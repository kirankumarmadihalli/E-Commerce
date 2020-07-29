<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart | E-Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?><br>
        <div class="container">
            <div class="row">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>  
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT products.price AS price, products.id, products.name AS name FROM users_products JOIN products ON users_products.productid = products.id WHERE users_products.userid = '$user_id' and status='Added To cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            while ($row = mysqli_fetch_array($result)) {
                                $sum += $row["price"];
                                $id = $row["id"];
                                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                            }
                            echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                            ?>
                        </tbody>
                        <?php
                    } else {
                        echo "Add items to the cart first!";
                    }
                    ?>

                </table>   
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
       

    </body>
</html>