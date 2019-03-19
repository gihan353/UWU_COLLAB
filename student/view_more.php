
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>participation details</title>
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
</head>
<body>
    <div class="h1">
    <h1 style="">Confirm Your Participation</h1>
    </div>
    
    <br>
    <br>
<div class="newEvent">
    <form>




<?php

include("connectDB.php");
$event_id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM event WHERE  event_id='$event_id'");
//echo $result;
echo ("<table width=100% class='table'>");
    echo "<thead>";
echo "<tr>

<th>event name</th>
<th>location</th>
<th>date</th>
<th>description</th>
<th>Participation</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['event_name'] .  "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['description'] . "</td>";

  
        echo("<td>");
        echo ("<a href='participate.php?id=".$row['event_id']."'>Participate</a>");
        echo ("</td>");
        
//         echo("<td>");
//        echo ("<a href='delete_event.php?id=".$row['event_id']."'>DELETE</a>");
//        echo ("</td>");
//        
        
echo "</tr>";
}

echo "</table>";







?>
 </form>
    </div>
</body>
</html>                            

