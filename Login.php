
<?php 
    // session_start();

    //     $userToken = bin2hex(openssl_random_pseudo_bytes(24));

    //     $_SESSION['user_token'] = $userToken;


    // // include "auth.php";
    // include "db.php";
    // // require "auth.php";

    require 'header.php';
    require 'footer.php'
?>

<!DOCTYPE html>
<html>
<head>
	
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="style/loginstyle.css">

	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body id="body">
    <div class="main">
        <div class="container">
            <div class="row">

                <div class="banner col-5">
                    <h3>Application Form</h3>
                </div>

                <div class="form col-7">
                    <form class="login-form" action="includes/login.inc.php" method="POST">   
                        <div class="form-row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" id="staffID" name="staffID" placeholder="Staff ID" autocomplete="off">
                            </div>

                            <div class="form-group col-12">
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
                            </div>
                        </div>                          
                        <button type="submit" class="btn btn-outline-primary btn-block" name="login-submit">Sumbit</button>

                    </form>
                </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>