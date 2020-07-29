<html>
    <head>
        <title>HOME | E-Store</title>
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
        ?> <br><br><br>
        <div class="container">
            
            <div class="col-md-offset-3 col-md-6">
                <h4 class="text-center text-info">Enter your email and then hit submit.<br>We will send reset password link to your mail in some time.</h4>

                <div class="form-group">
                    <input type="email" placeholder="Enter the email" class="form-control" >
                </div>
                

                <a href="logout.php" class="btn btn-primary">Submit</a>

             </div>
        </div>   

    </body>
</html>