<?php
require "includes/common.php";
?>
<html>
    <head>
        <title>Settings | E-Store</title>
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
                <div class="col-md-4 col-md-offset-4">
                    <h3>Change Password</h3>
                    <form action="settings_script.php" method="post">
                        <div class="form-group">
                            <input type="password" placeholder="Old-password" class="form-control" name="oldpassword" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="New-password" class="form-control" name="newpassword" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Retype new-password" class="form-control" name="newpasswordre" required="true">
                        </div>
                       
                         <?php
                                if (isset($_GET['m1'])) {
                                    echo $_GET['m1'];
                                }
                                ?>
                        <button type="submit" class="btn btn-primary btn-block"> Change </button>
                   
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
    </body>
</html>