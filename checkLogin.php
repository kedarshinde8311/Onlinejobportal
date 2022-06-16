<?php

  $username1 = $_POST["username"];
  $password1 = $_POST["password"];
  include("connection.php");

    $id = 0;

        $query = "SELECT * FROM jobseekers WHERE email = '". $username1."' AND password = '". $password1."'";
        $conn = mysqli_connect($server, $username, $password, $dbname);
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            setcookie("id", $id);
            setcookie("usertype","jobseekers");
            header("location:jobseekers.php?id=".$id);
        } 

        $query = "SELECT * FROM employers WHERE email = '". $username1."' AND password = '". $password1."'";
        $conn = mysqli_connect($server, $username, $password, $dbname);
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            setcookie("id", $id);
            setcookie("usertype","employer");
            header("location:employer.php?id=".$id);
        }

        if($id==0)
        {
            header("location:login.php");
        }


  
    
        

?>