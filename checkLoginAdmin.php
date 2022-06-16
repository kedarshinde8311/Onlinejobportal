<?php

$username1 = $_POST["username"];
$password1 = $_POST["password"];

if($username1 == "admin" && $password1 == "admin" )
{
    header("Location:dashboard.php");
    setcookie("usertype","admin");
}
else{
    header("Location:admin.php");
}

?>