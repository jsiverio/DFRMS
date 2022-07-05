<?php
    include 'db_connnection.php';

    $dr=$_POST['drNumber'];
    $sw=$_POST['swNumber'];
    $date=$_POST['date'];
    $ca=$_POST['caseAgent'];
    $address=$_POST['address'];
    $city=$_POST['city'];

    $conn = OpenCon();
    $sql = "INSERT INTO case_info (id,dr,sw,sw_schedule,sw_date,case_agent,sw_address,sw_location)
    VALUES (1,'$dr','$sw',1,'$date','$ca','$address','$city')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('Location: ./newRequestForm.php');
    }







?>