<?php
    include("connection.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $qualificationid = $_POST['qualificationid'];


    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $id = 0;

    


  //  name	address	contact	email	password	qualificationid	gender	dob	resume
    
    if($id == 0){
        $query = "INSERT INTO jobseekers(name,address,contact,email,password,qualificationid,gender,dob)";
        $query .= " VALUES('" . $name . "','".$address."','".$contact."','". $email ."','". $password."',";
        $query .= "'" . $qualificationid. "','". $gender ."','". $dob. "')";
        mysqli_query($conn, $query);
        $query = "SELECT id FROM jobseekers WHERE name = '" . $name . "'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        } 
        //  $query = "SELECT MAX(id) FROM jobseekers";
        // $result = mysqli_query($conn, $query);
        // while($row = mysqli_fetch_assoc($result)) {
        //     $id = $row['id'];
        // }   
    }
    else{
        $query = "UPDATE jobseekers SET name = '" . $name . "',address='". $address ."',contact='".$contact;
        $query .= "', email = '" . $email . "',password='". $password ."',qualificationid='".$qualificationid;
        $query .= "', gender = '" . $gender . "',dob='". $dob;
        $query .="' WHERE id = " . $id;

    

        mysqli_query($conn, $query);
    }
   
    
    if (isset($_FILES['resume']) && is_uploaded_file($_FILES['resume']['tmp_name'])) {
        $resume = generateRandomString(6);
            //    = $_FILES['resume']
        $target_file = "jobresume/" . $resume . ".pdf";
        move_uploaded_file($_FILES['resume']['tmp_name'], $target_file);
        $query = "UPDATE jobseekers SET resume = '" . $resume . "' WHERE id = " . $id;
       
        mysqli_query($conn, $query);
        }

        setcookie("id", $id);
        setcookie("usertype","jobseekers");
        header("Location:home.php");


?>