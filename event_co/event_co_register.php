<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <!--script type="text/javascript" src="engine1/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section -->



        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <style>

            .footer{
                background-color: black;
                height: 70px;
                text-align: center;
                color: white;
            } 


            #image_div{
                background-image:url("images/home5.jpg");
                width:100%;
                height:440px;
                background-repeat:no-repeat;
                background-size:cover;
            }


            body {
                background-image: url("images/admin.jpg");
                background-color: #cccccc;
            }



        </style>






        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="engine2/style.css" />
        <!--script type="text/javascript" src="engine2/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section --></head>
    <body>

        <?php include './header.php'; ?>




        <form action="event_co_register.php" method="post">

            <div class="container">







                <div  class ="col-md-6 well">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><h2>Event co-ordinator register</h2></div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                        </div>  
                        <div class="panel-body" >


                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>







                            <div class="form-group">
                                <label for="name" class="col-md-3 control-label">Enter Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="co_name" placeholder="Enter name">

                                </div>
                            </div>

                            <br><br>
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                                    <span class="error_form" id="email_error_message"></span>
                                </div>
                            </div>
                            <br><br>

                            <div class="form-group">
                                <label for="user name" class="col-md-3 control-label">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="co_username" placeholder="Enter User Name">
                                </div>
                            </div>
                            <br><br>


                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="co_password" placeholder="Enter Password">
                                </div>
                            </div>

                            <br><br>

                            <?php $reg_date = date("Y/m/d") ?>
                            <div class="form-group">

                                <div class="col-md-9">
                                    <input type="hidden" class="form-control" name="reg_date" value="<?php $reg_date ?>">
                                </div>
                            </div> 




                            <br><br>


                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit"   name="submit" value="save" class="btn btn-info" >
                                    <span style="margin-left:8px;"></span> 


                                    <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp reset</button>
                                    <span style="margin-left:8px;"></span>
                                </div>
                            </div>

                        </div>







                    </div>






                </div>

                <div id="image_div">










                </div>




        </form>










        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $co_name = $_POST["co_name"];
            $co_username = $_POST["co_username"];
            $co_password = $_POST["co_password"];
            $reg_date = $_POST["reg_date"];
            $email = $_POST["email"];



            include("connectDB.php");

            $reg_date = date("Y/m/d");
            $sql1 = "INSERT INTO event_coordinator(co_name,email,co_username,co_password,registered_date) VALUES ('$co_name ','$email','$co_username','$co_password','$reg_date')";
            $sql2 = "INSERT INTO user (user_name, password, type, activated) VALUES ('$co_username','$co_password','event_co','0')";




            echo ("<br>");

            if (mysqli_query($connect, $sql1) && mysqli_query($connect, $sql2)) {
                echo' "<div class="alert alert-success" role="alert">save successfully</div>';
            } else {

                echo' "<div class="alert alert-danger" role="alert">save failed</div>';
            }
        }
        ?>


    </body>
</html>



