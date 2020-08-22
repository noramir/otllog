<?php

$conn = mysqli_connect("localhost","root","","ot_logbook");
$query = "SELECT * FROM login WHERE user_en=?;";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
	session_start();	
	$_SESSION['user'] = $row;
}
?>

