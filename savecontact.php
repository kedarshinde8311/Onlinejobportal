<?php
    include("connection.php");
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    
        $query = "INSERT INTO contacts(name,contact,email,subject,message)";
        $query .= " VALUES('" . $name . "','".$contact."','".$email."','".$subject."','".$message."')";
        mysqli_query($conn, $query);
        $query = "SELECT id FROM contacts WHERE name = '" . $name . "'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        } 
        // $query = "SELECT id FROM admins WHERE name = '" . $name . "'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        }   
    
    
    header("Location:home.php");




?>