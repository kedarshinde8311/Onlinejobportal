<?php 	
    include("header.php");  
 	include("connection.php");  
?>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	font-weight: bold;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #8fbc54;
	left: 0;
	right: 0;
	bottom: -10px;
}
.col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #7AA641;
}
.carousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
</style>
    
    <section class="hero-area hero-post-slides owl-carousel">
        <div class="single-hero-slide bg-img d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/1.jpg);">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <p data-animation="fadeInUp" data-delay="300ms"><span style="background-color:white;color:#C93030; padding:10px;">We assist you to get the Right Candidate for the Right Job.</span></p>
                            <a style="width:250px; margin-top:2px;"  href="" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Register as Candidate</a>
                            <a style="width:250px; margin-top:2px;" href="" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Post a Job</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="single-hero-slide bg-img d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content">
							<p data-animation="fadeInUp" data-delay="300ms"><span style="background-color:white;color:#C93030; padding:10px;">We assist you to get the Right Candidate for the Right Job.</span></p>
                            <a style="width:250px; margin-top:2px;"  href="" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Register as Candidate</a>
                            <a style="width:250px; margin-top:2px;" href="" class="btn crose-btn" data-animation="fadeInUp" data-delay="500ms">Post a Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <div class="why-choose-us bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="assets/img/core-img/why1.png" alt="">
                        <h4>RPO SERVICES</h4>
                        <p>We provide RPO Service to our clients to find the right person is for the right job.</p>
                    </div>
                </div>
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="assets/img/core-img/why2.png" alt="">
                        <h4>PLACEMENT SERVICES</h4>
                        <p>Capable to handle Top Management Recruitment in low TAT for end to end staffing solution.</p>
                    </div>
                </div>
                <!-- Single Why Choose Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="assets/img/core-img/why3.png" alt="">
                        <h4>HR CONSULTING SERVICES</h4>
                        <p>This service is particularly useful for organization who are looking to implement best practices.</p>
                    </div>
                </div>
                 <!-- Single Why Choose Area -->
                 <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="assets/img/core-img/why1.png" alt="">
                        <h4>CAMPUS PLACEMENT</h4>
                        <p>Arrangement and conduct campus interview for recruitment of MCVC/Diploma/Degree Candidate.</p>
                    </div>
                </div>
                 <!-- Single Why Choose Area -->
                 <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="assets/img/core-img/why1.png" alt="">
                        <h4>APPRENTICE PROGRAM</h4>
                        <p>Allocation for engagement of Apprentices from Board of Apprentices Training.</p>
                    </div>
                </div>
                 <!-- Single Why Choose Area -->
                 <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-why-choose-us mb-100">
                        <img src="assets/img/core-img/why1.png" alt="">
                        <h4>CANDIDATES UNDER EPP</h4>
                        <p>Collect eligible candidates from employment exchange and arrange interviews accordingly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Why Choose Us Area End ##### -->

     
    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area section-padding-100 bg-img bg-overlay" style="background-image: url(assets/img/bg-img/2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <h6>A Place For You</h6>
                        <h2>We are a reputed HR company having expertise in the field of Placement Services</h2>
                        <a href="" class="btn crose-btn btn-2">Become A Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    
	
    <!-- ##### Testimonials Area End ##### -->

    




<?php 	include("footer.php");  ?>







