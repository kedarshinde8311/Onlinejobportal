<?php
include("header.php");
include("connection.php");

$query = "SELECT *, (SELECT name FROM qualifications AS Q WHERE Q.id = J.qualification_id) AS qualificationname, (SELECT name FROM employers AS Q WHERE Q.id = J.employer_id) AS employername ";
$query .= "FROM jobs AS J";
$conn = mysqli_connect($server, $username, $password, $dbname);
$result = mysqli_query($conn, $query);
?>

<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
	<br />
<div class="container">
    <div class="comment-form" style="margin-top:10px">
        <div class="contact-form-area"> 
        <?php
            while($row = mysqli_fetch_assoc($result)) {
        ?>    
                <div style="border:solid 1px #d9d9d9; padding:20px; margin-bottom:10px;">
              <input type ="text" id = "id" name="id" hidden value="<?= $row['id'] ; ?>"  >

                <div class="col-lg-12 form-inline">
                    <div class="col-lg-4 form-inline">
                        <label class="font-weight-bold">Job Title:<?= $row['title']  ?></label>
                    </div>
                    <div class="col-lg-4 form-inline">
                        <label class="font-weight-bold">Interview Date: <?= $row['idate'];  ?></label>
                    </div>
                    <div class="col-lg-4 form-inline">
                            <label class="font-weight-bold">Interview Time: <?= $row['itime'] ; ?></label>
                        </div>   
                    </div>
                    <div class="col-lg-12 form-inline mt-2">
                        <div class="col-lg-4 form-inline">
                            <label class="font-weight-bold">Job Description: <?= $row['description'];  ?></label>
                        </div>
                        <div class="col-lg-4 form-inline">
                            <label class="font-weight-bold">Required Candidate:<?= $row['required_count'];  ?></label>
                        </div>
                        <div class="col-lg-3 form-inline">
                            <label class="font-weight-bold">Gender: <?= $row['gender'];  ?></label>
                        </div>
                    </div>
                    <div class="col-lg-12 form-inline mt-2">
                        <div class="col-lg-4 form-inline">
                            <label class="font-weight-bold">Qualification:<?= $row['qualificationname'];  ?></label>
                        </div>
                        <div class="col-lg-4 form-inline">
                            <label class="font-weight-bold">Percentage:  <?= $row['minperc'];  ?>%</label>
                        </div>
                        <div class="col-lg-4 form-inline">
                            <label class="font-weight-bold">Experience:<?= $row['minexp_year']."-Years" ; ?><?= $row['minexp_month']."-MOnth";  ?></label>
                        </div>   
                    </div>
                    
                    </div>         
            <?php } ?>      
        </div>
    </div>
</div>
            </div>

