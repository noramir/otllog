<?php 
    require 'footer.php';
    require 'includes/db.inc.php';

    $connect = mysqli_connect("localhost","root","","ot_logbook");
    $query = mysqli_query($connect, "SELECT
                -- login.user_en AS id,
                register_user.first_name AS firstname,
                register_user.middle_name AS middle,
                register_user.last_name AS lastname,
                register_user.employment_no AS emp,
                register_user.department AS dep_id,
                department_hr.dep AS dep,
                register_user.email AS email
            FROM 
                register_user,
                -- login,
                department_hr
            WHERE
                register_user.department = department_hr.id_dep"); 

    while($info = mysqli_fetch_array($query))
        {
            echo "<option required>" .$info['firstname'] ."</option>";
        }  
?>