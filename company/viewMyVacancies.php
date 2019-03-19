<?php
session_start();

if ($_SESSION['type'] == 'company') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $company_type = $_SESSION['company_type'];
    $email = $_SESSION['email'];
    $company_id = $_SESSION['company_id'];
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
        <title>Company Details</title>

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
                background-image: url("../images/25.jpg");

            }


        </style>
    </head>

    <body>



        <section>
        </style>


    </head>
    <body>

        <?php include './header.php'; ?>



    <body>
        <div class ="container">
            <div class= "row">
                <font style="center">
                <div class = "col-sm-6 banner-info background-color:lightblue" >
                    <div class="leftBox">
                        <div class="content">
                            <h2 align="center"><b> My Job Vacancies </b></h2>

                            <div class = "col-sm-6 banner-image">


                            </div>
                        </div>
                    </div>
                    </header>
                    </section>

                    <div class="container">
                        <font color="black"

                              <h2><p>My Job Vacancies</p></h2>

                        <?php
                        include '../connectDB.php';

                        //execute the SQL query and return records

                        $result = mysqli_query($conn, "SELECT * FROM job WHERE company_id = $company_id");


                        //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

                        echo'<div class="jumbotron">';

                        echo'<table class="table">';
                        echo' <thead>';
                        echo'  <tr>';

                        echo'   <th>Job ID</th>';
                        echo'   <th>Job Title</th>';
                        echo'  <th>Job Details</th>';
                        echo'  <th>Posted Date</th>';
                        echo'  <th></th>';

                        echo'</tr>';
                        echo'</thead>';
                        echo' <tbody>';
                        while ($row = mysqli_fetch_array($result)) {
                            $job_id = $row['job_id'];
                            echo'  <tr>';
                            echo"   <td>$job_id</td><td>$row[position]</td><td>$row[job_details]</td><td>$row[date]</td>";
                            ?>
                            <td>

                                <form  action="deleteVacancy.php" method="post">
                                    <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                                    <input type="submit" value="Delete Vacancy" class='btn btn-danger'>
                                </form>
                            </td>

                            <?php
                            if (!$row['Selected']) {
                                ?><td>

                                    <form  action="viewApplications.php" id="viewstudent" method="post">
                                        <input type="hidden" name="job_title" value="<?php echo $row['position'] ?>">
                                        <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                                        <input type="hidden" name="degree" value="*">
                                        <input type="hidden" name="year" value="*">
                                        <input type="submit" value="View Applications" class='btn btn-success'>
                                    </form>
                                </td>
                            <?php } else {
                                ?>
                                <td>

                                    <form  action="viewSelectedApplicant.php" id="viewstudent" method="post">
                                        <input type="hidden" name="job_title" value="<?php echo $row['position'] ?>">
                                        <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                                        <input type="hidden" name="student_id" value="<?php echo $row['Selected'] ?>">
                                        <input type="submit" value="View Selected Applicant" class='btn btn-success'>
                                    </form>
                                </td>
                                <?php
                            }
                            echo' </tr> ';
                        }
                        echo' </tbody>';
                        echo' </table>';

                        echo'</div>';

                        mysqli_close($conn);
                        ?> 

                        </font>
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



                    <footer class="container-fluid text-center footer">
                        <p>All Rights Reserved.</p>
                    </footer>
                </body>
                </html>

