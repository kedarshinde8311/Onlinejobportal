<?php
include("header.php");
include("connection.php");
 $id= 0;
 $name = "";
 $address  = "";
 $hrname = "";
 $contact = "";
 $email = "";
 $password = "";
 $website = "";
 if(isset($_GET['id']))
 {
     $id = $_GET['id'];
     $query = "SELECT * FROM employers WHERE id = " .$id;
     $conn = mysqli_connect($server, $username, $password, $dbname);
     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $address = $row['address'];
            $hrname = $row['hrname'];
            $contact = $row['contact'];
            $email = $row['email'];
            $password = $row['password'];
            $website = $row['website'];
     }


 }
?>
<div class="container">
    
    <!-- Leave A Comment -->
    <div class="leave-comment-area mt-50 clearfix">
               <div class="comment-form">
                   <!-- Contact Form Area -->
                   <div class="contact-form-area">
                       <form action="saveemployer.php" method="post"  class="contact-form text-right"> 
                           <h1 class="pb-10 header-text text-center">Register as Employer</h1><br><br>
                           <div class="row">
                               <input id="id" name="id" value="<?php echo $id;?>" hidden />
                                <div class="col-lg-12 form-inline">
                                    <div class="col-lg-6">
                                      <input type="text"  name="name" class="form-control" value="<?php echo $name;?>" id="contact-name" placeholder="Company Name" required>
                                    </div>
                                    <div class="col-lg-6">
                                      <input type="text"  name="address" class="form-control" value="<?php echo $address;?>" id="contact-address" placeholder="Company Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-inline">
                                    <div class="col-lg-6">
                                      <input type="text" name="hrname" class="form-control" id="contact-hrname" value="<?php echo $hrname;?>" placeholder="Company Hr Name" required> 
                                    </div>
                                    <div class="col-lg-6">
                                      <input type="number" name="contact"  maxlength="10" class="form-control" id="contact-number" value="<?php echo $contact;?>" placeholder="Contact No"  min="1000000000" max="9999999999" required>
                                    </div>
                                </div>             
                                <div class="col-lg-12 form-inline">
                                    <div class="col-lg-6">
                                       <input type="email" name="email" class="form-control" id="contact-number" value="<?php echo $email;?>" placeholder="Company E-mail" required> 
                                    </div>
                                    <div class="col-lg-6">
                                    <input type="text" name="website"  class="form-control" id="contact-number" value="<?php echo $website;?>" placeholder="Company Website" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-inline">
                                    <div class="col-lg-6">
                                        <input type="password"  name="password" id="txtPassword" value="<?php echo $password;?>"  class="form-control" placeholder="Your Password" required>
                                   </div>
                                    <div class="col-lg-6">
                                         <input type="password" name="cpassword" id="txtConfirmPassword" value="<?php echo $password;?>"  class="form-control" placeholder="Your Confirm Password" required>
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

<?php
include("footer.php");
?>