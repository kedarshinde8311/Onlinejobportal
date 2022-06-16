<?php
include('connection.php');
include('header.php');

$query = "SELECT COUNT(id) AS count FROM qualifications";
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
        $qualificationscount = $row['count'];
     }

$query = "SELECT COUNT(id) AS count FROM jobseekers";
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
        $jobseekerscount = $row['count'];
     }

$query = "SELECT COUNT(id) AS count FROM jobs";
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
        $jobscount = $row['count'];
     }

$query = "SELECT COUNT(id) AS count FROM jobs";
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
        $jobscount = $row['count'];
     }

$query = "SELECT COUNT(id) AS count FROM employers";
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
        $employerscount = $row['count'];
     }

     
?>
<br>
<br>
<div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-md-6 col-lg-4 col-xlg-6">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                            <a href="qualifications.php">  <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                              <h6 class="text-white" >Qualifications -<?=$qualificationscount; ?></h6></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 col-xlg-6">
                        <div class="card card-hover">
                        <a href="adminJobseekers.php">  <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Jobseekers -<?=$jobseekerscount; ?>  </h6> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xlg-6">
                        <div class="card card-hover">
                        <a href="adminjobs.php">  <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Jobs -<?=$jobscount; ?>  </h6> </a>
                            </div>
                        </div>
                    </div>
                </div>

                
</div>


<br>

<div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-md-6 col-lg-4 col-xlg-6">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                            <a href="adminEmployers.php">  <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                              <h6 class="text-white" >Employers -<?=$employerscount; ?></h6></a>
                            </div>
                        </div>
    </div>
</div>

      