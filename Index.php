<?php
    // //start the session.
    // session_start();
     
    // *
    //  * The code below should be executed after the user has successfully logged in.
    //  * It can also be executed whenever you need to
    //  * give the user a new token.
     
     
    // //create a cryptographically secure token.
    // $userToken = bin2hex(openssl_random_pseudo_bytes(24));
     
    // //assign the token to a session variable.
    // $_SESSION['user_token'] = $userToken;
     
//     //redirect user to home page
//     header('Location: index.php');
// exit;

    require 'header.php';
    require 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>OT LOG SYSTEM</title>

	<link rel="stylesheet" type="text/css" href="style/index.css">
	<meta charset="utf-8"/>
        <!-- <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no"/> -->
        <meta name="viewport" content="user-scalable=no, width=device-width" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="masthead">
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
	<div class="containerBody">
        <div class="mainContent">

        	<div class="COL-12 justify-content-center" >
        		<h1>WELCOME</h1>
        		<p>Overtime Log System</p>
        		<a class="btn btn-primary btn-block" href="login.php">Login</a>
        	</div>

        </div>
    </div>
</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>