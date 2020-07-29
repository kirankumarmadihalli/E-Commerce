<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | E-Store</title>
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
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/yess.jpg" alt="image" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <form action="signup_script.php" method="post">
                        <h2>SIGN UP</h2>
                        <div class="form-group">
                        <input type="text" placeholder="Name" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                         </div>
                        <div class="form-group">
                            <input type="email" placeholder="E-mail" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <?php 
                            if (isset($_GET['m1'])){
                                echo $_GET['m1'];
                            }
                            ?>
                        </div> 
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" pattern=".{6,}" required title="Enter more than 6 characters">
                         </div> 
                        <div class="form-group">
                            <input type="tel" placeholder="Contact" name="contact" class="form-control" maxlength="10" size="10" pattern=".{10}" required>
                             <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                        </div>
                        <div class="form-group">
                        <input type="text" placeholder="City" name="city" class="form-control"  required>
                         </div> 
                        <div class="form-group">
                        <input type="text" placeholder="Address" name="address" class="form-control" required>
                         </div>
                        <div class='pull-right'>
                        <button type='submit' name='submit' class="btn btn-primary btn-lg">Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
