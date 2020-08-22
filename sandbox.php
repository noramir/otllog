<?php
	// $start = strtotime("2020-08-10 18:30:00")/3600;
	// $end = strtotime("2020-08-10 21:30:00")/3600;

	// $total = ($end - $start);

	// echo $total;
	// echo "<br>";
	// echo $start;
	// echo "<br>";
	// echo $end;

	$connect = mysqli_connect("localhost","root","","ot_logbook");

		if (mysqli_connect_errno()) {
			echo "Oops! There might be a problem with the connection.". mysqli_connect_error();
		}


	$date1 = "SELECT * FROM department_otlog";

	$query = mysqli_query($connect,$date1);

	while ($rows = mysqli_fetch_array($query)) {

		$startQuery = $rows['start_time'];
		$endQuery = $rows['end_time'];

		$hour1 = 0; $hour2 = 0;
		$datetimeObj1 = new DateTime($startQuery);
		$datetimeObj2 = new DateTime($endQuery);
		$interval = $datetimeObj1->diff($datetimeObj2);

		if($interval->format('%a') > 0){
		$hour1 = $interval->format('%a'/24);
		}
		if($interval->format('%h') > 0){
		$hour2 = $interval->format('%h, %i');
		}

		echo 'The total hour is '. ($hour1 + $hour2) . '.';
	}

	// $hour1 = 0; $hour2 = 0;
	// $date1 = "2020-08-13 18:30:00";
	// $date2 = "2020-08-13 21:30:00";
	// $datetimeObj1 = new DateTime($date1);
	// $datetimeObj2 = new DateTime($date2);
	// $interval = $datetimeObj1->diff($datetimeObj2);
	 
	// if($interval->format('%a') > 0){
	// $hour1 = $interval->format('%a')*24;
	// }
	// if($interval->format('%h') > 0){
	// $hour2 = $interval->format('%h');
	// }

	// echo "Total hours is " . ($hour1 + $hour2) . " hours.";
?>