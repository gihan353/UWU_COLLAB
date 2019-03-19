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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Company dashboard</title>
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

        <div class="container text-center">    
            <div class="row">
                <div class="col-sm-2 well">
                    <div class="well">
                        <p><a href="#">Company Profile</a></p>
                        <img src="../images/company.jpg" class="img-circle" height="65" width="65" alt="Profile">
                    </div>
                    <!--
                    <div class="well">
                        <p><a  onclick="document.getElementById('viewstudent').submit()">View Student details</a></p>
                        <form  action="ViewStudentdetails.php" id="viewstudent" method="post">
                            <input type="hidden" name="degree" value="*">
                            <input type="hidden" name="year" value="*">
                        </form>
                        <p>
                            <span class="label label-default">CST</span>
                            <span class="label label-primary">IIT</span>
                            <span class="label label-success">SCT</span>
                            <span class="label label-danger">MRT</span>


                        </p>

                    </div>
                    -->
                    <div class="well">
                        <p><a href="PostJob.php">Post a Job</a></p>
                        <p>

                            <span class="label label-primary">Robotic</span>  
                            <span class="label label-default">Pure Computing</span>
                            <span class="label label-success">multidisciplinary</span>
                            <span class="label label-danger">Research</span>


                        </p>

                    </div>

                    <div class="well">
                        <p><a href="viewMyVacancies.php">View My Job Vacancies</a></p>
                        <p>

                            <span class="label label-primary">Robotic</span>  
                            <span class="label label-default">Pure Computing</span>
                            <span class="label label-success">multidisciplinary</span>
                            <span class="label label-danger">Research</span>


                        </p>

                    </div>

                   



                    
                    
                    
                    <p><a href="#"></a></p>
                    <p><a href="#"></a></p>
                    <p><a href="#"></a></p>
                </div>
                <div class="col-sm-7">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-body">
                                    <p contenteditable="true"><h2 >Company Dashboard</h2></p>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-lg-12 text-left ">

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-success">Company Name:  <?php echo $name ?></a>
                                <a href="#" class="list-group-item list-group-item-warning">Company Type:  <?php echo $company_type ?></a>
                                <a href="#" class="list-group-item list-group-item-danger">E-mail:  <?php echo $email ?></a>

                            </div>


                        </div>
                    </div>     
                </div>

                <div class="col-sm-2 well">

                    <div class="well">
                        <p><a href="postproject.php">Post a Project</a></p>
                        <p>

                            <span class="label label-primary">Robotic</span>  
                            <span class="label label-default">Pure Computing</span>
                            <span class="label label-success">multidisciplinary</span>
                            <span class="label label-danger">Research</span>


                        </p>
                    </div> 

                    <div class="well">
                        <p><a href="cvdownloader.php">View My Projects</a></p>
                        <p>
                            <span class="label label-default">Software Engineer</span>
                            <span class="label label-primary">QA Engineer</span>
                            <span class="label label-success">Web Admin</span>
                            <span class="label label-info">UI Engineer</span>
                            <span class="label label-warning">Game Developer</span>
                            <span class="label label-danger">Business Analysis</span>
                        </p>
                    </div>
                    
                     <div class="well">
                        <p><a href="projectdownload.php">View Ongoing Projects</a></p>
                        <p>

                            <span class="label label-primary">Robotic</span>  
                            <span class="label label-default">Pure Computing</span>
                            <span class="label label-success">multidisciplinary</span>
                            <span class="label label-danger">Research</span>


                        </p>

                    </div>
                    
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center footer">
            <p>All Rights Reserved.</p>
        </footer>

    </body>
</html>
