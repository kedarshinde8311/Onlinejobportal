<?php

include("connection.php");
$jobid = $_POST['id'];
$name  = $_POST['name'];
$email  = $_POST['email'];
$mobileno  = $_POST['mobileno'];
$qualification  = $_POST['qualification'];
$address  = $_POST['address'];




    $query = "INSERT INTO jobapplicants( jobid, name, email, mobileno, qualification, address)";
    $query .= " VALUES(".$jobid.",'" . $name . "','".$email."','".$mobileno."','".$qualification."'";
    $query .= ",'". $address."');";
    mysqli_query($conn, $query);   
    echo $query;


header("Location:jobs.php");

?>