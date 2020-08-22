<?php

$connect = mysqli_connect("localhost","root","","ot_logbook"); 

	if (mysqli_connect_errno())
	{
		echo "Oops! There might be a problem with the connection." . mysqli_connect_error();
	}

$staffname = $connect->real_escape_string($_REQUEST['fullName']);
$staffid = $connect->real_escape_string($_REQUEST['staffID']);
$email = $connect->real_escape_string($_REQUEST['userEmail']);
$dept = $connect->real_escape_string($_REQUEST['deptsel']);
$reason = $connect->real_escape_string($_REQUEST['reason']);
$start = $connect->real_escape_string($_REQUEST['startTime']); //time will be display in 24hr format
$end = $connect->real_escape_string($_REQUEST['endTime']); //time will be display in 24hr format

$insert = "INSERT INTO `department_otlog`(`staff_name`, `employment_no`, `email`, `deptID`, `reason`, `start_time`, `end_time`) VALUES ('$staffname', '$staffid', '$email', '$dept', '$reason', '$start', '$end')";

if ($connect->query($insert) == true) {
	echo '<script type="text/javascript">
			alert("Your application has been recorded")
			location.replace("dashboard.php")
		</script>';
}

else{
	echo "ERROR DETECTED: cannot execute $insert . " . $connect->error;
}
?>