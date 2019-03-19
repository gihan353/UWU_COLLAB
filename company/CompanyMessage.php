

<?php
include "header.php";
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
<title>Company Message</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Company Message</title>

       <style>
            .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:black;
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
	background-image: url("");

}

			
        </style>
    </head>
    
	<body  class="myclass" style="">


	
    <section>


    </head>
    <body>

       
 </div>
</div>
</div>
</div>
<style>

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .mobile-container {
        max-width: 480px;
        margin: auto;
        background-color: #555;
        height: 500px;
        color: white;
        border-radius: 10px;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
        position: relative;
    }

    .topnav #myLinks {
        display: none;
    }

    .topnav a {
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
    }

    .topnav a.icon {
        background: black;
        display: block;
        position: absolute;
        right: 0;
        top: 0;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .active {
        background-color: #4CAF50;
        color: white;
    }
</style>
</head>
<body>
<div class ="container">
<div class= "row">

<div class = "col-sm-6 banner-info background-color:lightblue" >
    <div class="leftBox">
        <div class="content">
            <h2 align="center"><b> Send Message </b></h2>

        <div class = "col-sm-6 banner-image">


</div>
</div>
</div>
</header>
</section>


 <div class="container"> 

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 jumbotron">

            <div class="panel panel-info" >
                <div class="panel-heading">

                    <div class="panel-title"><h2> Company Message</h2></div>

                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="signupform" class="form-horizontal" role="form" method="POST" action="CompanyMessage.php">

                        <div class="form-group">
                            <label for="Sender" class="col-md-3 control-label"> Sender:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="Sender" placeholder="Sender">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Receiver" class="col-md-3 control-label">Receiver:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="Receiver" placeholder="Receiver">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="Subject" class="col-md-3 control-label">Subject:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="Subject" placeholder="Subject">    
                            </div>
                        </div>
                        <br><br>

                        <label> Message:</label>
                        <textarea name="Message" rows="4" cols="50">

                        </textarea>
                        <br><br>



                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-9">
                                <input id="btn-signup" type="submit" class="btn btn-info" value="Submit"><i class="icon-hand-right"></i> 
                                <span style="margin-left:8px;"></span>  
                            </div>
                        </div>
                    </form>    
                </div>                     
            </div>  
        </div>
    </div>




   
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uwu_collab";

    $Sender = $_POST['Sender'];
    $Receiver = $_POST['Receiver'];
    $Subject = $_POST['Subject'];
    $message = $_POST['Message'];




    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql2 = "INSERT INTO companymsg (Sender,Receiver,Subject,Msg) VALUES ('$Sender','$Receiver','$Subject','$message')";


    if (mysqli_query($conn, $sql2)) {


        echo'<div class="alert alert-success" role="alert">
  New record created successfully!
</div>';
    } else {
        // echo "Error: " . $sql1 . "<br>" . $conn->error;
        echo $sql2;
        echo'<div class="alert alert-danger" role="alert">
                    
  Errors
</div>';
    }

    $conn->close();
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
        <p>All Rights Reserved.</p>
    </footer>
</body>






