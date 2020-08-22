<?php
	$connect = mysqli_connect("localhost","root","","ot_logbook");

	if (mysqli_connect_errno())
	{
		echo "Oops! There might be a problem with the connection." . mysqli_connect_error();
	}

	$query = "SELECT * FROM register_user WHERE employment_no = '2641' ";
	$rs = mysqli_query ($connect, $query);	

	$fetchRow = mysqli_fetch_assoc($rs);
?>

<!DOCTYPE html>
<html>
<head>	
<title> Retrieve data from database and display in php form</title>
 
<style>
	body{
		font-family:verdana;
	}
	.container{width:500px;margin: 0 auto;}
	h3{line-height:20px;font-size:20px;}
	input{display:block;width:350px;height:20px;margin:10px 0;}
	textarea{display:block;width:350px;margin:10px 0;}
	button{background:green; border:1px solid green;width:70px;height:30px;color:#ffffff}
</style>
 
 
</head>	
<body>
 
	
	
	<div class="container">
	<h3>Edit Post</h3>
	<form action="" method="post">
	<input type="text" name="staff_id" value="<?php echo $fetchRow['employment_no']?>" required>
	<textarea cols="40" rows="3" name="id_staff" required><?php echo $fetchRow['employment_no']?></textarea>
	<button type="submit" name="submit">Submit</button>
	</form>
	</div> 
 
 
</body>
</html>