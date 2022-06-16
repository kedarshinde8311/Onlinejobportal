<?php

include('header.php');
include('connection.php');
    $id = $_GET['id'];
    $query = "SELECT J.*,Q.name AS qualificationname FROM jobs AS J,qualifications AS Q WHERE(Q.id=J.qualification_id) AND J.id=" . $id;
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        $title = $row["title"];
        $description =  $row["description"];
        $idate =  $row["idate"];
        $itime =  $row["itime"];
        $required_count = $row["required_count"];
        $gender =  $row["gender"];
        $qualification_id =  $row["qualification_id"];
        $minperc =  $row["minperc"];
        $qualificationname = $row["qualificationname"];
        
        $minexp_year =  $row["minexp_year"];
        $minexp_month =  $row["minexp_month"];   
    }

        $query = "SELECT JS.email, JS.address, (SELECT name FROM qualifications Q WHERE Q.id = JS.qualificationid) AS qualification, ";
		$query .= "JS.gender, JS.dob, JS.contact, JS.name ,JS.resume ";
		$query .= "FROM jobcandidates AS JC JOIN jobseekers AS JS ON JC.candidateid = JS.id ";
		$query .= "AND JC.jid = " .$id . " ORDER BY name";
        $result = mysqli_query($conn, $query);
    
?>


<div class="container">
    <!-- Leave A Comment -->
     <div class="leave-comment-area mt-50 clearfix">
        <div class="comment-form">
            <!-- Contact Form Area -->
            <div class="contact-form-area">
                <form action="" method="post" enctype="multipart/form-data" class="contact-form"> 
                <div class="col-md-12 form-inline">
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Job Title:<?php echo $title;?></label>
                        </div>
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Interview Date: <?php echo $idate;?></label>
                       </div>
                       <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Interview Time: <?php echo $itime;?></label>
                        </div>   
                    </div>
                    <div class="col-md-12 form-inline mt-2">
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Job Description: <?php echo $description;?></label>
                        </div>
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Required Candidate:<?php echo $required_count;?></label>
                        </div>
                        <div class="col-md-3 form-inline">
                            <label class="font-weight-bold">Gender: <?php echo $gender;?></label>
                        </div>
                    </div>
                     <div class="col-md-12 form-inline mt-2">
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Qualification: <?php echo $qualificationname;?></label>
                        </div>
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Percentage: <?php echo $minperc;?> %</label>
                        </div>
                        <div class="col-md-4 form-inline">
                            <label class="font-weight-bold">Experience: <?php echo $minexp_year,'-Years  ',$minexp_month,'-Months';?></label>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12 mt-5">
                    
                        <table class="table table-striped text-left">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th> Candidate Name</th>
                                    <th> Candidate Email</th>
                                    <th> Contact No</th>
                                    <th> Address</th>
                                    <th> Qualification</th>
                                    <th> Gender</th>
                                    <th> Dob</th>
                                    <th>Resume</th>
                                </tr>
                            </thead>
                            <tbody> 
                            <?php
                            $count = 1;
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                         <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email'];  ?></td>
                            <td><?php echo $row['contact'];  ?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['qualification']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['dob'];?></td>
                            <td><a href= "jobresume/<?=$row['resume'];?>.pdf" target = "blank">View Resume</a>   </td>
                           
                         </tr>
                       <?php
                        $count++; 

                        }
                        ?>
                        </tbody>  
                    </table>
                </form>
            </div>
        </div>
    </div><button class="btn btn-danger pull-right mt-5" onClick="window.print()">JobPrint</button>
</div>
