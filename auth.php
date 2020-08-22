<?php 

	$connect = mysqli_connect("localhost","root","","ot_logbook"); 

	if (mysqli_connect_errno())
	{
		echo "Oops! There might be a problem with the connection." . mysqli_connect_error();
	}

	$id1 = '2641';
	$id2 = '0000';
	$staffid = $connect->real_escape_string($_REQUEST['inputStaff']);
	$hashed_password1 = 'e6693a7ad75a19d762743ee88b0f0e68';
	$hashed_password2 = '827ccb0eea8a706c4c34a16891f84e7b';
	$input = $connect->real_escape_string($_REQUEST['inputPwd']);

	if ((md5($input) === $hashed_password1) && ($staffid === $id1) || (md5($input) === $hashed_password2) && ($staffid === $id2) ){

		header('Location: dashboard.php');
		// echo '<script type="text/javascript">
		// 	alert("Welcome!")
 	// 		location.replace("dashboard.php")
 	// 	</script>';
	}

	else{

		echo '<script type="text/javascript">
				alert("Your password is invalid!")
				location.replace("login.php")
			</script>';
	}	

	// $check = $connect->real_escape_string($_REQUEST['inputPwd']);
	// $hashPWD = md5($check);

	// if (password_verify("990924055569", $hashed_password)) {
	// 	echo '<script type="text/javascript">
	// 			alert("Welcome!")
	// 			location.replace("index.php")
	// 		</script>';
	// }

	
?>