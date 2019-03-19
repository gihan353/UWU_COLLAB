<?php
session_start();

if ($_SESSION['type'] == 'admin') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} else {
    header("location: ../login.php");
}

include '../connectDB.php';
?>

<?php
if (( $_SERVER['REQUEST_METHOD'] == 'POST')) {

    $student_id = $_GET['student_id'];
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
    $admin_id = $_POST['admin_id'];

    $query = "UPDATE student SET st_name='" . $firstname . "', email='" . $email . "', tel_no='" . $contact_no . "', address='" . $address . "', DOB='" . $dob . "', gender='" . $gender . "', faculty='" . $faculty . "', department='" . $department . "', degree='" . $degree . "', ac_year='" . $academic_year . "', admin_id='" . $admin_id . "' WHERE st_id=" . $student_id;
    $result = mysqli_query($conn, $query);


    if ($result) {


        header('Location:EditStudentDetails.php?post_update=true');
    } else {
        echo '<script language ="javascript" >';
        echo 'alert("Failed!");';
        echo '</script>';
        // echo $query;
    }
} elseif (isset($_GET['st_id'])) {

    $student_id = mysqli_real_escape_string($conn, $_GET['st_id']);
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
            $username = $result['user_name'];
            $adminid = $result['admin_id'];
        } else {
            echo "user not found";
        }
    } else {
        echo "query failed";
    }
    ?>

    <html>
        <head>
            <title>Update Student Details</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

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
    <?php include 'AdminHeader.php'; ?>

            <div class="container"> 

                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 jumbotron">

                    <div class="panel panel-info" >
                        <div class="panel-heading">

                            <div class="panel-title"><h2>Student Registration</h2></div>

                        </div>     

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="signupform" class="form-horizontal" role="form" method="POST" action="UpdateStudentDetails.php?student_id=<?php echo $student_id ?>">

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"<?php echo 'value="' . $name . '"'; ?>>
                                        <span class="error_form" id="firstname_error_message"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"<?php echo 'value="' . $name . '"'; ?>>
                                        <span class="error_form" id="lastname_error_message"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" <?php echo 'value="' . $email . '"'; ?>>
                                        <span class="error_form" id="email_error_message"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Contact No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="eg:  (+94XXXXXXXXX)" <?php echo 'value="' . $telno . '"'; ?>>
                                        <span class="error_form" id="contact_no_error_message"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address"<?php echo 'value="' . $address . '"'; ?>>
                                        <span class="error_form" id="address_error_message"></span>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth"<?php echo 'value="' . $dob . '"'; ?>>
                                        <span class="error_form" id="dob_error_message"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Gender</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline"><input type="radio" id="radio" name="radio" value="Male" <?php
    if ($gender == 'Male') {
        echo "checked='checked'";
    }
    ?>>Male</label>
                                        <label class="radio-inline"><input type="radio" id="radio" name="radio" value="Female" <?php
                                            if ($gender == 'Female') {
                                                echo "checked='checked'";
                                            }
                                            ?>>Female</label>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Faculty</label>
                                    <div class="col-md-9">

                                        <div class="dropdown">
                                            <select  class="form-control" id="facultyID" name="facultyID">
                                                <option value="Science & Technology" <?php if ($faculty == 'Science & Technology') {
                                                                           echo "selected";
                                                                       } ?>>Science & Technology</option>
                                                <option value="Management" <?php if ($faculty == 'Management') {
                                                                           echo "selected";
                                                                       } ?>>Management</option>
                                                <option value="Export Agriculture" <?php if ($faculty == 'Export Agriculture') {
                                                                           echo "selected";
                                                                       } ?>>Export Agriculture</option>
                                            </select>

                                        </div>
                                    </div>		
                                </div>


                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Department</label>
                                    <div class="col-md-9">

                                        <div class="dropdown">
                                            <select  class="form-control" id="departmentID" name="departmentID">
                                                <option value="Science & Technology" <?php if ($department == 'Science & Technology') {
                                                                           echo "selected";
                                                                       } ?>>Science & Technology</option>
                                                <option value="Computer Science & Technology" <?php if ($department == 'Computer Science & Technology') {
                                                                           echo "selected";
                                                                       } ?>>Computer Science & Technology</option>
                                                <option value="Export Agriculture" <?php if ($department == 'Export Agriculture') {
                                                                           echo "selected";
                                                                       } ?>>Export Agriculture</option>
                                                <option value="Snimal Science" <?php if ($department == 'Snimal Science') {
                                                                           echo "selected";
                                                                       } ?>>Animal Science</option>
                                                <option value="Management Sciences" <?php if ($department == 'Management Sciences') {
                                                                           echo "selected";
                                                                       } ?>>Management Sciences</option>
                                                <option value="Public Administration" <?php if ($department == 'Public Administration') {
                                                                           echo "selected";
                                                                       } ?>>Public Administration</option>

                                            </select>
                                        </div>
                                    </div>		
                                </div>   

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Degree</label>
                                    <div class="col-md-9">

                                        <div class="dropdown">
                                            <select  class="form-control" id="degreeID" name="degreeID" <?php echo 'value="' . $degree . '"'; ?>>
                                                <option value="" selected disabled>Select your Degree</option>
                                                <option value="SCT" <?php if ($degree == 'SCT') {
                                                                           echo "selected";
                                                                       } ?>>SCT</option>
                                                <option value="MRT" <?php if ($degree == 'MRT') {
                                                                           echo "selected";
                                                                       } ?>>MRT</option>
                                                <option value="CST" <?php if ($degree == 'CST') {
                                                                           echo "selected";
                                                                       } ?>>CST</option>
                                                <option value="IIT" <?php if ($degree == 'IIT') {
                                                                           echo "selected";
                                                                       } ?>>IIT</option>
                                                <option value="ENM" <?php if ($degree == 'ENM') {
                                                                           echo "selected";
                                                                       } ?>>ENM</option>
                                                <option value="HTE" <?php if ($degree == 'HTE') {
                                                                           echo "selected";
                                                                       } ?>>HTE</option>
                                                <option value="ANS" <?php if ($degree == 'ANS') {
                                                                           echo "selected";
                                                                       } ?>>ANS</option>
                                                <option value="AQT" <?php if ($degree == 'AQT') {
                                                                           echo "selected";
                                                                       } ?>>AQT</option>
                                                <option value="EAG" <?php if ($degree == 'EAG') {
                                                                           echo "selected";
                                                                       } ?>>EAG</option>
                                                <option value="PLT" <?php if ($degree == 'PLT') {
                                                                           echo "selected";
                                                                       } ?>>PLT</option>
                                                <option value="TEA" <?php if ($degree == 'TEA') {
                                                                           echo "selected";
                                                                       } ?>>TEA</option>

                                            </select>
                                        </div>
                                    </div>		
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Academic Year</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="academic_year" name="academic_year" placeholder="Academic Year" <?php echo 'value="' . $acyear . '"'; ?>>
                                        <span class="error_form" id="academic_year_error_message"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Registration No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="admin_id" name="admin_id" placeholder="Registration No" <?php echo 'value="' . $adminid . '"'; ?>>
                                        <span class="error_form" id="admin_id_error_message"></span>
                                    </div>
                                </div>








                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input id="btn-signup" type="submit" class="btn btn-info" value="Update"><i class="icon-hand-right"></i> 
                                        <span style="margin-left:8px;"></span>

                                        <button id="btn-signup" type="reset" class="btn btn-danger"><i class="icon-hand-right"></i> &nbsp reset</button>
                                        <span style="margin-left:8px;"></span>
                                    </div>
                                </div>


                            </form> 
                        </div>     
                    </div>                     
                </div> 


                <footer class="container-fluid text-center footer">
                    <p>All Rights Reserved.</p>
                </footer>
        </body>
    </html>
<?php } ?>
