<?php 

	$connect = mysqli_connect("localhost","root","","ot_logbook"); 

	// $hashedPwd = password_hash('990924055569', PASSWORD_DEFAULT);

	// echo $hashedPwd;

	$sql = mysqli_query($connect, "SELECT * FROM login WHERE utype = 1 OR utype = 2");
	// $result = mysqli_query($connect,$sql);

	$row = mysqli_fetch_assoc($sql);

	if ($row['utype'] == 2) {
		echo "HAHAHAHAHHA";
	}

	else if ($row['utype'] == 1) {
		echo "hehehehehe";
	}
	else {
		echo "No entry";
	}