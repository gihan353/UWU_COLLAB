<?php
session_start();

if ($_SESSION['type'] == 'admin') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
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
        <title>view vacancy</title>

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

        <?php include 'AdminHeader.php'; ?>



        <div class="container">
            <h2>Job Vacancies</h2>

            <p>This is the Job Vacancies of different Companies in IT industry.</p>

            <?php
            
            include '../connectDB.php';

            //execute the SQL query and return records

            $result = mysqli_query($conn, "SELECT * FROM `job` INNER JOIN company on job.company_id=company.company_id");


            //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

            echo'<div class="container">';

            echo '<div class="jumbotron">';
            echo'<table class="table">';

            echo' <thead>';
            echo'  <tr>';
            // echo'  <th>Job ID</th>';
            echo'  <th>Company Name</th>';
            echo'  <th>Company Type</th>';
            echo'  <th>Email</th>';
            echo'   <th>Position</th>';
            echo'   <th>Job Details</th>';
            echo'   <th>Date</th>';
            echo'</div>';

            echo'</tr>';
            echo'</thead>';
            echo' <tbody>';
            while ($row = mysqli_fetch_array($result)) {
                echo'  <tr>';
                echo"    <td>$row[company_name]</td><td>$row[company_type]</td><td>$row[email]</td><td>$row[position]</td><td>$row[job_details]</td><td>$row[date]</td>";
                echo' </tr> ';
            }
            echo' </tbody>';
            echo' </table>';

            echo'</div>';

            mysqli_close($conn);
            ?> 


        </div>
    </div>




    <footer class="container-fluid text-center footer">
        <p>All Rights Reserved.</p>
    </footer>
</body>
</html>