<?php
include('connection.php');
$id = $_POST['id'];
$employer_id = $_COOKIE["id"];
$title = $_POST['title'];
$description = $_POST['description'];
$idate = $_POST['idate'];
$itime = $_POST['itime'];
$required_count = $_POST['required_count'];
$gender = $_POST['gender'];
$qualification_id = $_POST['qualification_id'];
$minperc = $_POST['minperc'];
$minexp_year = $_POST['minexp_year'];
$minexp_month= $_POST['minexp_month'];

if($id==0)
{
    $query = "INSERT INTO jobs(employer_id,title,description,idate,itime,required_count,gender,qualification_id,minperc,minexp_year,minexp_month)";
    $query .="VALUES(". $employer_id . ",'". $title ."','". $description ."','". $idate . "','". $itime ."',". $required_count . ",'". $gender ."'";
    $query .= "," . $qualification_id . ",". $minperc .",". $minexp_year."," . $minexp_month.");";
    mysqli_query($conn, $query);
}

else{

    $query = "UPDATE jobs SET employer_id = " . $employer_id . " ,title = '".$title."',description='".$description."',idate = '" . $idate . "',";
    $query .= "itime = '" . $itime ."',gender= '" . $gender . "', required_count = ". $required_count . ",qualification_id = ". $qualification_id.",";
    $query .= "minperc=". $minperc. ",minexp_year =". $minexp_year ." ,minexp_month = ". $minexp_month;
    $query .= " WHERE id= ". $id;
    echo $query;
    mysqli_query($conn, $query);
}
 header("location:postjobs.php");




?>