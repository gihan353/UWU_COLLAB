
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
    
                body {
   background-image: url("images/S2.jpg");
   
}
    
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
    <h1 style="">ATTENDENCE LIST</h1>
    </div>
    
    <br>
    <br>
<div class="previousEvent">
    <?php
    
   // include("db.php");
   
$connect = mysqli_connect("localhost","root","","uwu_collab");

if($connect){
	//echo "successfuly connected";
}else{
	echo "connection failed";
}

echo "select workshop.event_name,st_name,ac_year FROM student t1 INNER JOIN workshop t2 ON (t1.st_id = t2.st_id) ";


    $Q="select workshop.event_name,st_name,ac_year FROM student t1 INNER JOIN workshop t2 ON (t1.st_id = t2.st_id) ";
$result = mysqli_query($connect,$Q);
echo("<table class='table'>");
echo("<thead>");
echo("<tr>");
echo("<th>");
echo "Event Name";
echo ("</th>");
echo("<th>");
echo "Student Name";
echo("</th>");


echo("<th>");
echo "Academic year";
echo("</th>");






echo("</thead>");
echo("</tr>");


while($row = mysqli_fetch_assoc($result)){
	$event_name = $row["event_name"];
	$st_name = $row["name"];
	$ac_year = $row["comment"];
	
        
        
        
	
	echo("<tr>");
	echo("<td>");
	echo $event_name."&nbsp";
	echo("</td>");
	

	

	echo("<td>");
	echo $st_name."&nbsp";
	echo("</td>");
	
	
	
	
	echo("<td>");
	echo $ac_year."&nbsp";
	echo("</td>");
	
	//echo("<br>");

	
        
	echo("</tr>");
	
	
}

echo("</table>");




    ?>
    
    </div>
</body>
</html>                            