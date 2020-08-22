<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="This will often show up in search result.">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>TEST LOGIN PAGE</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />	

    <!-- basic bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>

    <div>
    	<form action="includes/login.inc.php" method="post">
    		<input class="form-group" type="text" name="staffID" placeholder="Example: 0000" autocomplete="off">
    		<input class="form-group" type="password" name="pwd" placeholder="Password">
    		<button type="submit" name="login-submit">Login</button>
    	</form>

    	<form action="includes/logout.inc.php" method="post">
    		<button type="submit" name="logout-submit">Logout</button>
    	</form>
    </div>
	</header>
</body>
</html>