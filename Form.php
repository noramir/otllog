<?php

    include 'db.php';
    include 'header.php';
    include 'footer.php';
    // function differenceInHours($startTime,$endTime){
    //     $starttimestamp = strtotime($startTime);
    //     $endtimestamp = strtotime($endTime);
    //     $difference = abs($endtimestamp - $starttimestamp)/3600;
    //     echo $difference;
    // }
    
    // if(!empty($_POST["submit"])) {
    //     $hours_difference = differenceInHours($_POST["startTime"],$_POST["endTime"]);   
    //     $message = "The Difference is " . $hours_difference . " hours";
    // }
    $connect = mysqli_connect("localhost","root","","ot_logbook");

    $query = "SELECT * FROM register_user WHERE employment_no LIKE '2641'"; 

    $result = mysqli_query($connect,$query);

    $fetch = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>   
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style/login-style.css">

        <meta charset="utf-8"/>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min. js" />

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="main">
        <div class="container-login">
            <div class="row">

                <div class="banner col-3">
                    <h3>Application Form</h3>
                </div>

                <div class="form col-9">
                    <form class="apply-form" action="#" method="post">

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullName" class="form-control" value="<?php echo $fetch['first_name'], $fetch['middle_name'] .'&nbsp;'. $fetch['last_name']?>" required readonly>
                        </div>    

                        <div class="form-row">
                            <div class="form-group col-5">
                                <label>Employment No.</label>
                                <input type="text" name="staffID" class="form-control" value="<?php echo $fetch['employment_no']?>" style="text-transform:uppercase" required readonly>
                            </div>

                            <div class="form-group col-7">
                                <label>Department</label>
                                <select class="form-control; custom-select" id="department" name="deptsel" required>

                                <option selected disabled>Select your department</option>

                                <?php 
                                    while($data = mysqli_fetch_array($resultDropdown))
                                    {
                                        echo "<option value='". $data['id_dep'] ."' required>" .$data['dep'] ."</option>";
                                        // list of department dari table 'department'
                                    }   
                                ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $fetch['email'] ?>"placeholder="johndoe@email.com" style="text-transform:lowercase;" required readonly>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Start</label>
                                <input type="datetime-local" class="form-control" id="start" name="startTime" required>
                            </div>

                            <div class="form-group col-6">
                                <label>End</label>
                                <input type="datetime-local" class="form-control" id="end" name="endTime" required>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label>Reason</label>
                            <textarea class="form-control" id="reason" value="reason" name="reason" placeholder="Reason for applying OT" rows="2" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-block">Sumbit</button> 

                    </form>
                </div>
            </div>
        </div>
    </div>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>