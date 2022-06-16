<?php
        include("connection.php");
        $jid = $_GET["id"];
        $candidateid = $_COOKIE["id"];

        $query = "INSERT INTO jobcandidates(jid,candidateid)";
        $query.= "VALUES(". $jid. "," . $candidateid . ");";
        mysqli_query($conn, $query);
        header("Location:jobs.php");
?>