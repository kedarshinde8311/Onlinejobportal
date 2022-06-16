<?php

    include("connection.php");
    $id=$_POST['id'] ;
    $name = $_POST['name'];
    $address  = $_POST['address'];
    $hrname = $_POST['hrname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $website = $_POST['website'];
    if($id==0)
    {
        $query = "INSERT INTO employers (name,address,hrname,contact,email,website,password)";
        $query .= " VALUES ('". $name . "','" . $address ."','" . $hrname. "','". $contact ."',";
        $query .= "'" . $email. "','". $website ."','" .$password. "');";
        mysqli_query($conn, $query);
        $query = "SELECT id FROM employers WHERE name = '" . $hrname . "'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        } 
    }
    else{
        $query = "UPDATE employers SET name ='" . $name ."',address ='". $address ."',hrname = '".$hrname ."',";
        $query .= "contact= '" . $contact . "',email = '". $email ."',password ='". $password ."', website ='". $website. " ' ";
        $query .=" WHERE id = ".$id;
        mysqli_query($conn,$query);  
    }

    setcookie("id",$id);
    setcookie("usertype","employer");
    header("Location:home.php");


?>