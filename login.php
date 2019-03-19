<?php session_start(); ?>
<!DOCTYPE html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_name = $_POST['username'];
    $password_ = $_POST['password'];
    $enpassword=sha1($password_);

    //connect to DB
    include './connectDB.php';

    $sql1 = "SELECT activated,type FROM user WHERE user_name='$user_name' and password='$enpassword'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        if ($row['activated'] == 1) {



            $_SESSION['username'] = $user_name;
            $_SESSION['type'] = $row['type'];



            if ($row['type'] == "student") {

                $sql2 = "SELECT * FROM student WHERE user_name='$user_name'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

                $_SESSION['name'] = $row2['st_name'];
                $_SESSION['st_id'] = $row2['st_id'];

                header("location: student/studentDashboard.php");
            } elseif ($row['type'] == "company") {

                $sql3 = "SELECT * FROM company WHERE company_username='$user_name'";
                $result3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

                $_SESSION['name'] = $row3['company_name'];
                $_SESSION['company_id'] = $row3['company_id'];
                $_SESSION['email'] = $row3['email'];
                $_SESSION['company_type'] = $row3['company_type'];

                header("location: company/companyDashboard.php");
            } elseif ($row['type'] == "admin") {
                $_SESSION['name'] = "Admin";
                header("location: admin/adminDashboard.php");
            }elseif ($row['type'] == "event_co") {

                $sql3 = "SELECT * FROM event_coordinator WHERE co_username='$user_name'";
                $result3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

                $_SESSION['name'] = $row3['co_name'];
                $_SESSION['co_id'] = $row3['co_id'];
                $_SESSION['email'] = $row3['email'];


                header("location: event_co/eventDashboard.php");
            }

            //echo "Loged iN";

            // header("location: index.php");
        } else {
           // echo "User not activated";
            echo'<div class="alert alert-danger" role="alert">
 User not activated!
</div>';
           // echo 'alert("I am an alert box!");';
        }
    } else {
        $error = "Your Login Name or Password is invalid";
        //echo "Wrong credentials";
         echo'<div class="alert alert-danger" role="alert">
 Wrong credentials!
</div>';
        
    }
}
?>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Login</title>

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

                        <div class="panel-title"><h2>Login</h2></div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login.php">

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required>                                        
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                            </div>



                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>


                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <input class="btn btn-success" type="submit" value="Login">

                                    <button type="reset" class="btn btn-secondary">Reset</button>


                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account! 
                                        <a href="register.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Register Now
                                        </a>
                                    </div>
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

        <script>
            function myFunction() {
                alert("I am an alert box!");
            }
        </script>

    </body>

</html>