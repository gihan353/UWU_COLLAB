<?php
session_start();

if ($_SESSION['type'] == 'admin') {
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
        <title>Admin dashboard</title>
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

            .w3-myfont {
                font-family: "Comic Sans MS", cursive, sans-serif;
            }




            .myclass{
                background-image: url("");

            }
        </style>
    </head>
    <body class="myclass">

        <?php include 'AdminHeader.php'; ?>

        <div class="container text-center">    
            <div class="row">
                <div class="col-sm-3 well">
                    <div class="well">
                        <p><a href="editProfile.php">My Profile</a></p>
                        <img src="../images/adminicon.png" class="img-circle" height="70" width="70" alt="Profile">
                    </div>

                    <div class="well">
                        <p><a href="UserActivate.php">User Activation</a></p>

                        <p>
                            <span class="label label-success">Activate</span>
                            <span class="label label-danger">Deactivate</span>

                        </p>

                    </div>
                    <div class="well">
                        <p><a href="EditStudentDetails.php">Edit Student details</a></p>

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
                        <p><a href="EditVacancy.php"> Edit Vacancy Details</a></p>

                        <p>
                            <span class="label label-default">Virtusa</span>
                            <span class="label label-primary">VisuaMatrix</span>
                            <span class="label label-success">Pearson</span>
                            <span class="label label-info">IFS</span>
                            <span class="label label-warning">99x Technology</span>
                            <span class="label label-danger">Telecom</span>
                        </p>


                    </div>

                    <div class="well">
                        <p><a href="vacancy.html">Edit Event Details</a></p>

                        <p>
                            <span class="label label-default">DeftCoders</span>
                            <span class="label label-primary">CST LAN Challange</span>
                            <span class="label label-success">Shecoderess</span>
                            <span class="label label-info">IEEE</span>
                            <span class="label label-warning">Computer Society</span>
                            <span class="label label-danger">Mozilla Campus Club</span>
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
                                    <p contenteditable="true"><h2 class="w3-myfont" >Admin  Dashboard</h2></p>




                                </div>

                            </div>

                            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                            <div id="wowslider-container2">
                                <div class="ws_images"><ul>
                                        <li><img src="../images/admin_wallpaper.png" alt="Maintainence" title="Maintainence" id="wows2_0"/></li>
                                        <li><a href="http://wowslider.net"><img src="../images/admin_wallpaper1.jpg" alt="html slideshow" title="UPDATE" id="wows2_1"/></a></li>
                                        <li><img src="../images/admin_wallpaper2.jpg" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
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
                            <p style="font-family: cooper;">UWU COLLAB wil provide University Industry collaboration system.It will help to both Students and Companies.






                            <div>
                                <p></p>
                                <!--<img src="images/adminwallpaper.jpeg" >-->
                            </div>
                        </div>
                    </div>





                </div>


            </div>
        </div>

        <footer class="container-fluid text-center footer">
            <p>All Rights Reserved.</p>
        </footer>

    </body>
</html>

