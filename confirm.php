<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="style.css">
        <title>Confirm | Mobile Shoppee</title>
    </head>
    <body>
        <?php
        $user_id = $_SESSION["user_id"];
        $query = "SELECT productid FROM users_products WHERE userid = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while ($row = mysqli_fetch_array($result)) {
            $product_id = $row["productid"];
            $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE productid = '$product_id'";
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        ?>
    </body>
</html>