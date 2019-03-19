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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
<title>View Student Project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>View Student Project</title>

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
            <h2 align="center"><b> Student Project Details </b></h2>

            <div class = "col-sm-6 banner-image">


</div>
</div>
</div>
</header>
</section>

        <div class="container">
            <font color="black"
            
                  <h2><p>Students Those who are registered for our System</p></h2>

            <?php
            
            include '../connectDB.php';

            //execute the SQL query and return records

            $result = mysqli_query($conn, "SELECT * FROM studentproject");


            //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

            echo'<div class="container">';

            echo'<table class="table">';
            echo' <thead>';
            echo'  <tr>';
           
            echo'   <th>Student_Id</th>';
            echo'   <th>Student_name</th>';
            echo'  <th>Degree</th>';
            echo'  <th>Year</th>';
            echo'  <th>Email</th>';
            echo'  <th>project_type</th>';
            echo'  <th>interest_area</th>';
            echo'  <th>Java</th>';
            echo'  <th>php</th>';
            echo'  <th>JSP</th>';
            echo'  <th>ASP</th>';
            echo'</tr>';
            echo'</thead>';
            echo' <tbody>';
            while ($row = mysqli_fetch_array($result)) {
                echo'  <tr>';
                echo"   <td>$row[Student_Id]</td><td>$row[Student_name]</td><td>$row[Degree]</td><td>$row[year]</td><td>$row[Email]</td><td>$row[project_type]</td><td>$row[interest_area]</td><td>$row[Java]</td><td>$row[PHP]</td><td>
           
           $row[JSP]</td><td>$row[ASP]</td><td> </td>";
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

