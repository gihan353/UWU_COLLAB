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
        
         <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
        <!--script type="text/javascript" src="engine1/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section -->


        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="../engine2/style.css" />
        <!--script type="text/javascript" src="engine2/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section -->
        
        
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
                    
                    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                            <div id="wowslider-container2">
                                <div class="ws_images"><ul>
                                        <li><img src="../images/company_wallpaper.jpg" alt="Maintainence" title="Maintainence" id="wows2_0"/></li>
                                        <li><a href="http://wowslider.net"><img src="../images/company_wallpaper1.jpg" alt="html slideshow" title="UPDATE" id="wows2_1"/></a></li>
                                        <li><img src="../images/company_wallpaper2.jpg" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
                                    </ul></div>
                                <div class="ws_bullets"><div>
                                        <a href="#" title="UWU STUDENTS"><span><img src="../data2/tooltips/events_with_us.jpg" alt="UWU STUDENTS"/>1</span></a>
                                        <a href="#" title="PLAN"><span><img src="../data2/tooltips/plan.jpg" alt="PLAN"/>2</span></a>
                                        <a href="#" title="UWU COLLAB"><span><img src="../data2/tooltips/uwu_collab.png" alt="UWU COLLAB"/>3</span></a>
                                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css slider</a> by WOWSlider.com v8.8</div>
                                <div class="ws_shadow"></div>
                            </div>	
                            <script type="text/javascript" src="../engine2/wowslider.js"></script>
                            <script type="text/javascript" src="../engine2/script.js"></script>
                            <!-- End WOWSlider.com BODY section -->
                            <br><br>
                            <p style="font-family: cooper;">A Company Can Register with our System.It will help to collect new candidates to their Jobs.



                  <!-- <div class="row">

                        <div class="col-lg-12 text-left ">

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-success">Company Name:  <?php echo $name ?></a>
                                <a href="#" class="list-group-item list-group-item-warning">Company Type:  <?php echo $company_type ?></a>
                                <a href="#" class="list-group-item list-group-item-danger">E-mail:  <?php echo $email ?></a>

                            </div>


                        </div>
                    </div>   -->  
                </div>

                <div class="col-sm-2 well">

                    <div class="well">
                        <p><a href="ProjectRequest.php">Request a Project</a></p>
                        <p>

                            <span class="label label-primary">Robotic</span>  
                            <span class="label label-default">Pure Computing</span>
                            <span class="label label-success">multidisciplinary</span>
                            <span class="label label-danger">Research</span>


                        </p>
                    </div> 
                    

                    <div class="well">
                        <p><a href="viewMyProjectRequest.php">View project request details</a></p>
                        <p><a href="viewStudentProject.php">View project details</a></p>
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
                        <p><a href="projectdownload.php">Download Project Reports</a></p>
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
