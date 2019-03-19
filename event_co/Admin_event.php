
  <?php
include("connectDB.php");

$reg_date =date("Y/m/d");
//$co_id= $_GET["co_id"];

$sql ="SELECT * FROM event_coordinator WHERE registered_date='$reg_date'";
    
    
if ($result=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  
  // Free result set
  mysqli_free_result($result);
  }

  $sql1 ="SELECT * FROM event_coordinator ";
    
    
if ($result1=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount1=mysqli_num_rows($result1);
  
  // Free result set
  mysqli_free_result($result1);
  }
  
    $sql2 ="SELECT * FROM event ";
    
    
if ($result2=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount2=mysqli_num_rows($result2);
  
  // Free result set
  mysqli_free_result($result2);
  }
  
   $sql3 ="SELECT * FROM student ";
    
    
if ($result3=mysqli_query($connect,$sql))
  {
  // Return the number of rows in result set
  $rowcount3=mysqli_num_rows($result3);
  
  // Free result set
  mysqli_free_result($result3);
  }
  
mysqli_close($connect);

    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <style>
      
      
        #image_div{
  background-image:url("uwu.jpg");
  width:120%;
  height:610px;
  background-repeat:no-repeat;
  background-size:cover;
        }
        
        
        body {
   background-image: url("images/admin.jpg");
   background-color: #cccccc;
}
  </style>
  
  
</head>
<body>
 
<div class="container">
    <div  class ="col-md-6 well">
           <div class="panel panel-info">
                        <div class="panel-heading">
  <h2>DASHBOARD FOR EVENT</h2>
                        </div>
  <div calss="row">
      <div class="col-lg-6">
  <div class="panel-group">
     
      <br><br>
    
      <div class="row">
<div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">New organizers registered today
          </div>
        <div class="panel-body">
            <?php
          echo  $rowcount;
            ?>
            
                
            </p>
        </div>
    </div>
</div></div><br>
          

 <div class="row">
<div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">Total Organizers</div>
      <div class="panel-body"><?php echo $rowcount1     ?></div>
    </div>
</div>
 </div><br>
 
   
    
    
    
 <div class="row">
<div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">Total User
      </div>
      <div class="panel-body"></div>
    </div>
</div></div><br>
    
 <div class="row">
<div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">Total Event Till Date</div>
      <div class="panel-body">
          <?php
         echo $rowcount2;
          ?>
      </div>
    </div></div></div><br>

    <div>
    </div>
    
  </div>
          
</div>
  </div>
               <br><br>
    <div class="row">
<div class="col-lg-6">  
 <div class="btn-group-vertical">
     <button type="button" class="btn btn-primary" onclick ="window.location='attendence.php'">Attendence List</button><br>
     <button type="button" class="btn btn-primary">See organizer List</button><br>
     <button type="button" class="btn btn-primary">See User List</button><br>
     <br><br><br><br><br><br><br><br><br>
     <button type="button" class="btn btn-warning">Block User</button><br>
</div>
</div>
    </div></div></div>
    <div id="image_div"></div>
    
</div>
  
    
    
</body>
</html>
