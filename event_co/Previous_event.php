
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Previous event details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .previousEvent{
    	margin: 20px;
    }
    .h1{
        text-align: center;
    }
</style>
</head>
<body>
    <div class="h1">
    <h1 style="">PREVIOUS EVENT DETAILS</h1>
    </div>
    
    <br>
    <br>
<div class="previousEvent">
    <?php
    
    include("connectDB.php");
    
    $time =  date('Y-m-d');

$result = mysqli_query($conn,"select * from event WHERE date < '$time' order by date");
echo("<table class='table'>");
echo("<thead>");
echo("<tr>");
echo("<th>");
echo "Event_ID";
echo ("</th>");
echo("<th>");
echo "Place";
echo("</th>");


echo("<th>");
echo "Date";
echo("</th>");



echo("<th>");
echo "EventName";
echo("</th>");

echo("<th>");
echo"Event_type";
echo("</th>");

echo ("<th>");
echo "Upload images";
echo ("</th>");


echo("</thead>");
echo("</tr>");


while($row = mysqli_fetch_array($result)){
	$event_id = $row["event_id"];
	$location = $row["location"];
	$date = $row["date"];
	$event_name = $row["event_name"];
	$event_type = $row["event_type"];
        
        
        
        
        
	
	echo("<tr>");
	echo("<td>");
	echo $event_id."&nbsp";
	echo("</td>");
	

	

	echo("<td>");
	echo $location."&nbsp";
	echo("</td>");
	
	
	
	
	echo("<td>");
	echo $date."&nbsp";
	echo("</td>");
	
	//echo("<br>");

	echo("<td>");
	echo $event_name."<br>";
	echo("</td>");
        
        echo("<td>");
	echo $event_type."<br>";
	echo("</td>");
        
        echo("<td>");
        echo ("<a href='in.php'>upload</a>");
        echo ("</td>");
        
	echo("</tr>");
	
	
}

echo("</table>");




    ?>
    
    </div>
</body>
</html>                            