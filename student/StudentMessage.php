<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title> Student Message</title>

        <style>
            .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:black;
                color: white;
                text-align: center;


            }







            section{
                width:100%;
                height:5vh;


            }

            section .leftBox{
                width:60%;
                height:5%;
                float:left;
                padding:0;
                box-sizing: border-box;
            }

            section .leftBox .content{
                color:#fff;
                background:rgba(0,0,0,.5);
                padding: 40px;
                transition: .10s;

            }


            section .leftBox .content:hover {

                background: lightslategrey;
            }











            .myclass{
                background-image: url("");

            }


        </style>
    </head>

    <body  class="myclass" style="">



        <section>


        </head>
        <body>

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">UWU COLLAB</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Students</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>

                    <form class="navbar-form navbar-right" action="/action_page.php">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
            </nav>
            </div>
            </div>
            </div>
            </div>
            <style>

                body {
                    font-family: Arial, Helvetica, sans-serif;
                }

                .mobile-container {
                    max-width: 480px;
                    margin: auto;
                    background-color: #555;
                    height: 500px;
                    color: white;
                    border-radius: 10px;
                }

                .topnav {
                    overflow: hidden;
                    background-color: #333;
                    position: relative;
                }

                .topnav #myLinks {
                    display: none;
                }

                .topnav a {
                    color: white;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 17px;
                    display: block;
                }

                .topnav a.icon {
                    background: black;
                    display: block;
                    position: absolute;
                    right: 0;
                    top: 0;
                }

                .topnav a:hover {
                    background-color: #ddd;
                    color: black;
                }

                .active {
                    background-color: #4CAF50;
                    color: white;
                }
            </style>
            </head>
        <body>
            <div class ="container">
                <div class= "row">

                    <div class = "col-sm-6 banner-info background-color:lightblue" >
                        <div class="leftBox">
                            <div class="content">
                                <h2 align="center"><b> Send Message </b></h2>

                                <div class = "col-sm-6 banner-image">


                                </div>
                            </div>
                        </div>
                        </header>
                        </section>


                        <div class="container"> 

                            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 jumbotron">

                                <div class="panel panel-info" >
                                    <div class="panel-heading">

                                        <div class="panel-title"><h2> Student Message</h2></div>

                                    </div>     

                                    <div style="padding-top:30px" class="panel-body" >

                                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                        <form id="signupform" class="form-horizontal" role="form" method="POST" action="StudentMessage.php">



                                            <input type="hidden" class="form-control" name="projectrequest_id" value="<?php echo $_POST['projectrequest_id']; ?>">




                                            <div class="form-group">
                                                <label for="Subject" class="col-md-3 control-label">Subject:</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="Subject" placeholder="Subject">    
                                                </div>
                                            </div>
                                            <br><br>


                                            <div class="form-group">
                                                <label for="Subject" class="col-md-3 control-label">Message:</label>
                                                <div class="col-md-9">
                                                    <textarea name="Message" rows="4" cols="40">

                                                    </textarea>
                                                </div>
                                            </div>
                                            <br><br>




                                            <div class="form-group">
                                                <!-- Button -->                                        
                                                <div class="col-md-offset-3 col-md-9">
                                                    <input id="btn-signup" type="submit" class="btn btn-info" value="Submit"><i class="icon-hand-right"></i> 
                                                    <span style="margin-left:8px;"></span>  
                                                </div>
                                            </div>
                                        </form>    
                                    </div>                     
                                </div>  
                            </div>
                        </div>





                        </body>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['Subject']) {
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "uwu_collab";

                            $projectrequest_id = $_POST['projectrequest_id'];
                            $student_id = $_SESSION['st_id'];
                            $Subject = $_POST['Subject'];
                            $message = $_POST['Message'];




                            $conn = new mysqli($servername, $username, $password, $dbname);


                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }


                            $sql2 = "INSERT INTO stumessage (projectrequest_id,student_id,Subject,Msg) VALUES ('$projectrequest_id','$student_id','$Subject','$message')";


                            if (mysqli_query($conn, $sql2)) {


                                echo'<div class="alert alert-success" role="alert">
  New record created successfully!
</div>';
                            } else {
                                // echo "Error: " . $sql1 . "<br>" . $conn->error;
                                echo $sql2;
                                echo'<div class="alert alert-danger" role="alert">
                    
  Errors
</div>';
                            }

                            $conn->close();
                        }
                        ?>
                        <style>
                            .footer{
                                position: fixed;
                                right: 0;
                                bottom: 0;
                                width: 100%;
                                background-color:black;
                                color: white;
                                text-align: center;


                            }
                            .name1{font-size: 12px;}
                        </style>
                        </head>
                        <body>



                            </section>
                            <footer class="container-fluid text-center footer">
                                <p>All Rights Reserved.</p>
                            </footer>
                        </body>




