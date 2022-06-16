<?php 	
    include("header.php");  
 	include("connection.php");  
?>

<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    
    <div class="contact-form section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Get In Touch With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-area">
                        <form action="savecontact.php" method="post">
                            <div class="row">
								<div class="col-lg-12">
									<?php
										// if($this->session->flashdata('success_msg')){
										// 	echo '<div class="alert alert-success">' . $this->session->flashdata('success_msg') . '</div>';
										// }
										// if($this->session->flashdata('error_msg')){
										// 	echo '<div class="alert alert-danger">' . $this->session->flashdata('error_msg') . '</div>';
										// }
									?>
								</div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-name">Full Name :</label>
                                        <input type="text" name="name" class="form-control" id="contact-name" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-email">Email :</label>
                                        <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-number">Phone :</label>
                                        <input type="number" name="contact" class="form-control" id="contact-number" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="contact-number">Subject :</label>
                                        <input type="text" name="subject" class="form-control" id="contact-number" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="chk" id="chk" placeholder="Enter Captcha"
                                                    class="form-control simple">
                                                <span id="error" class="color"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-10">
                                                <input type="text" class="form-control captcha" value="1278" id="ran" readonly="readonly" class="captcha" >
                                                </div>
                                                <div class="col-md-2">
                                                <a class="pull-left" onclick="captch()"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                        </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Message :</label>
                                        <textarea class="form-control" name="message" id="message"  row="5" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn crose-btn mt-15" onclick="return validation();">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- ##### Contact Form Area End ##### -->
    
    
    <style>
    .captcha {
    background-image: url(https://igaptechnologies.com/assets/captchabg.png);
    font-size: 20px;
    border: 1px solid;
}
</style>
<script>
     function captch() {
        var x = document.getElementById("ran");
        x.value = Math.floor((Math.random() * 10000) + 1);
    }
    
    function validation() {
    if (document.getElementById("chk").value == "") {
        document.getElementById("error").innerHTML = "Enter captcha!";
        document.getElementById("chk").focus();
        return false;
    }


    if (document.getElementById("ran").value != document.getElementById("chk").value) {
        document.getElementById("error").innerHTML = "Captcha not matched!";
        document.getElementById("chk").focus();
        return false;
    }

    return true;
}
captch();
    </script>








<?php 	include("footer.php");  ?>