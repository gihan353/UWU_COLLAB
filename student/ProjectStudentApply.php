

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>project Student Apply</title>



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
                background-image: url("../images/3.jpg");

            }


        </style>
    </head>

    <body class="myclass" >



        <section>

            <?php include './header.php'; ?>








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
                        <h2 align="center"><b> Add Project Details </b></h2>

                        <div class = "col-sm-6 banner-image">


                        </div>
                    </div>
                </div>
                </header>
                </section>







                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 jumbotron">

                    <div class="panel panel-info" >
                        <div class="panel-heading">


                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"></a></div>
                        </div>     

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


                            <div class="form-group">
                                <label for="student_username" class="col-md-3 control-label">Student Username:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="student_username" id="student_username" placeholder="Student Username"   >
                                </div>
                                <br><br>
                                <input type="button" name="button" value="search" id="search">
                            </div>




                            <form id="signupform" class="form-horizontal" role="form" method="POST" action="ProjectStudentApply.php">


                                <br><br>
                                
                                <input type="hidden" class="form-control" name="st_id" id="st_id" >
                                  
                                <div class="form-group">
                                    <label for="Studentname" class="col-md-3 control-label">StudentName:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="Studentname" placeholder="Studentname" id="studentname">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Degree" class="col-md-3 control-label">Degree:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="Degree" placeholder="Degree" id="degree">

                                    </div>
                                </div>


                                <div class="form-group">		
                                    <label for="year" class="col-md-3 control-label">Year:</label>
                                    <div class="col-md-9"> 
                                        <input type="text" class="form-control" name="Year" placeholder="Year" id="year">



                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="Email" placeholder="Email" id="email">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="projecttype" class="col-md-3 control-label">ProjectType:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="producttype" name="projecttype">
                                            <option>select your project type</option>
                                            <option>Mini Project</option>
                                            <option>Research Project</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Interest area" class="col-md-3 control-label">InterestArea:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="interest" name="interestarea">
                                            <option>select your Interest area</option>
                                            <option>Network</option>
                                            <option>Web Application</option>
                                            <option>Mobile Application</option>
                                            <option>Robotics</option>
                                            <option>Artificial Intelligence</option>
                                            <option>Big Data</option>
                                            <option>Virtual Reality</option>
                                            <option>Image Processing</option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Technologies" class="col-md-3 control-label">Technologies:</label><br></br>

                                    <div class="form-group">
                                        <label for="Technologies" class="col-md-3 control-label">Java:</label>
                                        <div class="col-md-9">


                                            <select s="form-control" id="language" name="Java">

                                                <option>Select your java level</option>
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                                

                                            </select>

                                        </div>

                                    </div>
                                    <div class="form-group">

                                        <label for="Technologies" class="col-md-3 control-label">PHP:</label>
                                        <div class="col-md-9">
                                            <select s="form-control" id="language" name="php">

                                                <option>Select your PHP level</option>
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                                

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <label for="Technologies" class="col-md-3 control-label">JSP:</label>
                                        <div class="col-md-9">
                                            <select s="form-control" id="language" name="JSP">

                                                <option>Select your JSP level</option>
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                                

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <label for="Technologies" class="col-md-3 control-label">ASP:</label>
                                        <div class="col-md-9">
                                            <select s="form-control" id="language" name="ASP">

                                                <option>Select your ASP level</option>
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                                

                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <!-- Button -->                                        
                                        <div class="col-md-offset-3 col-md-9">
                                            <input id="btn-signup" type="submit" class="btn btn-info" value="Apply"><i class="icon-hand-right"></i> 
                                            <span style="margin-left:8px;"></span>  
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>


                </div>





            </div>
        </div>


    </div> 


    </div>



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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
//

    $(document).ready(function () {
        $("#search").click(function () {
            $.ajax({
                url: 'projectStudentApplySearch.php',
                type: 'GET',
                data: {student_username: $("#student_username").val()},
                success: function (result) {
                    data = jQuery.parseJSON(result);
                    //alert(data[0].st_id);
                    $('#Student_username').val(data[0].student_username);
                    $('#st_id').val(data[0].student_id);
                    $('#studentname').val(data[0].st_name);
                    $('#email').val(data[0].email);
                    $("#degree").val(data[0].degree).change();
                    $("#year").val(data[0].ac_year).change();
                    //StudentIds
                    $("#StudentIds").val(data[0].st_id).change();

                }
            });
        });
    });
</script> 

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
    include '../connectDB.php';

    $StudentId = $_POST['st_id'];
    $Studentname = $_POST['Studentname'];
    $Degree = $_POST['Degree'];
    $year = $_POST['Year'];
    $Email = $_POST['Email'];
    $Java = $_POST['Java'];
    $interestarea = $_POST['interestarea'];
    $php = $_POST['php'];
    $projecttype = $_POST['projecttype'];
    $JSP = $_POST['JSP'];
    $ASP = $_POST['ASP'];


    $sql2 = "INSERT INTO studentproject (Student_Id,Student_name,Degree,year,Email,project_type,interest_area,Java,PHP,JSP,ASP) VALUES ('$StudentId','$Studentname','$Degree','$year','$Email','$projecttype','$interestarea','$Java','$php','$JSP','$ASP')";


    if (mysqli_query($conn, $sql2)) {


        echo'<div class="alert alert-success" role="alert">
  New record created successfully!
  
</div>';
        echo $StudentId;
        echo $Studentname;
    } else {
        // echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo'<div class="alert alert-danger" role="alert">
  Errors
</div>';
    }

    $conn->close();
}
?>



</html>               

