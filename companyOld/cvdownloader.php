<?php
session_start();

if ($_SESSION['type'] == 'company') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $company_type = $_SESSION['company_type'];
    $email = $_SESSION['email'];
} else {
    header("location: login.php");
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




        <meta charset="UTF-8">
        <title>Download CV</title>


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



        </style>
    </head>
    <body>

        <?php include './header.php'; ?>
        <pre>

            <?php
            $username = "root";
            $password = "";
            $hostname = "localhost";
            $db = "uwu_collab";

            //connection to the database
            $conn = mysqli_connect($hostname, $username, $password, $db)
                    or die("Unable to connect to MySQL");

            if (isset($_GET['path'])) { // if id is set then get the file with the id from database
                $path = $_GET['path'];

                $query = "SELECT path FROM cv WHERE path = $path";

                $result = mysqli_query($query) or die('Error, query failed');

                list($path) = mysql_fetch_array($result);

                header("Content-length: $size");

                header("Content-type: $type");

                header("Content-Disposition: attachment; filename=$path");

                echo $content;
                exit;
            }
            ?>

    <h1> Download CV</h1>

            <?php
            $query = "SELECT * FROM job as j INNER JOIN student_job as sj on j.job_id=sj.job_id INNER JOIN student as s on sj.st_id=s.st_id WHERE j.company_id='" . $_SESSION['company_id'] . "'";

            $result = mysqli_query($conn, $query) or die('Error, query failed');

            if (mysqli_num_rows($result) == 0) {

                echo "Database is empty";
            } else {
                /*
                  while ($path = mysqli_fetch_array($result)) {
                  ?>

                  <a href="uploads/<?php echo $path['path']; ?>">Download</a>



                  <?php
                  } */

                echo'<div class="container">';

                echo'<table class="table">';
                echo' <thead>';
                echo'  <tr>';
                //echo'  <th>Job ID</th>';
                echo'  <th>Title</th>';
                echo'  <th>Student Name</th>';
                echo'   <th>Date</th>';



                echo'</tr>';
                echo'</thead>';
                echo' <tbody>';
                while ($row = mysqli_fetch_array($result)) {
                    echo'  <tr>';
                    echo"    <td>" . $row['position'] . "</td><td>" . $row['st_name'] . "</td><td>" . $row['sj_date'] . "</td>
           
           <td>   <a href='uploads/" . $row['path'] . "' class='btn btn-success'>Download</button> </td>";
                    echo' </tr> ';
                }
                echo' </tbody>';
                echo' </table>';

                echo'</div>';
            }
            ?>

        </pre>
        <footer class="container-fluid text-center footer">
            <p>All Rights Reserved.</p>
        </footer>

    </body>
</html>
