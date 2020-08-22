<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="icon" href="img/overtime.ico" sizes="16x16" type="image/ico">

	<meta charset="utf-8">
	<meta name="description" content="This will often show up in search result.">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />	

    <!-- basic bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

	<header>
		<nav class="navbar fixed-top navbar-light bg-dark justify-content-between">
    <a class="navbar-brand" href="index.php">
      <img src="img/overtime.svg" width="35" height="auto" class="d-inline-block align-middle" alt="">
      <b class="d-inline-block align-middle" style="color: white;">OTLS</b>
    </a>
      <?php
          echo '<form action="includes/logout.inc.php" method="post">
                  <button class="btn btn-outline-light btn-sm" type="submit" name="logout-submit">Logout</button>
                </form>';
      //   else {
      //     echo '<form action="includes/login.inc.php" method="post">
      //   <input type="text" name="staffID" placeholder="Example: 0000" autocomplete="off" class="d-inline-block align-middle">
      //   <input type="password" name="pwd" placeholder="Password"  class="d-inline-block align-middle" >
      //   <button class="btn btn-outline-primary" type="submit" name="login-submit">Login</button>
      // </form>';
      //   }

      ?>
  </nav>
    	
	</header>

</body>
</html>