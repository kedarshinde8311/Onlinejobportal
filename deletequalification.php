<?php
include('connection.php');
$id = $_GET["id"];
$query = "DELETE FROM qualifications WHERE id= ".$id;
mysqli_query($conn, $query);
header("Location:qualifications.php");
?>