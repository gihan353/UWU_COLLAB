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
        <title>student Details</title>

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
    <body >




        <?php include './header.php'; ?>




        <?php
        include '../connectDB.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $job_id = $_POST['job_id'];
        $job_title = $_POST['job_title'];
        $student_id = $_POST['student_id'];

        $query = "SELECT * FROM student WHERE st_id={$student_id} LIMIT 1";

        $result_set = mysqli_query($conn, $query);

        if ($result_set) {

        if (mysqli_num_rows($result_set) == 1) {

        $result = mysqli_fetch_assoc($result_set);
        $stid = $result['st_id'];
        $name = $result['st_name'];
        $gender = $result['gender'];
        $dob = $result['DOB'];
        $faculty = $result['faculty'];
        $department = $result['department'];
        $degree = $result['degree'];
        $acyear = $result['ac_year'];
        $address = $result['address'];
        $email = $result['email'];
        $telno = $result['tel_no'];
        $adminid = $result['admin_id'];
        }
        }
        ?>
        <div class="container">
            <h1>Selected Applicants Details</h1>

            <div class="container">
                <div class="jumbotron">

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="signupform" class="form-horizontal" role="form" >

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Job ID</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="firstname" value="<?php echo $job_id ?>">
                                    <span class="error_form" id="firstname_error_message"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Job Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="firstname" value="<?php echo $job_title ?>">
                                    <span class="error_form" id="firstname_error_message"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $name ?>">
                                    <span class="error_form" id="firstname_error_message"></span>
                                </div>
                            </div>
                           

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                                    <span class="error_form" id="email_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Contact No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="contact_no" name="contact_no" value="<?php echo $telno ?>">
                                    <span class="error_form" id="contact_no_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>">
                                    <span class="error_form" id="address_error_message"></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Date of Birth</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $dob ?>">
                                    <span class="error_form" id="dob_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Gender</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $gender ?>">
                                    <span class="error_form" id="admin_id_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Faculty</label>
                                <div class="col-md-9">

                                   <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $faculty ?>">
                                    <span class="error_form" id="admin_id_error_message"></span>
                                </div>		
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Department</label>
                                <div class="col-md-9">

                                   <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $department ?>">
                                    <span class="error_form" id="admin_id_error_message"></span>
                                </div>		
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Degree</label>
                                <div class="col-md-9">

                                   <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $degree ?>">
                                    <span class="error_form" id="admin_id_error_message"></span>
                                </div>		
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Academic Year</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="academic_year" name="academic_year" value="<?php echo $acyear ?>">
                                    <span class="error_form" id="academic_year_error_message"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Registration No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="admin_id" name="admin_id" value="<?php echo $adminid ?>">
                                    <span class="error_form" id="admin_id_error_message"></span>
                                </div>
                            </div>




                        </form> 
                    </div>     

                </div>
                <br><br>
<?php
}


mysqli_close($conn);
?> 


            </div>
        </div>





        <footer class="container-fluid text-center footer">
            <p>All Rights Reserved.</p>
        </footer>
    </body>

</html>
