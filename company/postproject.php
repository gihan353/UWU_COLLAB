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
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Post a Project</title>

        <style>
            .footer{
                background-color: black;
                height: 70px;
                text-align: center;
                color: white;
            }
        </style>


    </head>
    <body>

     <?php include './header.php'; ?>





        <div class="container"> 

            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 jumbotron">

                <div class="panel panel-info" >
                    <div class="panel-heading">

                        <div class="panel-title"><h2>Post a Project</h2></div>

                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="signupform" class="form-horizontal" role="form" method="POST" action="postproject.php">

                            


                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Project Type</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="project_type" placeholder="Project Type">
                                </div>
                            </div>



                              <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Project Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="projectname" name="project_name" placeholder="Project Name">
                                  
                                </div>
                            </div>


                           


                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <input id="btn-signup" type="submit" class="btn btn-info" value="Post"><i class="icon-hand-right"></i> 
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
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        
        $projecttype = $_POST['project_type'];
        $projectname = $_POST['project_name'];
      
        include '../connectDB.php';
       
        $sql1 = "SELECT company_id FROM company WHERE company_username='$username'";
        $result = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo $username;
        echo mysqli_num_rows($result);
        $company_id = $row['company_id'];
        $sql2 = "INSERT INTO project (project_type, project_title, company_id, date) VALUES ('$projecttype','$projectname','$company_id',now())";

       // if (!mysqli_query($conn, $sql0)) {
            if (mysqli_query($conn, $sql2)) {

                echo "New record created successfully";
            } else {
                echo "Error: " . $sql2 . "<br>" . $conn->error;
               
            }
        }

     
    
    ?>
</html>

