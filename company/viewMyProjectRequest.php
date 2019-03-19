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
        <title>My Project Requests</title>

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
                            <h2 align="center"><b> My project requests</b></h2>

                            <div class = "col-sm-6 banner-image">


                            </div>
                        </div>
                    </div>
                    </header>
                    </section>

                    <div class="container">
                        <font color="black"

                              <h2><p>My project requests</p></h2>

                        <?php
                        include '../connectDB.php';

                        //execute the SQL query and return records

                        $result = mysqli_query($conn, "SELECT * FROM projectrequest WHERE company_id = $company_id");


                        //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

                        echo'<div class="jumbotron">';

                        echo'<table class="table">';
                        echo' <thead>';
                        echo'  <tr>';

                        echo'   <th>Project Request ID</th>';
                        echo'   <th>Project Name</th>';
                        echo'   <th>Project Type</th>';
                        echo'  <th>Technology</th>';
                        echo'  <th>Start Date</th>';
                        echo'  <th>Completion Date</th>';
                        echo'  <th></th>';

                        echo'</tr>';
                        echo'</thead>';
                        echo' <tbody>';
                        while ($row = mysqli_fetch_array($result)) {
                            $projectrequest_id = $row['projectrequest_id'];
                            echo'  <tr>';
                            echo"   <td>$projectrequest_id</td><td>$row[ProjectName]</td><td>$row[ProjectType]</td><td>$row[Technology]</td><td>$row[StartDate]</td><td>$row[CompletionDate]</td>";
                            ?>
                            <td>

                                <form  action="deleteProjectRequest.php" method="post">
                                    <input type="hidden" name="projectrequest_id" value="<?php echo $projectrequest_id; ?>">
                                    <input type="submit" value="Delete Project Request" class='btn btn-danger'>
                                </form>
                            </td>

                            <?php if (!$row['selectedStudent']) { ?>
                                <td>

                                    <form  action="viewProjectMessage.php" id="viewstudent" method="post">
                                        <input type="hidden" name="ProjectName" value="<?php echo $row['ProjectName'] ?>">
                                        <input type="hidden" name="projectrequest_id" value="<?php echo $projectrequest_id; ?>">
                                        <input type="hidden" name="degree" value="*">
                                        <input type="hidden" name="year" value="*">

                                        <input type="submit" value="View Messages" class='btn btn-success'>
                                    </form>
                                </td>
                                <?php
                            } else {
                                $st_id = $row['selectedStudent'];
                                $query2 = "SELECT * FROM student WHERE st_id={$st_id} LIMIT 1";

                                $result_set = mysqli_query($conn, $query2);

                                if ($result_set) {

                                    if (mysqli_num_rows($result_set) == 1) {

                                        $result2 = mysqli_fetch_assoc($result_set);
                                        $name = $result2['st_name'];

                                    }
                                }
                               
                               echo " <td> $name selected </td> ";
                                
                                
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

