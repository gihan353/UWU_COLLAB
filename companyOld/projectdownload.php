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
<html>
    <head>
	<title>Download Project Report</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	background-image: url("images/25.jpg");

}

</style>
   </head>


<body  class="myclass" style="">


	
    <section>


<header class="header">
<?php include './header.php'; ?>
  </div>
          </div>
        </div>
      </div>
	       
    </head>

   
    <body>
        
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


<body  class="myclass" style="">


	
    <section>
	
<div class ="container">
<div class= "row">

<div class = "col-sm-6 banner-info background-color:lightblue" >
    <div class="leftBox">
        <div class="content">
    




        

           

    <h1 align="center"> Download Project Reports</h1>

            <?php
            $query = "SELECT path FROM project_report";

            $result = mysqli_query($conn, $query) or die('Error, query failed');

            if (mysqli_num_rows($result) == 0) {

                echo "Database is empty";
            } else {

                while ($path = mysqli_fetch_array($result)) {
                    ?>

    <a href="uploads/<?php echo $path['path']; ?>">Download</a><br></br>
                       


                    <?php
                }
            }
            ?>
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
 

         </section>
       <footer class="container-fluid text-center footer">
<font size="2">
  <p>All Rights Reserved.</p></font>
  </style>
</footer>  
 
    </body>
</html>


