<?php

// 	if (isset($_POST['login-submit'])) {
// 	}

// 	else {
// 	header("Location: 404.php?");
// 	exit();
// }

	session_start();
	$connect = mysqli_connect("localhost","root","","ot_logbook"); 

	if (mysqli_connect_errno())
	{
		echo "Oops! There might be a problem with the connection." . mysqli_connect_error();
	}
$query = "SELECT * FROM department_otlog ORDER BY start_time ASC";
	$resultTable = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>//display//</title>

	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no, width=device-width" />

<!--css for content-->
	<link rel="stylesheet" type="text/css" href="style/display.css"> 
	<!-- jquery for datatables -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- css for datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<!-- js script for datatables -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
	<div class="cover"></div>

		<div class="row">
            <nav class="navbar fixed-top navbar-dark">
                <a class="navbar-brand" href="dashboard.php">
                    <span class="material-icons" style="font-size: 40px;">
                        arrow_back
                    </span>
                </a>
            </nav>
        </div>		

	<div class="containerDisplay">		
		<h1>//display module//</h1>
			<table id="tableOT" width="auto" style="border-collapse: collapse;">
				<thead>
					<tr>
						<th>Staff ID</th>
						<th>Name</th>
						<th>Department</th>
						<th>Reason</th>
						<th>Total Hours</th>
						<th>From</th>
						<th>To</th>
					</tr>
				</thead>

				<tbody id="displayTable">
					<?php while ($row = mysqli_fetch_array($resultTable))
					{
						echo '
						<tr id='.$row["Id"].'>
							<td id="staffID" class="staffID">'.$row["employment_no"].'</td>
							<td id="staffName" class="staffName">'.$row["staff_name"].'</td>
							<td id="department" class="department">'.$row["deptID"].'</td>
							<td id="reason" class="reason">'.$row["reason"].'</td>
							<td id="totalhrs" class="totalhrs">'.$row["total_hrs"].'</td>
							<td id="start" class="start">'.$row["start_time"].'</td>
							<td id="end" class="end">'.$row["end_time"].'</td>
						</tr>
						';	
					}?>
				</tbody>
			</table>
	</div>

</body>
</html>

<script>
	$(document).ready(function(){

		var table = $('#tableOT').DataTable({
			// orderCellsTop: true,
			// fixedHeader: true,
			scrollX: true,
			scrollY: "300px",
			scrollCollapse: true,

		});
	});
</script>	