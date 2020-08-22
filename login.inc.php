<?php
require "db.inc.php";
if(isset($_POST['login-submit'])){

	$staffID = $_POST['staffID'];
	$password = $_POST['pwd'];
	// $admin = mysqli_query("SELECT * FROM login WHERE utype = 1");
	// $user = mysqli_query("SELECT * FROM login WHERE utype = 2");

	if (empty($staffID) || empty($password)) {
		header("Location: ../login.php?error=emptyfields");
		exit();
	}

	else { 
		$sql = "SELECT * FROM login, register_user, department_hr WHERE user_en LIKE ? AND register_user.employment_no LIKE user_en AND register_user.department LIKE department_hr.id_dep";
		$stmt = mysqli_stmt_init($connect);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../login.php?error=sqlerror");
			exit();
		}

		else {

			mysqli_stmt_bind_param($stmt, "s", $staffID);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if ($row = mysqli_fetch_assoc($result)) {


				if (md5($password) == $row['password']) {

					session_start();

					$_SESSION['staff'] = $row['user_en'];
					$_SESSION['fname'] = $row['first_name'];
					$_SESSION['mname'] = $row['middle_name'];
					$_SESSION['lname'] = $row['last_name'];
					$_SESSION['deptid'] = $row['id_dep'];
					$_SESSION['dept'] = $row['dep'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['type'] = $row['utype'];
					header ("Location: auth.inc.php?login=PROCESSING");
					// header ("Location: ../home.php?login=SUCCESSFUL");
					exit();

				}

				else {
					header ("Location: ../login.php?login=FAILED");
					exit();
				}

				// $pwdCheck = password_verify($password, $row['password']);

				// if ($pwdCheck == false) {
				// 	header("Location: ../home.php?error=wrongPassword");
				// 	exit();
				// }

				// else if ($pwdCheck == true) {

				// 	session_start();
				// 	$_SESSION['staff'] = $row['user_en'];
				// 	$_SESSION['admin'] = ($row['utype'] == 1);
				// 	$_SESSION['user'] = ($row['utype'] == 2);
				// 	header ("Location: ../home.php?login=SUCCESS");
				// 	exit();
				// }

				// else {
				// 	header("Location: ../home.php?error=WRONG");
				// 	exit();
				// }
			}

			else {
				header("Location: ../login.php?error=noUser");
				exit();
			}
			
		}
	}
}
else {
	header("Location: ../404.php?");
	exit();
}