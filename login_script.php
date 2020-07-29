<?php

require 'includes/common.php';
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
#$password = md5($password);
$query = "SELECT id , email from users where email='$email' AND password='$password'";
$result = mysqli_query($con, $query) or die(mysqli_errno($con));
$num = mysqli_num_rows($result);
if ($num != 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $row['id'];
    header("location:home.php");
} else {
    $error = "<span class='red'>Invalid Username and Password.</span>";
    header('location:index.php?m1=' . $error);
}
?>
