<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="assets/icon.png" type="image/x-icon" />
    <title>On Line Job Portal</title>
    <link rel="stylesheet" href="assets/style.css" />
	<meta name="author" content="Career Junction" />
    
	<meta name="image" content="assets/img/core-img/logo-white.png">
	<meta property="keywords" content="Jobs in Vijayapur, Jobs in Banglore, Jobs in Karntaka, Jobs in India">
	<meta property="og:image" content="http://careerjunction.org.in/assets/img/fblogo.png">
	<meta property="og:type" content="Job Placement Consultancy, Vijayapur, Karnataka" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:locale:alternate" content="fr_FR" />
	<meta property="og:locale:alternate" content="es_ES" />
	<meta name='robots' content='index,follow'/>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115011095-2"></script>
	<script>
// 		window.dataLayer = window.dataLayer || [];
// 		function gtag(){dataLayer.push(arguments);}
// 		gtag('js', new Date());
// 		gtag('config', 'UA-115011095-2');
// 	</script>
         <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120289275-10"></script>
<script>
//   window.dataLayer = window.dataLayer || [];
//   function gtag(){dataLayer.push(arguments);}
//   gtag('js', new Date());

//   gtag('config', 'UA-120289275-10');
</script>

</head>
<body>
    <header class="header-area">
        <div class="top-header" style="background-color: #183133;">
           
            </div>
        </div>
        <!-- ***** Top Header Area ***** -->

        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="#" class="nav-brand"><img src="assets/img/core-img/logo-white.png" alt="" style="height:48px;"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <?php

                                              if(!isset($_COOKIE['usertype']))
                                                     {
                                                            echo  '<li><a href="home.php">Home</a></li>';
                                                            echo  '<li><a href="about.php">About</a></li>';
                                                            echo  '<li><a href="contact.php">Contact</a></li>';
                                                            echo  '<li><a href="jobseekers.php">Jobseeker</a></li>';
                                                            echo  '<li><a href="employer.php">Employer</a></li>';
                                                            echo  '<li><a href="login.php">Login</a></li>';
                                                     }
                                                                                                        
                                            if(isset($_COOKIE['usertype']))
                                            {
                                                if($_COOKIE['usertype'] == "admin")
                                                {
                                                    echo  '<li><a href="dashboard.php">Dashoard</a></li>';
                                                    echo  '<li><a href="qualifications.php">Qualifications</a></li>';
                                                    
                                                    echo  '<li><a href="adminJobseekers.php">Jobseekers</a></li>';
                                                    echo  '<li><a href="adminjobs.php">Jobs</a></li>';
                                                    echo  '<li><a href="adminEmployers.php">Employers</a></li>';

                                                    
                                                    
                                                    echo  '<li><a href="logout.php">Logout</a></li>';
                                                }
                                                // else
                                                // {
                                                //     echo  '<li><a href="home.php">Home</a></li>';
                                                //     echo  '<li><a href="about.php">About</a></li>';
                                                //     echo  '<li><a href="contact.php">Contact</a></li>';
                                                //     echo  '<li><a href="jobseekers.php">Jobseeker</a></li>';
                                                //     echo  '<li><a href="employer.php">Employer</a></li>';
                                                //     echo  '<li><a href="login.php">Login</a></li>';
                                                // }

                                            }

                                          
                                        

                                            if(isset($_COOKIE['usertype']))
                                            {
                                                if($_COOKIE['usertype'] == "jobseekers")
                                                {
                                                    echo  '<li><a href="home.php">Home</a></li>';
                                                    echo  '<li><a href="about.php">About</a></li>';
                                                    echo  '<li><a href="contact.php">Contact</a></li>';
                                                    echo  '<li><a href="jobs.php">Jobs</a></li>';
                                                    echo  '<li><a href="login.php">View Profile</a></li>';
                                                    echo  '<li><a href="logout.php">Logout</a></li>';
                                                }
                                            }

                                            
                                            if(isset($_COOKIE['usertype']))
                                            {
                                                if($_COOKIE['usertype'] == "employer")
                                                {
                                                    echo  '<li><a href="home.php">Home</a></li>';
                                                    echo  '<li><a href="about.php">About</a></li>';
                                                    echo  '<li><a href="contact.php">Contact</a></li>';
                                                    echo  '<li><a href="postjobs.php">Post Jobs</a></li>';
                                                    echo  '<li><a href="login.php">View Profile</a></li>';
                                                    echo  '<li><a href="logout.php">Logout</a></li>';
                                                }
                                            }
                                            
                                            
                                    
                                            
                                            
                                    ?>
                                        
                                    
                                </ul>
                                <!-- Search Button
                                <div id="header-search"><i class="fa fa-search" aria-hidden="true"></i></div>

                                <!-- Donate Button 
                                <a href="#" class="btn crose-btn header-btn">Donate Us</a>-->

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <!-- ##### Header Area End ##### -->
    <div class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>









