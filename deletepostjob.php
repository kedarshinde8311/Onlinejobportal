<?php
include('connection.php');
$id = $_GET["id"];
$query = "DELETE FROM jobs WHERE id= ".$id;
mysqli_query($conn, $query);
header("Location:postjobs.php");
?>