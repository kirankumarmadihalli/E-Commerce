<?php
require 'includes/common.php';
if(isset($_POST['submit'])){

$name=$_POST['name'];
$name= mysqli_real_escape_string($con,$name);
$email=$_POST['email'];
$email= mysqli_real_escape_string($con,$email);
$message=$_POST['message'];
$message= mysqli_escape_string($con, $message);
$query="INSERT INTO contact (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
mysqli_query($con,$query) or die(mysqli_errno($con));
header('location:contact.php');
    
}
?>

