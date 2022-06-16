<?php
include('connection.php');
$id = $_POST["id"];
$name = $_POST["name"];
if($id==0)
{
   $query = "INSERT INTO qualifications (name) VALUES('". $name. "');";
   mysqli_query($conn, $query);
}
else
{
    $query = "UPDATE qualifications SET name = '". $name ."' WHERE id = ".$id;
    mysqli_query($conn, $query);

}
header("Location:qualifications.php")

?>