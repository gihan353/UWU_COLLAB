<?php
session_start();

if ($_SESSION['type'] == 'student') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} else {
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>student dashboard</title>
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
                <div class="col-sm-3 well">
                    <div class="well">
                        <p><a href="#">My Profile</a></p>
                        <img src="../images/profile.jpg" class="img-circle" height="65" width="65" alt="Profile">
                    </div>
                    <div class="well">
                        <p><a href="ViewVacancy.php"> Job Vacancies</a></p>
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
                        <p><a href="projectHome.php"> Collab Projects</a></p>
                        <p>
                            <span class="label label-default">UWU_COLLAB</span>
                            <span class="label label-primary">Phrmacy management</span>
                            <span class="label label-success">Home Security</span>


                        </p>

                    </div>


                    <div class="well">
                        <p><a href="event_student.php">UWU events</a></p>
                        <p>
                            <span class="label label-default">Shecoderess</span>
                            <span class="label label-primary">CST Lan Challange</span>
                            <span class="label label-success">extreme</span>


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
                                    <p contenteditable="true"><h2 >Student Dashboard</h2></p>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                    <div id="wowslider-container2">
                        <div class="ws_images"><ul>
                                <li><img src="../data2/images/events_with_us.jpg" alt="UWU STUDENTS" title="UWU STUDENTS" id="wows2_0"/></li>
                                <li><a href="http://wowslider.net"><img src="../images/uwu_student.jpg" alt="html slideshow" title="PLAN" id="wows2_1"/></a></li>
                                <li><img src="../images/uwu_student1.jpg" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
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
                    <p style="font-family: cooper;">A student is primarily a person enrolled in a school or other educational institution who can engage with our System.They can easily look their jobs.Creative vision , through processing and incorporation of new generation friendly, dynamic fresh ideas and concepts
                        enable us to introduce innovative and reliable designs in all cases
                    </p>



                    <div class="row">

                        <div class="col-lg-12 text-left ">
                            <?php
                            include '../connectDB.php';

                            $result = mysqli_query($conn, "SELECT * FROM student where user_name='$username'");
                            while ($row = mysqli_fetch_array($result)) {
                                ?>

                                <div class="wow col-sm-6 col-md-4 col-md-offset-1 col-sm-offset-1">
                                    <div class="panel-heading">
                                        <div class="panel-title"><h2 style="font-family: boulder"></h2></div>
                                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                                    </div> 


                                </div>


                                <!-- <div class="list-group">
                                     <a href="#" class="list-group-item list-group-item-success">Name: <?php echo $row['st_name'] ?></a>
                                     <a href="#" class="list-group-item list-group-item-info">Faculty: <?php echo $row['faculty'] ?></a>
                                     <a href="#" class="list-group-item list-group-item-warning">Department: <?php echo $row['department'] ?></a>
                                     <a href="#" class="list-group-item list-group-item-danger">Degree: <?php echo $row['degree'] ?></a>
                                 </div>-->



                                <?php
                            }
                            mysqli_close($conn);
                            ?>
                        </div>
                    </div>     
                </div>

                <div class="col-sm-2 well">
                    <div class="thumbnail">
                        <p>Upcoming Events</p>
                        <img src="../images/workshop.jpg" alt="workshop" width="400" height="300">
                        <p><strong>Uva Wellassa University</strong></p>
                        <p>Fri. 27 November 2018</p>
                        <a href="new_events.php"> <button class="btn btn-primary">Info</button></a>
                    </div>      
                    <div class="well">
                        <p></p>
                    </div>
                    <div class="well">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center footer">
            <p>All Rights Reserved.</p>
        </footer>

    </body>
</html>

