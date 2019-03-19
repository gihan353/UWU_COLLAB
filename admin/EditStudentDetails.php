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
        <title> Edit student Details</title>

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
            <h1>Student Details</h1>
            <p><h4>Students Those who are registered for our System</h4></p>

        <?php
        
        include '../connectDB.php';
        if (!empty($_GET['st_id'])) {

            // check if the username has been set    



            $result = mysqli_query($conn, "DELETE FROM student WHERE st_id='$_GET[st_id]'");
            //header("Location: UserActivate.php");
            echo $result;
            echo mysqli_error($conn);
        } 
        //execute the SQL query and return records

        $result = mysqli_query($conn, "SELECT * FROM student");


        //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

        echo'<div class="container">';
        echo '<div class="jumbotron">';
        echo'<table class="table">';
        echo' <thead>';
        echo'  <tr>';
        //echo'  <th>St_ID</th>';
        echo'   <th>Student Name</th>';
        echo'   <th>Gender</th>';
        echo'  <th>DOB</th>';
        echo'  <th>Faculty</th>';
        echo'  <th>Department</th>';
        echo'  <th>Degree</th>';
        echo'  <th>Ac_Year</th>';
        echo'  <th>address</th>';
        echo'  <th>Email</th>';
        echo'</div>';

        echo'</tr>';
        echo'</thead>';
        echo' <tbody>';
        while ($row = mysqli_fetch_array($result)) {
            echo'  <tr>';
            echo"    <td>$row[st_name]</td><td>$row[gender]</td><td>$row[DOB]</td><td>$row[faculty]</td><td>$row[department]</td><td>$row[degree]</td><td>$row[ac_year]</td><td>$row[address]</td><td><a href ='sendEmail.php'?st_id=$row[st_id]>$row[email]</a></td>
           
          <td>       <a href='UpdateStudentDetails.php?st_id=" . $row['st_id'] . "' class='btn btn-primary'>Edit</button> </td>";
            echo' </tr> ';
        }
        echo' </tbody>';
        echo' </table>';

        echo'</div>';

        if (isset($_GET['post_update']) && $_GET['post_update'] == "true") {
            echo '<script language ="javascript" >';
            echo 'alert("Updated Succesfully!");';
            echo '</script>';
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