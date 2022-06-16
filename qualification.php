<?php
include('header.php');
include('connection.php');
$name = "";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM qualifications WHERE id= " . $id;

    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row["name"];  
    }
}
?>



<div class="container">
    <!-- Leave A Comment -->
     <div class="leave-comment-area mt-50 clearfix">
                            <div class="comment-form">
                                <!-- Contact Form Area -->
                                <div class="contact-form-area">
                                    <form action="savequalification.php" method="post"  class="contact-form text-right"> 
                                        <h4 class="header-text text-left">Qualification</h4><br><br>
                                        <div class="row">
                                            <div class="col-lg-12 form-inline">
                                            <input type="hidden"  name="id" value="<?=$id;?>">
                                                 <div class="col-lg-6">
                                                  <input type="text" name="name"  class="form-control" placeholder="Qualification" value="<?=$name;?>" required>
                                                  </div>
                                               
                                            <div class="col-12">
                                            <div class="col-lg-12 form-group mx-auto">
                                                <button type="submit"  class="btn crose-btn mt-15">Submit</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    