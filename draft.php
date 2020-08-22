<?php
// See the password_hash() example to see where this came from.
// $hash = '63eefbd45d89e8c91f24b609f7539942';

// if (password_verify('amir',$hash)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }


// echo password_hash("amir", PASSWORD_DEFAULT);

// $hash = '$2y$10$E2s3poQomV/B0ad6/k/MHuC10xcHlj6vEiC6eHhrRDv5G8YxrOVBO';

// if (password_verify('amir', $hash)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }

// $connect = mysqli_connect("localhost","root","","ot_logbook"); 

// 	if (mysqli_connect_errno())
// 	{
// 		echo "Oops! There might be a problem with the connection." . mysqli_connect_error();
// 	}

// $check = "SELECT * FROM `login` WHERE `password` LIKE '$e6693a7ad75a19d762743ee88b0f0e68'";
// $str = '990924055569';

// if (md5($str) == 'e6693a7ad75a19d762743ee88b0f0e68')
// 	{
//     	echo "Password is correct!";
// 	}

// 	else
// 	{
// 		echo("Password is incorrect!");
// 	}
if(isset($_POST['Add'])){
	function differenceInHours($startdate,$enddate){
		$starttimestamp = $startdate;
		$endtimestamp = $enddate;
		$difference = ($endtimestamp - $starttimestamp)/3600;
		echo $startdate;
	}
	// if(!empty($_POST["submit"])) {
	// 	$hours_difference = differenceInHours($_POST["startdate"],$_POST["enddate"]);	
	// 	$message = "The Difference is " . $hours_difference . " hours";
	// }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SANDBOX</title>
	<meta charset="utf-8"/>
        <!-- <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no"/> -->
        <meta name="viewport" content="user-scalable=no, width=device-width" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<form id="applicationForm" method="POST"> 
<!-- 		<div>
			<label style="padding-top:20px;">Start Date</label><br/>
			<input type="text" name="startdate" class="demoInputBox">
		</div>
		
		<div>
			<label>End Date</label>
			<span id="userEmail-info" class="info"></span><br>
			<input type="text" name="enddate" class="demoInputBox">
		</div> -->

<!--                     <div class="form-group row">
                        <label for="startDateTime" class="col-sm-3 col-form-label">Start</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="start" name="startdate" required>
                        </div>
                    </div> -->

                    <label>Start</label>
                    <input type="datetime-local" id="startTime" name="startTime">


                    <label>End</label>
                    <input type="datetime-local" id="endTime" name="endTime">
		
		<div>
			<input type="submit" name="submit" value="Add" class="btnAction">
		</div>
	</form>
</body>
</html>