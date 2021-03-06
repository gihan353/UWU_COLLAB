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
                $job_id= $_POST['job_id'];
                $job_title= $_POST['job_title'];
                $degree = $_POST['degree'];
                $year = $_POST['year'];
                // $result = mysqli_query($conn, "SELECT * FROM student");
                //connection to the database
                //execute the SQL query and return records
                if ($degree == '*') {
                    if ($year == "*") {
                        $result = mysqli_query($conn, "SELECT * FROM student INNER JOIN student_job ON student.st_id = student_job.st_id WHERE student_job.job_id= '". $job_id ."' ");
                    } else {
                        $result = mysqli_query($conn, "SELECT * FROM student INNER JOIN student_job ON student.st_id = student_job.st_id WHERE ac_year = '" . $year . "' and job_id = '". $job_id ."'");
                    }
                } else {
                    if ($year == "*") {
                        $result = mysqli_query($conn, "SELECT * FROM student INNER JOIN student_job ON student.st_id = student_job.st_id WHERE degree = '" . $degree . "' and job_id = '". $job_id ."'");
                    } else {
                        $result = mysqli_query($conn, "SELECT * FROM student INNER JOIN student_job ON student.st_id = student_job.st_id WHERE degree = '" . $degree . "' AND ac_year = '" . $year . "' and job_id = '". $job_id ."'");
                    }
                }

                //fetch tha data from the database
                //    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="container">
                <h1>Student Details</h1>
                <p><h4>Students Those who Applied for <?php echo $job_title ?></h4></p>
                <div class="container">
                    <div class="jumbotron">
                        <form method="POST">
                            
                            <input type="hidden" name="job_id" value="<?php echo $job_id ?>">
                            <input type="hidden" name="job_title" value="<?php echo $job_title ?>">
                            
                            <table><tr>
                                    <td><select  class="form-control" id="degree" name="degree">
                                            <option value="*" <?php if($_POST['degree']=='*'){echo 'selected';} ?>>All Degrees</option>
                                            <option value="IIT" <?php if($_POST['degree']=='IIT'){echo 'selected';} ?>>IIT</option>
                                            <option value="CST" <?php if($_POST['degree']=='CST'){echo 'selected';} ?>>CST</option>
                                            <option value="SCT" <?php if($_POST['degree']=='SCT'){echo 'selected';} ?>>SCT</option>
                                            <option value="MRT" <?php if($_POST['degree']=='MRT'){echo 'selected';} ?>>MRT</option>
                                            <option value="HTE" <?php if($_POST['degree']=='HTE'){echo 'selected';} ?>>HTE</option>
                                            <option value="ENM" <?php if($_POST['degree']=='ENM'){echo 'selected';} ?>>ENM</option>
                                            <option value="ANS" <?php if($_POST['degree']=='ANS'){echo 'selected';} ?>>ANS</option>
                                            <option value="AQT" <?php if($_POST['degree']=='AQT'){echo 'selected';} ?>>AQT</option>
                                            <option value="PLT" <?php if($_POST['degree']=='PLT'){echo 'selected';} ?>>PLT</option>
                                            <option value="TEA" <?php if($_POST['degree']=='TEA'){echo 'selected';} ?>>TEA</option>
                                            <option value="EAG" <?php if($_POST['degree']=='EAG'){echo 'selected';} ?>>EAG</option>
                                        </select></td>
                                    <td><select  class="form-control" id="year" name="year">
                                            <option value="*" >All Years</option>
                                            <option value="2013/2014" <?php if($_POST['year']=='2013/2014'){echo 'selected';} ?>>4th Year</option>
                                            <option value="2014/2015" <?php if($_POST['year']=='2014/2015'){echo 'selected';} ?>>3rd Year</option>
                                            <option value="2015/2016" <?php if($_POST['year']=='2015/2016'){echo 'selected';} ?>>2nd Year</option>
                                            <option value="2016/2017" <?php if($_POST['year']=='2016/2017'){echo 'selected';} ?>>1st Year</option>
                                        </select></td>
                                    <td><input type="submit" value="Filter"></td></tr>
                            </table>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
<!--                                    <th>St_ID</th>-->
                                    <th>Student Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Faculty</th>
                                    <th>Department</th>
                                    <th>Degree</th>
                                    <th>Ac_Year</th>
                                    <th>address</th>
                                    <th>Email</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <?php echo"<td>$row[st_name]</td><td>$row[gender]</td><td>$row[DOB]</td><td>$row[faculty]</td><td>$row[department]</td><td>$row[degree]</td><td>$row[ac_year]</td><td>$row[address]</td><td><a href ='sendEmail.php?st_id=$row[st_id]&email=$row[email]&job_id=$job_id'>$row[email]</a></td><td>   <a href='../uploads/" . $row['path'] . "' class='btn btn-success'>Download CV</button> </td>"; ?>
                                    </tr> 
                                <?php } ?>
                            </tbody>
                        </table>

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
