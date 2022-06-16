<?php 	
    include("header.php");  
 	include("connection.php");  
     $query = "SELECT * FROM qualifications";
     $conn = mysqli_connect($server, $username, $password, $dbname);
     $qualifications = mysqli_query($conn, $query);

     $id = 0;
    $name = "";
    $address="";
    $contact="";
    $email="";
    $password="";
    $qualificationid="";
    $gender="";
    $dob="";   

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM jobseekers WHERE id = " . $id;
        $conn = mysqli_connect($server, $username, $password, $dbname);
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $address = $row['address'];
            $contact = $row['contact'];
            $email = $row['email'];
            $password = $row['password'];
            $qualificationid = $row['qualificationid'];
            $gender = $row['gender'];
            $dob = $row['dob'];
        }   

    }
?>
<div class="container">
     <div class="leave-comment-area mt-50 clearfix">
		<div class="comment-form">
			<!-- Contact Form Area -->
			<div class="contact-form-area">
				<form action="savejobseeker.php" method="post" enctype="multipart/form-data" class="contact-form text-right"> 
					<h1 class="pb-10 header-text text-center">Register as Candidate</h1><br><br>
						<div class="row">
							<div class="col-lg-12 text-left">
					
						</div>
                        <input type="text" id="id" name="id" value="<?php echo $id?>" hidden />
						<div class="col-lg-12 form-inline">
								<div class="col-lg-6">
									<input type="text" name="name" value="<?php echo $name;  ?>" class="form-control" id="contact-name" placeholder="Your Name" required>
								</div>
								<div class="col-lg-6">
									<input type="email" name="email" value="<?php echo $email;  ?>"    class="form-control" id="contact-email" placeholder="Your Email" required>
								</div>
							</div>
							<div class="col-lg-12 form-inline">
								<div class="col-lg-6">
								<input type="text" name="address" value="<?php echo $address;  ?>"   class="form-control" id="contact-address" placeholder="Your Address" required>
								</div>
								<div class="col-lg-6">
									<div class="input-group mb-4">
									<div class="input-group-prepend">
										<label class="input-group-text">Resume Upload</label>
									</div>
									<div class="custom-file">
										&nbsp; 	&nbsp; 	&nbsp;
									<input type="file" id="resume" accept = "application/pdf" name="resume">

										<!-- <input required type="file" class="custom-file-input" accept="application/pdf" name="resume" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"> -->
										<!-- <label class="custom-file-label">Choose file</label> -->
									</div>
								</div>
								</div>
							</div>
							<div class="col-lg-12 form-inline">
								<div class="col-lg-6">
								<select name="qualificationid" class="form-control" required >
									<option value="">Your Qualification</option>
									<?php
										while($row = mysqli_fetch_assoc($qualifications)) {
										?>
									<option <?php if($qualificationid != ""){
                                        if($qualificationid==$row['id'])
                                        {
                                            echo "selected";
                                        }
                                    }  ?> value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
									<?php }  ?>
								</select>
								</div>
							<div class="col-lg-6">
								<input type="number" name="contact"  value="<?php echo $contact;?>"  class="form-control" id="contact-number" placeholder="Your Contact"  min="1000000000" max="9999999999" required>
							</div>
							</div>
							
							<div class="col-lg-12 form-inline">
								<div class="col-lg-6">
							<select name="gender" class="form-control" required>
								<option value="">Your Gender</option>
								<option <?php if($gender =="MALE") echo "selected"; ?>>MALE</option>
								<option <?php if($gender =="FEMALE") echo "selected"; ?>>FEMALE</option>
							</select>
								</div>
								<div class="col-lg-6">
								<input placeholder="Your Date Of Birth" name="dob" value="<?php echo $dob?>" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="contact-date" required>
								</div>
							</div>
						
							<div class="col-lg-12 form-inline">
								<div class="col-lg-6">
									<input type="password"  name="password" id="txtPassword" value="<?php echo $password?>" class="form-control" placeholder="Your Password" required>
								</div>
								<div class="col-lg-6">
								<input type="password" name="cpassword" id="txtConfirmPassword" value="<?php echo $password ?>"  class="form-control" placeholder="Your Confirm Password" required>
								</div>
							</div>
						
						<div class="col-12">
						<div class="col-lg-2 form-group mx-auto">
							<button type="submit" onclick="return Validate()" class="btn crose-btn mt-15">Submit</button>
						</div>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript">
	function Validate() {
		var password = document.getElementById("txtPassword").value;
		var confirmPassword = document.getElementById("txtConfirmPassword").value;
		if (password != confirmPassword) {
			alert("Passwords do not match.");
			return false;
		}
		return true;
	}
</script>


<?php 	include("footer.php");  ?>