<?php 
include('header.php');
include('connection.php');
$employer_id = $_COOKIE["id"];
$query = "SELECT * FROM qualifications";
$conn = mysqli_connect($server, $username, $password, $dbname);
$qualifications = mysqli_query($conn, $query);
$id = 0;

$title = "";
$description = "";
$idate = "";
$itime = "";
$required_count ="";
$gender = "";
$qualification_id = "";
$minperc = "";
$minexp_year = "";
$minexp_month = "";

if(isset($_GET['id']))
{
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
        
        $minexp_year =  $row["minexp_year"];
        $minexp_month =  $row["minexp_month"];   
    }
}
?>



<div class="container">
    <!-- Leave A Comment -->
     <div class="leave-comment-area mt-50 clearfix">
                            <div class="comment-form">
                                <!-- Contact Form Area -->
                                <div class="contact-form-area">
                                    <form action="savepostjob.php" method="post"  class="contact-form text-right"> 
                                        <h4 class="header-text text-left">Jobs</h4><br><br>
                                        <div class="row">
                                            <div class="col-lg-12 form-inline">
                                            <input type="hidden"  name="id" value="<?=$id;?>">
                                                 <div class="col-lg-6">
                                                  <input type="text" name="title"  class="form-control" placeholder="Job Title" value="<?=$title;?>" required>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <input type="text" name="description" class="form-control" placeholder="Job Description" value="<?=$description;?>" required>
                                                  </div>
                                             </div>
                                             <div class="col-lg-12 form-inline">
                                                 <div class="col-lg-6">
                                                   <input placeholder="Interview Date" name="idate"  class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="contact-date" value="<?=$idate;?>" required>
                                                  </div>
                                                  <div class="col-lg-6">
                                                   <input placeholder="Interview Time" name="itime"  class="form-control" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" id="contact-date" value="<?=$itime;?>" required>
                                                   </div>
                                             </div>
                                             <div class="col-lg-12 form-inline">
                                                 <div class="col-lg-6">
                                                     <input type="text" name="required_count"  class="form-control" placeholder="Required Candidate Count" value="<?=$required_count;?>" required>
                                                  </div>
                                                  <div class="col-lg-6">
                                                  <select name="gender" class="form-control" required>
                                                        <option <?php if($gender =="ANY") echo "selected"; ?>>ANY</option>
								                        <option <?php if($gender =="MALE") echo "selected"; ?>>MALE</option>
								                        <option <?php if($gender =="FEMALE") echo "selected"; ?>>FEMALE</option>
							                    </select>
                                                  </div>
                                            </div>
                                             <div class="col-lg-12 form-inline">
                                                 <div class="col-lg-6">
                                                 <select name="qualification_id" class="form-control" required >
									             <option value="">Your Qualification</option>
									            <?php
									              	while($row = mysqli_fetch_assoc($qualifications)) {
										      ?>
                                              <option <?php if($qualification_id!=null){
                                                  if($qualification_id==$row['id'])
                                                  {
                                                      echo"selected";
                                                  }
                                              }?> value="<?=$row['id'];?>"><?=$row['name'];?></option>
									
									<?php }  ?>
								</select>
                                                     </div>
                                                  <div class="col-lg-6">
                                                      <input type="text" name="minperc"   class="form-control" placeholder="Percentage" value="<?=$minperc?>" required>
                                                  </div>
                                             </div>
                                             <div class="col-lg-12 form-inline">
                                                 <div class="col-lg-6">
                                                     <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text">Min Experience (y/m)</label>
                                                        </div>
                                                       <input type="text" name="minexp_year"  class="custom-select" placeholder="Years" value="<?=$minexp_year?>" required>
                                                       <input type="text" name="minexp_month"  class="custom-select" placeholder="Months" value="<?=$minexp_month?>" required>
                                                       
                                                    </div>
                                                  </div>
                                                 
                                             </div>
                                            <div class="col-12">
                                            <div class="col-lg-2 form-group mx-auto">
                                                <button type="submit"  class="btn crose-btn mt-15">Submit</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    