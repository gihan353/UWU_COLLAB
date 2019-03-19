<?php
session_start();

if ($_SESSION['type'] == 'company') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $company_type = $_SESSION['company_type'];
    $email = $_SESSION['email'];
} else {
    header("location: ../login.php");
}

include '../connectDB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $st_id = $_POST['st_id'];
    $job_id = $_POST['job_id'];
    $result = mysqli_query($conn, "UPDATE job SET Selected='$st_id' WHERE job_id='$job_id'");
    if ($result) {
        ?>
        <script language="javascript">
            window.location.href = "viewMyVacancies.php"
        </script>
        <?php
    }
    // echo'<div class="alert alert-success" role="alert">Applicant Selected Succesfully!</div>';
} else {
    ?>
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Send Email</title>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            <style>
                .footer{
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    background-color: #333;
                    color: white;
                    text-align: center;


                }
                .name1{font-size: 13px;}
            </style>
        </head>
        <body>




            <?php include './header.php'; ?>  


            <div class="container"> 

                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 jumbotron">

                    <div class="panel panel-info" >
                        <div class="panel-heading">

                            <div class="panel-title"><h2><span class="">Send Email Selecting the Applicant</span></h2></div>

                        </div>     

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="signupform" class="form-horizontal" role="form" method="POST" action="SendEmail.php">


                                <input type="hidden" name="st_id" value="<?php echo $_GET['st_id'] ?>">
                                <input type="hidden" name="job_id" value="<?php echo $_GET['job_id'] ?>">


                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" disabled="true" class="form-control" name="email" value="<?php echo $_GET['email'] ?>">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Subject</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="projectname" name="subject" placeholder="Enter the subject">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" rows="5" id="details" name="Message" required></textarea>

                                    </div>
                                </div>



                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input id="btn-signup" type="submit" class="btn btn-info" value="Send"><i class="icon-hand-right"></i> 
                                        <span style="margin-left:8px;"></span>  
                                    </div>
                                </div>
                            </form>    
                        </div>                     
                    </div>  
                </div>
            </div>





            <footer class="container-fluid text-center footer">
                <p>All Rights Reserved.</p>
            </footer>
        </body>
    </html>
<?php } ?>