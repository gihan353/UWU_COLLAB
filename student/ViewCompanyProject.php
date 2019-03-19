<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>View Company Details</title>

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
                background-image: url("");

            }


        </style>
    </head>

    <body  class="myclass" style="">



        <section>
        </style>






    </head>
    <body >

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">UWU COLLAB</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Students</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact Us</a></li>
                </ul>

                <form class="navbar-form navbar-right" action="/action_page.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
        </nav>



    <body>
        <div class ="container">
            <div class= "row">
                <font style="center">
                <div class = "col-sm-6 banner-info background-color:lightblue" >
                    <div class="leftBox">
                        <div class="content">
                            <h2 align="center"><b>Company Project Request Details </b></h2>

                            <div class = "col-sm-6 banner-image">


                            </div>
                        </div>
                    </div>
                    </header>
                    </section>
                    <div class="container">
                        <b><font color="black"</b>


                        <?php
                        $username = "root";
                        $password = "";
                        $hostname = "localhost";
                        $db = "uwu_collab";

                        //connection to the database
                        $conn = mysqli_connect($hostname, $username, $password, $db)
                                or die("Unable to connect to MySQL");

                        //execute the SQL query and return records

                        $result = mysqli_query($conn, "SELECT * FROM projectrequest WHERE selectedStudent IS NULL");


                        //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

                        echo'<div class="container">';

                        echo'<table class="table">';
                        echo' <thead>';
                        echo'  <tr>';

                        echo'   <th>CompanyName</th>';
                        echo'   <th>CompanyType</th>';
                        echo'  <th>ProjectName</th>';
                        echo'  <th>ProjectType</th>';
                        echo'  <th>Technology</th>';
                        echo'  <th>StartDate</th>';
                        echo'  <th>CompletionDate</th>';


                        echo'</tr>';
                        echo'</thead>';
                        echo' <tbody>';
                        while ($row = mysqli_fetch_array($result)) {
                            echo'  <tr>';
                            echo"    <td>$row[CompanyName]</td><td>$row[CompanyType]</td><td>$row[ProjectName]</td><td>$row[ProjectType]</td><td>$row[Technology]</td><td>$row[StartDate]</td><td>$row[CompletionDate]</td>";
                            ?>
                            <td>

                                <form  action="StudentMessage.php" method="post">
                                    <input type="hidden" name="projectrequest_id" value="<?php echo $row['projectrequest_id']; ?>">
                                    <input type="submit" value="Apply" class='btn btn-success'>
                                </form>
                            </td>

    <?php
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
