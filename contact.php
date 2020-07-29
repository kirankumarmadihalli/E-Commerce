<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us | E-Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class='container'>
            <div class="row text-justify">
                <div class='col-md-8'>
                    <h2>LIVE SUPPORT</h2>
                    <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores maxime expedita voluptatibus? Quam, cumque cupiditate laboriosam ducimus optio neque repudiandae vero sint nulla ipsum facilis earum consequuntur eum quo. voluptate obcaecati eveniet suscipit provident animi voluptatem placeat doloremque facere maxime totam nostrum necessitatibus cupiditate in corrupti quidem, explicabo saepe. Dolorem aut odit quo qui veniam!</p>
                </div>
                <div class='col-md-4'>
                    <img src="img/contact.png" alt="img" class='img-responsive'>
                </div>
            </div>
            <br>
            <div class="row text-justify">
                <div class='col-md-7'>
                    <h2>CONTACT US</h2>
                    <form action="contact_script.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" cols="55" class="form-control" rows="10"></textarea>
                        </div>
                        <input type="submit" name='submit' class="btn btn-primary" value="Submit">
                    </form>
                </div>
                <div class='col-md-offset-1 col-md-4'>
                    <h2>Company Information:</h2>
                    <p class="text-muted">500,Lorem ipsum dolor sit amet consectetur,</p>
                  <p class="text-muted">12-568-875 Lorem ipsum dolor sit,</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-123-0000000</p>
                  <p class="text-muted">Email : mobile@shoppee.com</p>
                  <p class="text-muted">Follow On:     <a href="#"><i class="fa fa-instagram"></i></a> 
                      <a href="#"><i class="fa fa-facebook-square"></a></i></p>                  
                </div>
            </div>
        </div><br>
        <?php
        include 'includes/footer.php';
        ?>

    </body>
</html>
