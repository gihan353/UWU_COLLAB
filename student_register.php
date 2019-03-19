<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['radio'];
    $faculty = $_POST['facultyID'];
    $department = $_POST['departmentID'];
    $degree = $_POST['degreeID'];
    $academic_year = $_POST['academic_year'];
    $user_name = $_POST['username'];
    $password_ = $_POST['password'];
    $encpassword=sha1($password_);
    $admin_id = $_POST['admin_id'];

    include 'connectDB.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql0 = "SELECT * FROM user WHERE user_name='$user_name'";
    $sql1 = "INSERT INTO user (user_name, password, type, activated) VALUES ('$user_name','$encpassword','student','0')";
    $sql2 = "INSERT INTO student (st_name, gender, DOB, faculty, department, degree, ac_year, address, email, tel_no, user_name, admin_id) VALUES ('$firstname $lastname','$gender','$dob','$faculty','$department','$degree','$academic_year','$address','$email','$contact_no','$user_name','$admin_id')";

    if (mysqli_query($conn, $sql0)) {
        if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {


            echo'<div class="alert alert-success" role="alert">
  Student Registation successfully!
</div>';
        } else {
            // echo "Error: " . $sql1 . "<br>" . $conn->error;
            echo'<div class="alert alert-danger" role="alert">
  Error!
</div>';
        }
    } else {
        echo "Username Exists!";
    }
    $conn->close();
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
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <title>Student Registration</title>

        <style>
            .footer{
                background-color: black;
                height: 70px;
                text-align: center;
                color: white;
            }
        </style>

        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <!--script type="text/javascript" src="engine1/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section -->



        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="engine2/style.css" />
        <!--script type="text/javascript" src="engine2/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section --></head>



    <body>

        <?php include './header.php'; ?>





        <div class="container"> 

            <div id="loginbox" class="mainbox col-md-6 col-sm-8 jumbotron">

                <div class="panel panel-info" >
                    <div class="panel-heading">

                        <div class="panel-title"><h2>Student Registration</h2></div>

                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="signupform" class="form-horizontal" role="form" method="POST" action="student_register.php">

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                    <span class="error_form" id="firstname_error_message"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                    <span class="error_form" id="lastname_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                                    <span class="error_form" id="email_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Contact No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="eg:  (+94XXXXXXXXX)" required>
                                    <span class="error_form" id="contact_no_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                    <span class="error_form" id="address_error_message"></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Date of Birth</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required>
                                    <span class="error_form" id="dob_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Gender</label>
                                <div class="col-md-9">
                                    <label class="radio-inline"><input type="radio" id="radio" name="radio" value="Male" required>Male</label>
                                    <label class="radio-inline"><input type="radio" id="radio" name="radio" value="Female" required>Female</label>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Faculty</label>
                                <div class="col-md-9">

                                    <div class="dropdown">
                                        <select  class="form-control" id="facultyID" name="facultyID" required>
                                            <option value="" selected disabled>Select your Faculty</option>
                                            <option value="Science & Technology">Science & Technology</option>
                                            <option value="Management">Management</option>
                                            <option value="Export Agriculture">Export Agriculture</option>
                                        </select>

                                    </div>
                                </div>		
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Department</label>
                                <div class="col-md-9">

                                    <div class="dropdown">
                                        <select  class="form-control" id="departmentID" name="departmentID" required >
                                            <option value="" selected disabled>Select your Department</option>
                                            <option value="Science & Technology">Science & Technology</option>
                                            <option value="Computer Science & Technology">Computer Science & Technology</option>
                                            <option value="Export Agriculture">Export Agriculture</option>
                                            <option value="Snimal Science">Animal Science</option>
                                            <option value="Management Sciences">Management Sciences</option>
                                            <option value="Public Administration">Public Administration</option>

                                        </select>
                                    </div>
                                </div>		
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Degree</label>
                                <div class="col-md-9">

                                    <div class="dropdown">
                                        <select  class="form-control" id="degreeID" name="degreeID" required>
                                            <option value="" selected disabled>Select your Degree</option>
                                            <option value="SCT">SCT</option>
                                            <option value="MRT">MRT</option>
                                            <option value="CST">CST</option>
                                            <option value="IIT">IIT</option>
                                            <option value="ENM">ENM</option>
                                            <option value="HTE">HTE</option>
                                            <option value="ANS">ANS</option>
                                            <option value="AQT">AQT</option>
                                            <option value="EAG">EAG</option>
                                            <option value="PLT">PLT</option>
                                            <option value="TEA">TEA</option>

                                        </select>
                                    </div>
                                </div>		
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Academic Year</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="academic_year" name="academic_year" placeholder="Academic Year" required>
                                    <span class="error_form" id="academic_year_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Registration No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="admin_id" name="admin_id" placeholder="Registration No" required>
                                    <span class="error_form" id="admin_id_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">UserName</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="UserName" required>
                                    <span class="error_form" id="username_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <span class="error_form" id="password_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                                    <span class="error_form" id="cpassword_error_message"></span>
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


            <div class="wow col-sm-6 col-md-4 col-md-offset-1 col-sm-offset-1">
                <div class="panel-heading">
                    <div class="panel-title"><h2 style="font-family: boulder">Join With Us</h2></div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                </div> 


                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                <div id="wowslider-container2">
                    <div class="ws_images"><ul>
                            <li><img src="data2/images/student1.jpg" alt="Join With Us" title="Join With Us" id="wows2_0"/></li>
                            <li><a href="http://wowslider.net"><img src="data2/images/student2.jpg" alt="html slideshow" title="PLAN" id="wows2_1"/></a></li>
                            <li><img src="data2/images/student3.jpg" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
                        </ul></div>
                    <div class="ws_bullets"><div>
                            <a href="#" title="Join With Us"><span><img src="data2/tooltips/events_with_us.jpg" alt="Join With Us"/>1</span></a>
                            <a href="#" title="PLAN"><span><img src="data2/tooltips/plan.jpg" alt="PLAN"/>2</span></a>
                            <a href="#" title="UWU COLLAB"><span><img src="data2/tooltips/uwu_collab.png" alt="UWU COLLAB"/>3</span></a>
                        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css slider</a> by WOWSlider.com v8.8</div>
                    <div class="ws_shadow"></div>
                </div>	
                <script type="text/javascript" src="engine2/wowslider.js"></script>
                <script type="text/javascript" src="engine2/script.js"></script>
                <!-- End WOWSlider.com BODY section -->
                <br><br>
                <p style="font-family: cooper;">Creative vision , through processing and incorporation of new generation friendly, dynamic fresh ideas and concepts
                    enable us to introduce innovative and reliable designs in all cases
                </p>

            </div>
        </div>










        <footer class="container-fluid text-center footer">
            <p>All Rights Reserved.</p>
        </footer>
    </body>

    <script type="text/javascript">
                        $(function () {

                            $("#firstname_error_message").hide();
                            $("#lastname_error_message").hide();
                            $("#email_error_message").hide();
                            $("#contact_no_error_message").hide();
                            $("#address_error_message").hide();
                            $("#dob_error_message").hide();
                            $("#academic_year_error_message").hide();
                            $("#admin_id_error_message").hide();
                            $("#username_error_message").hide();
                            $("#password_error_message").hide();
                            $("#cpassword_error_message").hide();


                            var error_fname = false;
                            var error_lastname = false;
                            var error_email = false;
                            var error_contact_no = false;
                            var error_address = false;
                            var error_dob = false;
                            var error_academic_year = false;
                            var error_admin_id = false;
                            var error_username = false;
                            var error_password = false;
                            var error_cpassowrd = false;


                            $("#firstname").focusout(function () {
                                check_fname();
                            });

                            $("#lastname").focusout(function () {
                                check_lastname();
                            });

                            $("#email").focusout(function () {
                                check_email();
                            });

                            function check_fname() {
                                var pattern = /^[a-zA-Z]*$/;
                                var fname = $("#firstname").val();
                                if (fname !== '') {

                                    if (pattern.test(fname)) {

                                        $("#firstname_error_message").hide();
                                        $("#firstname").css("border-bottom", "2px solid #34F458");

                                    } else {

                                        $("#firstname_error_message").html("Should contain only Alphabets");
                                        $("#firstname_error_message").show();
                                        $("#firstname").css("border-bottom", "2px solid #F90A0A");
                                        error_fname = true;

                                    }
                                } else {
                                    $("#firstname_error_message").html("Should not be Empty");
                                    $("#firstname_error_message").show();
                                    $("#firstname").css("border-bottom", "2px solid #F90A0A");
                                    error_fname = true;
                                }
                            }

                            function check_lastname() {
                                var pattern = /^[a-zA-Z]*$/;
                                var lastname = $("#lastname").val();
                                if (lastname !== '') {

                                    if (pattern.test(lastname)) {

                                        $("#lastname_error_message").hide();
                                        $("#lastname").css("border-bottom", "2px solid #34F458");

                                    } else {

                                        $("#lasstname_error_message").html("Should contain only Alphabets");
                                        $("#lastname_error_message").show();
                                        $("#lastname").css("border-bottom", "2px solid #F90A0A");
                                        error_fname = true;

                                    }
                                } else {
                                    $("#lastname_error_message").html("Should not be Empty");
                                    $("#lastname_error_message").show();
                                    $("#lastname").css("border-bottom", "2px solid #F90A0A");
                                    error_fname = true;
                                }
                            }

                            function check_email() {
                                var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var email = $("#email").val();
                                if (pattern.test(email) && email !== '') {
                                    $("#email_error_message").hide();
                                    $("#email").css("border-bottom", "2px solid #34F458");
                                } else {
                                    $("#email_error_message").html("Invalid Email");
                                    $("#email_error_message").show();
                                    $("#email").css("border-bottom", "2px solid #F90A0A");
                                    error_email = true;
                                }
                            }

                            $("#registration_form").submit(function () {
                                error_fname = false;
                                error_sname = false;
                                error_email = false;
                                error_password = false;
                                error_retype_password = false;

                                check_fname();
                                check_sname();
                                check_email();
                                check_password();
                                check_retype_password();

                                if (error_fname === false) {
                                    alert("Registration Successfull");
                                    return true;
                                } else {
                                    alert("Please Fill the form Correctly");
                                    return false;
                                }


                            });
                        });
    </script>
</html>
