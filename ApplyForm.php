<?php

	include ("db.php");

	function differenceInHours($startTime,$endTime){
		$starttimestamp = strtotime($startTime);
		$endtimestamp = strtotime($endTime);
		$difference = abs($endtimestamp - $starttimestamp)/3600;
		echo $difference;
	}
	if(!empty($_POST["submit"])) {
		$hours_difference = differenceInHours($_POST["startTime"],$_POST["endTime"]);	
		$message = "The Difference is " . $hours_difference . " hours";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>OT Application Form</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="style/style.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body id="bodyApply">
	<div class="applyContent">

		<div class="containerApply">

			<!-- <div class="containerApplyHeader">
				<h1>//insertform//</h1>
			</div> -->
			<h1>//insertform//</h1>
			<form class="applicationForm" action="script/apply.php" method="POST" >

				<div class="form-group row">
					<label for="fullNameInput" class="col-sm-3 col-form-label">Full Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="fullName" id="name" placeholder="John Doe" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="staffIdInput" class="col-sm-3 col-form-label">Staff ID</label>
					<div class="col-sm-9">
						<input name="staffID" class="form-control" id="staffID" placeholder="EN0000" style="text-transform:uppercase" required>
					</div>
				</div>


				<div class="form-group row">
					<label for="forDeptSelect" class="col-sm-3 col-form-label">Department</label>
					<div class="col-sm-9">
						<select class="form-control; custom-select" id="department" name="deptsel" required>

							<option selected disabled>Select your department</option>

							<?php 
								while($data = mysqli_fetch_array($resultDropdown))
						        {
						            echo "<option value='". $data['deptName'] ."'>" .$data['deptName'] ."</option>";
						            // list of department dari table 'department'
						        }	
							?>

						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="emailUserInput" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="email" name="userEmail" placeholder="johndoe@email.com" style="text-transform:lowercase;" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="startDateTime" class="col-sm-3 col-form-label">Start</label>
					<div class="col-sm-9">
						<input type="datetime-local" class="form-control" id="start" name="startTime" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="endDateTime" class="col-sm-3 col-form-label">End</label>
					<div class="col-sm-9">
						<input type="datetime-local" class="form-control" id="end" name="endTime" required>
					</div>
				</div>

				<!-- <div class="form-group row">
					<label for="forStartTime" class="col-sm-3 col-form-label">Start Time</label>
					<div class="col-sm-9">
				        <div class="input-group date" id="startDateTime" data-target-input="nearest">
					        <input type="text" class="form-control datetimepicker-input" data-target="#startDateTime"/>
					        <div class="input-group-append" data-target="#startDateTime" data-toggle="datetimepicker">
					                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
					        </div>
					    </div>
					</div>
			    </div>

			    <div class="form-group row">
			    	<label for="forEndTime" class="col-sm-3 col-form-label">End Time</label>
			    	<div class="col-sm-9">
			           	<div class="input-group date" id="endDateTime" data-target-input="nearest">
			                <input type="text" class="form-control datetimepicker-input" data-target="#endDateTime"/>
			                <div class="input-group-append" data-target="#endDateTime" data-toggle="datetimepicker">
			                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
			                </div>
			            </div>
			        </div>
			    </div> -->

				<!-- <div class="form-group row">
					<label for="forStartTime" class="col-sm-2 col-form-label">Start Time</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="startTime" name="StartTime" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="forEndTime" class="col-sm-2 col-form-label">End Time</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="endTime" name="EndTime" required>
					</div>
				</div>
	 -->
				<div class="form-group row">
					<label for="forOTReason" class="col-sm-3 col-form-label">Reason</label>
					<div class="col-sm-9">
						<textarea class="form-control" id="reason" value="reason" name="reason" placeholder="Reason for applying OT" rows="3" required></textarea>
					</div>
				</div>
				
				<button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Sumbit</button>
			</form>
		</div>

	<!-- <script>
		$(function () {
	        $('#startDateTime').datetimepicker({
	        });
	       	$('#endDateTime').datetimepicker({
	            useCurrent: false
	        });
			$("#startDateTime").on("change.datetimepicker", function (e) {
				$('#endDateTime').datetimepicker('minDate', e.date);
			});
			$("#endDateTime").on("change.datetimepicker", function (e) {
			    $('#startDateTime').datetimepicker('maxDate', e.date);
			});
		});
	</script> -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
</body>
</html>

