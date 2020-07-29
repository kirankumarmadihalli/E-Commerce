<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success | E-Store</title>
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
         require 'confirm.php';
        ?><br><br><br>
        <div class="container">
            <div class="col-xs-12">
                <div class="jumbotron">
                    <h3 class="text-center">Thank You for Ordering from E-Store.</h3>
                    <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                    <hr>
                    <h5 class="text-center">Order some more items , Click <a href="home.php">here</a></h5>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br>
        
    </body>
</html>
