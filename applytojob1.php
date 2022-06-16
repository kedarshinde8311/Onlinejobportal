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

        
    
?>


<div class="container">
    <!-- Leave A Comment -->
     <div class="leave-comment-area mt-50 clearfix">
        <div class="comment-form">
            <!-- Contact Form Area -->
            <div class="contact-form-area">
                <form action="addCandidate.php" method="post" enctype="multipart/form-data" class="contact-form"> 
                <div class="col-md-12 form-inline">
                    <input id="id" name="id" value="<?=$id;?>" hidden>
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
                        <div class="col-md-4 form-inline" style="height:30px">
                       </div>
                    
                    <div class="col-lg-12 form-inline mt-2">
                        <div class="col-lg-6 form-inline">
                            <input type="text" name="name"  class="form-control" id="contact-name" placeholder="Name" required>
                        </div>
                        <div class="col-lg-6 form-inline">
                            <input type="text" name="mobileno"  class="form-control" id="mobileno" min="1000000000" max="9999999999" placeholder="Mobile No." required>
                        </div>     
                    </div>
                    <div class="col-lg-12 form-inline mt-2">
                        <div class="col-lg-6 form-inline">
                            <input type="email" name="email"  class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-lg-6 form-inline">
                            <input type="text" name="address"  class="form-control" id="address" placeholder="Address" required>
                        </div>     
                    </div>
                    <div class="col-lg-12 form-inline mt-2">
                        <div class="col-lg-6 form-inline">
                            <input type="text" name="qualification"  class="form-control" id="qualification" placeholder="Qualification" required>
                        </div>
                    </div>    
                    <div class="col-lg-12 form-inline mt-2" style="margin-bottom:50px">                        
                        <button type="submit" style="margin-left:15px" class="btn crose-btn ">Submit</button><br><br><br>
                    <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=http://careerjunction.org.in/jobs/applytojob/<?php echo $result->id ?>" target="_blank"><button type="button" style="margin-left:15px" class="btn btn-primary ">Share on Facebook</button></a><br><br><br>
                    <a href="https://api.whatsapp.com/send?text=http://careerjunction.org.in/jobs/applytojob/<?php echo $result->id ?>" target="_blank"><button type="button" style="margin-left:15px" class="btn btn-primary ">Share on Whatsapp</button></a> -->
                         <!-- <a style="margin:10px;font-size:30px;background-color:blue;color:white;" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" title="Share on Facebook" class="btn btn-sm btn-icon btn-round btn-o btn-facebook">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a style="font-size:30px;background-color:blue;color:white;" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" title="Share on Whatsapp" class="btn btn-sm btn-icon btn-round btn-o btn-facebook">
                            <span class="fa fa-whatsapp"></span>
                        </a> -->
                    </div>
                </div>            
            </form> 
            </div>
             </div> 
        </div>
    </div>
</div>
