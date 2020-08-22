<?php 
	$connect = mysqli_connect("localhost","root","","ot_logbook"); 

	if (mysqli_connect_errno())
	{
		echo "Oops! There might be a problem with the connection." . mysqli_connect_error();
	}

	$resultDropdown = mysqli_query($connect, "SELECT id_dep, dep From department_hr");  // tarik data dari DEPARTMENT

	$query = "SELECT * FROM department_otlog ORDER BY id desc";
	$resultTable = mysqli_query($connect, $query);
?>	