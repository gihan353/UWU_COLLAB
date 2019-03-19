
 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $companyname = $_POST['companyname'];
        $company_type = $_POST['radio'];
        $email = $_POST['email'];
        $user_name = $_POST['username'];
        $password_ = $_POST['password'];
        $encryppassword= sha1($password_);

        include 'connectDB.php';


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql0 = "SELECT * FROM user WHERE user_name='$user_name'";
        $result = mysqli_query($conn, $sql0);
        $sql1 = "INSERT INTO user (user_name, password, type, activated) VALUES ('$user_name','$encryppassword','company','0')";
        $sql2 = "INSERT INTO company (company_name, company_type, email, company_username) VALUES ('$companyname','$company_type','$email','$user_name')";

        if(mysqli_num_rows($result)==0){
            if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {

               // echo "New record created successfully";
                  echo'<div class="alert alert-success" role="alert">
  Company Registered successfully!
</div>';
            } else {
                //echo "Error: " . $sql1 . "<br>" . $conn->error;
                echo'<div id="av" class="alert alert-danger" role="alert">
  Error!
</div>';
            }
        } else {
            
           // echo "Username Exists!";
             echo'<div class="alert alert-danger" role="alert">
  Username Exists!
</div>';
        }

       mysqli_close($conn);
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
        <title>Company Registration</title>

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

                        <div class="panel-title"><h2>Company Registration</h2></div>

                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="signupform" class="form-horizontal" role="form" method="POST" action="company_register.php">

                            <div class="form-group">
                                <label for="companyname" class="col-md-3 control-label">Company Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="companyname" placeholder="Company Name" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Company Type</label>
                                <div class="col-md-9">
                                    <label class="radio-inline"><input type="radio" name="radio" value="Management" required>Management</label>
                                    <label class="radio-inline"><input type="radio" name="radio" value="IT" required>IT</label>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">UserName</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="username" placeholder="UserName" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <input id="btn-signup" type="submit" class="btn btn-info" value="Register"><i class="icon-hand-right"></i> 
                                    <span style="margin-left:8px;"></span>
                                    
                                     <button id="btn-signup" type="reset" class="btn btn-danger"><i class="icon-hand-right"></i> &nbsp reset</button>
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

