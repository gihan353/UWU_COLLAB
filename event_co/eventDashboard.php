<?php
session_start();

if ($_SESSION['type'] == 'event_co') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} else {
    header("location: login.php");
}
?>

<?php  

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uwu_collab";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $time =  date('Y-m-d');
    
    
    $sql="SELECT * FROM event WHERE date >= '$time' order by date";
    
//echo $sql;

    if ($result=mysqli_query($conn,$sql))
      {
      // Fetch one and one row
      

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Event Section UI Design</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel ="style sheet" type="text/css" href ="style1.css">
        
        <link rel ="stylesheet" type = "text/css" href ="style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
        
        
        
        <style>
            
        body{
    
    margin:0;
    padding:0;
    font-family:'Roboto Condensed', sans-serif;
}

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
    height:10vh;
    
    
}


section .leftBox{
    width:50%;
    height:100%;
    float:left;
    padding:50px;
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

section .leftBox .content h1{
    margin:0;
    padding:0;
    font-size:50px;
    text-transform: uppercase;
    
}

section .leftBox .content p{
    margin: 10px 0 0;
    padding: 0;
    
}


section .events{
    position: relative;
    width:50%;
    height:100%;
    background: rgba(0,0,0,.5);
    float:right;
    box-sizing: border-box;
    
    
}
section .events ul{
    position: absolute;
    top: 50%;
    transform :translay(-50%);
    margin:0;
    padding:px;
    box-sizing: border-box;
}
section .events ul li{
    list-style: none;
    background: #fff;
    box-sizing: border-box;
    height: 200px;
   margin:15px 0;
    
}
section .events ul li .time {
    position: relative;
    padding: 20px;
    background : thistle;
    box-sizing: border-box;
    width :30%;
    height : 100%;
    float: left;
    text-align: center;
    transition: .5s;
    
}    
section .events ul li:hover .time{
    background:#e91e63;
}

section .events ul li .time h2{
    position:absolute;
    margin:0;
    padding:0;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color:#fff;
    font-size: 60px;
    line-height: 30px;
    
    
}
section .events ul li .time h2 span{
    font-size: 30px;
    
 }
 section .events ul li .details{
     padding:25px;
     background: #fff;
     box-sizing:border-box;
     width: 70%;
     height: 100%;
     float:left;
     
     
 }
 
 section .events ul li .details h3{
     position:relative;
     margin:0;
     padding:0;
     font-size:22px;
 }
 
 section .events ul li .details p{
     position:relative;
     margin:10px 0 0;
     padding:0px;
     font-size:16px;
 }
    
 section .events ul li .details a{
    display: inline_block;
    text-decoratio:none;
    text-transform:uppercase;
    padding:10px 15px;
    border: 2px solid #262626;
    margin-top: 15px;
    font-size:18px;
    transition: .5s;
    
 }
 section .events ul li .details a:hover{
    background: darkblue;
    color:#fff;
    border-color: lavender;
    
 }
 
 
 a.btn{
	margin:30px 10px;
	width:150px;
	padding:10px;
	border-radius:20px;
	
	
}
a.btn-first{
	background-color:darkblue;
	color:#fff;
}
a.btn-second{
	background:transparent;
	border: 1px solid darkblue;
	color: #fff;
}
a.btn:hover{
	background:darkblue;
	border:none;
	color:#fff;
	box-shadow:5px 5px 10px #999;
	transition:0.3s;
}
 
 
 
 
 
 
 
 
            .myclass{
	background-image: url("images/event5.jpg");

}
            
            
            
        </style>
        
        
    </head>
    <body class="myclass">
        
        
         <?php include './header.php'; ?>
        
        
        
        <section>
            <div class ="leftBox">
                <div class ="content">
                    <h1>End-to-end event management</h1>
<p>

Our comprehensive end-to-end event management service for associations spans a range of services including:

– Concept and strategy

– Venue sourcing

– Onsite presence

– Post event reporting

– Logistics management

– Delegate, sponsor and presenter logistics and management and much more…

 


</p>
      
<a class ="btn btn-first" href ="Add_event.php" >Create new Event</a>
<a class ="btn btn-second" href ="Previous_event.php">Show Previous Event</a>
<a class ="btn btn-first" href ="view_comment.php">View Comment</a>
<a class ="btn btn-second" href ="Budget repor upload.php">View Comment</a>

                </div>
            </div>
           <div class="events">
                   
                <ul>
                    <?php 
                    while ($row=mysqli_fetch_row($result)){
                    ?> 
                    <li>
                        <div class ="time">  
                            <h4><br><span><?php echo $row[2] ?></span><br><div><p><?php echo $row[1] ?> </p></div></h4> <br>   
                        </div>
                        
                        <div class="details" style="width:300px;">     
                            <h3><?php echo $row[3] ?></h3>
                            <p>
                                <?php echo $row[6] ?>
                            </p>            
                            <br>  
                        <a href ="edit.php?id=<?=$row[0]?>">View Details</a>
 
        
                           
 
                        </div>
                        <div style ="clear:both;">
                            
                        </div>
                        
                    </li>
                    <?php
                }
                    // Free result set
                    mysqli_free_result($result);
                  }

                
                ?>
                    
                </ul>
                   
                

 
           
        </section>
      
         <footer class="container-fluid text-center footer">
  <p>All Rights Reserved.</p>
</footer>
        
        
    </body>
</html>
