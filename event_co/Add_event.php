





<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
  
  
  <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<!--script type="text/javascript" src="engine1/jquery.js"></script-->
<!-- End WOWSlider.com HEAD section -->
  
  
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <style>
            
           .footer{
		background-color: black;
		height: 70px;
		text-align: center;
		color: white;
	} 
        
        
    
            
        </style>
        
        
        
        
        
    
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<!--script type="text/javascript" src="engine2/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>
    <body>
        
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UWU COLLAB</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Students</a></li>
          <li><a href="#">Company</a></li>
          <li><a href="#">Projects</a></li>
           <li><a href="#">Events</a></li>
        </ul>
      </li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
</nav>


        
        
        <?php
        
        
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
//$event_id = $_POST["event_id"];
    include("connectDB.php");
    
$location  = $_POST["location"];
$date = $_POST["date"];
$event_name = $_POST["event_name"];
$event_type = $_POST["event_type"];
$co_id = $_POST["co-id"];
$description = $_POST["description"];





$result = mysqli_query($conn,"insert into event (location,date,event_name,event_type,co_id,description) values('$location ','$date','$event_name','$event_type','$co_id','$description')");


echo ("<br>");

if($result){
	echo "successfuly saved";
	
}
else{
	
	echo "save failed";
}







}
?>


        
        
        
        
        
        
        
        
        
        
        
        <form action = "Add_event.php" method="post">
           
            <div class="container">
               
                
                
            
        
                
             
<div  class ="col-md-6 well">
           <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><h2>Add Event</h2></div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                        </div>  
                        <div class="panel-body" >
                           
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                               
                                
                                <br><br>

                                 <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">Location</label>
                                    <div class="col-md-9">
                                                                            <select class="form-control" name="location">
                                                                                <option>select</option>                                                                            
<option>E1</option>
<option>E3</option>
<option>MLT</option>
<option>MCL</option>
<option>D Lab</option>
<option>C Lab</option>
<option>A1</option>
</select>
                                    </div>
                                </div>
                                
                                <br><br>
                                
                                 <div class="form-group">
                                    <label for="date" class="col-md-3 control-label">Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="date" placeholder="Enter date">
                                    </div>
                                </div>
                                <br><br>
                                
                                
                                <div class="form-group">
                                    <label for="eventname" class="col-md-3 control-label">event_name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="event_name" placeholder="Enter Event name">
                                    </div>
                                </div>

                                <br><br>
                                
                                <div class="form-group">
                                    <label for="e_type" class="col-md-3 control-label">event type</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="event_type" placeholder="Enter event type">
                                    </div>
                                </div>
                                    
                                <br><br>
                               
                                 <div class="form-group">
                                    <label for="id" class="col-md-3 control-label">co-ordinator id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="co-id" placeholder="Enter_id">
                                    </div>
                                </div>
                                <br><br>
                                <label>Description</label>
                                <textarea rows="4" cols="50" name="description">

</textarea>
                                <br><br>
                                
                                
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit"   name="submit" value="save" class="btn btn-info" >
                                        <span style="margin-left:8px;"></span> 
                                        
                                        
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp reset</button>
                                        <span style="margin-left:8px;"></span>
                                    </div>
                                </div>
                              
                                </div>
                                
               
    
               
               
                            
                    
               </div>
    
    
          
          
    
    
           </div>
                
                
               
         <div class="wow">
                     <div class="col-md-6 well" >  
                 <div class="panel-heading">
                            <div class="panel-title"><h2 style="font-family: boulder">COLLAB EVENTS</h2></div>
                           <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                        </div> 
                   <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container2">
	<div class="ws_images"><ul>
                <li><img src="../images/events_with_us.jpg" alt="EVENTS_WITH_US" title="EVENTS_WITH_US" id="wows2_0"/></li>
		<li><a href="http://wowslider.net"><img src="../images/plan.jpg" alt="html slideshow" title="PLAN" id="wows2_1"/></a></li>
		<li><img src="../images/uwu_collab.png" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="EVENTS_WITH_US"><span><img src="data2/tooltips/events_with_us.jpg" alt="EVENTS_WITH_US"/>1</span></a>
		<a href="#" title="PLAN"><span><img src="data2/tooltips/plan.jpg" alt="PLAN"/>2</span></a>
		<a href="#" title="UWU COLLAB"><span><img src="data2/tooltips/uwu_collab.png" alt="UWU COLLAB"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css slider</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine2/wowslider.js"></script>
	<script type="text/javascript" src="engine2/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
        <br><br>
        <p style="font-family: cooper;">Creative vision , through processing and incorporation of new generation friendly, dynamic fresh ideas and concepts
        enable us to introduce innovative and reliable designs in all cases
        </p>
        
                     </div>
                </div>
                
               
           
            
                
            
            
         </div>

               
           
    
        </form>
 
        	
       
  







                            
                              </body>
</html>


