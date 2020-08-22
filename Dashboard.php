<?php
require "header.php";  
require 'footer.php';


// if (!isset($_POST['login-submit'])){

//     header('Location: login.php?Unauthorize-access');
//     exit();
// }
	// session_start();
 //    if (empty($_SESSION['user_token'])) {
 //        header('Location:index.php');
 //    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>

	<link rel="stylesheet" type="text/css" href="style/dashboard.css">
	<meta charset="utf-8"/>
        <!-- <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no"/> -->
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="banner col-4">
                    <div class="row col-12 ">
                        <h2 class="col-12">OTLS</h2>
                        <p class="lead col-12">Overtime Log System</p>
                        <?php
                            echo $_SESSION['staff'];
                            echo "&nbsp;";
                            echo $_SESSION['fname'];
                            echo $_SESSION['mname'];
                            echo "&nbsp;";
                            echo $_SESSION['lname'];
                            echo "<br>";
                            echo $_SESSION['email'];
                        ?>
                    </div>
                </div>
              <div class="buttons col-8">
                    <div class="row col-12">
                        <a href="application.php" class="btn btn-dark btn-block">OT Application Form</a>
                        <a href="view.php" class="btn btn-dark btn-block" name="view-submit">View</a> 
                    </div>
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