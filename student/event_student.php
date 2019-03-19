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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Coordinator dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="../engine1/style.css" />
<!--script type="text/javascript" src="engine1/jquery.js"></script-->
<!-- End WOWSlider.com HEAD section -->
  
  
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="../engine2/style.css" />
	<!--script type="text/javascript" src="engine2/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section -->
  
  
  
  
  
  
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
</style>
<?php include './header.php'; ?>
</head>
<body>

  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="../images/student.jpg" class="img-circle" height="65" width="65" alt="Profile">
      </div>
      <div class="well">
        <p><a href="new_events.php">Available Events</a></p>
       
      </div>
      <div class="well">
         <p><a href="vacancy.html">Event you already joined</a></p>
       
      
      </div>
        
        <div class="well">
         <p><a href="feedback_table.php">Give feedback</a></p>
       
      
      </div>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-center">
            <div class="panel-body">
              <p contenteditable="true"><h2>EVENT DASHBOARD</h2></p>
              
            </div>
          </div>
        </div>
          
          
           <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container2">
	<div class="ws_images"><ul>
		<li><img src="../data2/images/events_with_us.jpg" alt="EVENTS_WITH_US" title="EVENTS_WITH_US" id="wows2_0"/></li>
		<li><a href="http://wowslider.net"><img src="../data2/images/plan.jpg" alt="html slideshow" title="PLAN" id="wows2_1"/></a></li>
		<li><img src="../data2/images/uwu_collab.png" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="EVENTS_WITH_US"><span><img src="../data2/tooltips/events_with_us.jpg" alt="EVENTS_WITH_US"/>1</span></a>
		<a href="#" title="PLAN"><span><img src="../data2/tooltips/plan.jpg" alt="PLAN"/>2</span></a>
		<a href="#" title="UWU COLLAB"><span><img src="../data2/tooltips/uwu_collab.png" alt="UWU COLLAB"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="../engine2/wowslider.js"></script>
	<script type="text/javascript" src="../engine2/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
        <br><br>
        <p style="font-family: cooper;">Creative vision , through processing and incorporation of new generation friendly, dynamic fresh ideas and concepts
        enable us to introduce innovative and reliable designs in all cases
        </p>
          
          
          
      </div>
      
      
      
    </div>

   
  </div>
</div>


</body>
</html>
