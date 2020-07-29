<?php

require 'includes/common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "Insert into users_products (userid,productid,status) values ('$user_id','$product_id','Added to cart')";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    header("location:home.php");
}
?>