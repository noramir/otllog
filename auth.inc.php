<?php

session_start();

require 'db.inc.php';

if (isset($_SESSION['type'])) {
	if ($_SESSION['type'] == 1) {

		header('Location: ../admin.php?WELCOME ADMIN!');
		echo '<p>You are logged in as Admin!</p>'. $_SESSION['staff'];
	}

	else if ($_SESSION['type'] == 2) {
		header('Location: ../dashboard.php?usermodule');
		echo '<p>You are logged in as User!</p>'. $_SESSION['staff'];
		echo $_SESSION['one'];
		echo $_SESSION['two'];
		echo $_SESSION['lname'];
	}

	else {
		echo "NO ENTRY";
	}
}
else {
		echo '<p>You are logged out!</p>';
}