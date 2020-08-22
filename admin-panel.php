<?php
	include 'header.php';
	include 'footer.php';

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
	<title>ADMIN</title>

	<link rel="stylesheet" type="text/css" href="style/admin-style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!-- google fonts -->

<!-- jquery for datatables -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- css for datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<!-- js script for datatables -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<!-- ajax google api for datatables -->
	<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js"></script>


</head>
<body>

<div class="main-div container-fluid">
	<div class="container container-fluid">
		<table class="table table-striped align-center" id="myTable" >
			<thead>
				<tr>
					<th scope="col">Staff Id</th>
					<th scope="col">Staff Name</th>
					<th scope="col">Department</th>
					<th scope="col">Start</th>
					<th scope="col">End</th>
					<th scope="col">Reason</th>
					<th scope="col" colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($resultTable))
				{
					echo '
					<tr id='.$row["Id"].'>
						<td id="staffID" class="staffID">'.$row["employment_no"].'</td>
						<td id="staffName" class="staffName">'.$row["staff_name"].'</td>
						<td id="department" class="department">'.$row["deptID"].'</td>						
						<td id="start" class="start">'.$row["start_time"].'</td>
						<td id="end" class="end">'.$row["end_time"].'</td>
						<td id="reason" class="reason">'.$row["reason"].'</td>
						<td id="accept"><button class="btn btn-success"><span class="material-icons">check</span></button></td>
						<td id="accept"><button class="btn btn-danger"><span class="material-icons">close</span></button></td>
					</tr> 
					';
				}?>
			</tbody>
		</table>
	</div>
</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<script>
	$(document).ready(function(){

		var table = $('#myTable').DataTable({
			// orderCellsTop: true,
			// fixedHeader: true,
			scrollX: true,
			scrollY: "300px",
			scrollCollapse: true,

		});
	});
</script>	