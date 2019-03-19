<?php
session_start();

if ($_SESSION['type'] == 'student') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} else {
    header("location: ../login.php");
}
?> 
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>new event details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .newEvent{
    	margin: 20px;
    }
    .h1{
        text-align: center;
    }
</style>
<?php include './header.php'; ?>
</head>
<body>
    <div class="h1">
    <h1 style="">AVAILABLE EVENT DETAILS</h1>
    </div>
    
    <br>
    <br>
<div class="newEvent">
    <form action="view_more.php" method="">
    <?php
    
    include("../connectDB.php");
    
$time =  date('Y-m-d');    

$result = mysqli_query($conn,"select * from event WHERE date >= '$time' order by date");
echo("<table class='table'>");
echo("<thead>");
echo("<tr>");
//echo("<th>");
//echo "Event_ID";
//echo ("</th>");
echo("<th>");
echo "Event Name";
echo("</th>");


echo("<th>");
echo "Place";
echo("</th>");



echo("<th>");
echo "Date";
echo("</th>");

echo("<th>");
echo"Event_type";
echo("</th>");



echo("</thead>");
echo("</tr>");


while($row = mysqli_fetch_array($result)){
	$event_id = $row["event_id"];
	$location = $row["location"];
	$date = $row["date"];
	$event_name = $row["event_name"];
	$event_type = $row["event_type"];
        
        
        $event_id = $row['event_id'];
        
        
       echo "<tr>";
//echo "<td>".$row['event_name']."</td>";
echo "<td> <a href='view_more.php?id=$event_id'>".$row['event_name']."</a> </td>";
echo "<td>" . $row['location'] .  "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['event_type'] . "</td>";
  
        

echo "</tr>";
	
}

echo("</table>");




    ?>
    </form>
    </div>
</body>
</html>                            

