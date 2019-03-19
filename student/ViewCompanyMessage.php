 <!DOCTYPE html>
 <?php
include "header.php"; 
 ?>
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

        

    
<body>
<div class ="container">
<div class= "row">
    <font style="center">
<div class = "col-sm-6 banner-info background-color:lightblue" >
    <div class="leftBox">
        <div class="content">
            <h2 align="center"><b>View Company Message</b></h2>

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

            $result = mysqli_query($conn, "SELECT * FROM companymsg");


            //fetch tha data from the database
//    while ($row = mysqli_fetch_array($result)) {

            echo'<div class="container">';

            echo'<table class="table">';
            echo' <thead>';
            echo'  <tr>';
            
            echo'   <th>Sender</th>';
            echo'   <th>Receiver</th>';
            echo'  <th>Subject</th>';
            echo'  <th>Message</th>';
           

            echo'</tr>';
            echo'</thead>';
            echo' <tbody>';
            while ($row = mysqli_fetch_array($result)) {
                echo' <tr>';
                echo" <td>$row[Sender]</td><td>$row[Receiver]</td><td>$row[Subject]</td><td>$row[Msg]</td>
           
           <td>  </td>";
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


