<!--<html>
    <head>
        <title></title>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
  
        
        
    </head>
    <body>-->
<?php

include("connectDB.php");
 if (isset($_GET['eid'])){
     $event_id = $_GET['eid'];
     echo $event_id;
     //$sql ="DELETE FROM event where event_id='$event_id'";
    //$res = mysql_query($sql) or die("Failed".mysql_error());
     $sql = "DELETE FROM event WHERE event_id= $event_id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
 }
?>
        
<!--        
        <form name="form1" method="post" action="delete_event.php">
            <div class="container">
                <div  class ="col-md-6 well">   
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="container"><h2>confirm your action</h2></div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                        </div> 


                        <div class="panel-body" >
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                        </div>
                        <p class="alert alert-danger">Do you really want to execute this action</p>
                        
                        <button type="button" class="btn btn-success">YES</button>
                        <button type="button" class="btn btn-warning">Cancel</button>
                        
                    </div></div></div>

                            </form>-->

        
        
        
<!--    </body>
</head>-->