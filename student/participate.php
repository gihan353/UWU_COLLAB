<?php
session_start();
include ('connectDB.php');
//getting id from url

if(isset($_GET["update"])){
    echo "<script>";
     echo "alert('successfully confirmed your participation');";
     echo "</script>";
}
if(isset($_GET["id"])){
$event_id = $_GET['id'];
$_SESSION["event_id"] = $event_id;

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM event WHERE event_id=$event_id");

while ($res = mysqli_fetch_array($result)) {
    $event_name = $res['event_name'];
    $location = $res['location'];
    $date = $res['date'];
   $event_type = $res['event_type'];
//    $description = $res['description'];
}
}
if (isset($_POST["update"])) {

    $event_id = $_SESSION["event_id"];
    $event_name = $_POST["event_name"];
//    $event_name = $_POST["event_name"];
    $location = $_POST["location"];
    $date = $_POST["date"];
   $event_type = $_POST["event_type"];

    $res = mysqli_query($conn, "insert into workshop (event_name,location,date,event_type) values('$event_name ','$location','$date','$event_type')");
    if ($res) {
        header("location:participate.php?id=$event_id&update=success");
    }
}
?>
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


        <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
        <link rel="stylesheet" type="text/css" href="engine2/style.css" />
        <!--script type="text/javascript" src="engine2/jquery.js"></script-->
        <!-- End WOWSlider.com HEAD section -->

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <body>

        <form name="form1" method="post" action="participate.php">
            <div class="container">
                <div  class ="col-md-6 well">   
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><h2>CONFIRM PARTICIPATION</h2></div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                        </div> 


                        <div class="panel-body" >
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>



                            <div class="form-group">
                                <label for="eventname" class="col-md-3 control-label">event_name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="event_name" value=<?php echo
$event_name;
?>>

                                </div>
                            </div>

                            <br><br>

                            <div class="form-group">
                                <label for="name" class="col-md-3 control-label">Location</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="location" value=<?php echo
$location;
?>>

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
                                    <input type="text" class="form-control" name="date" value=<?php echo
$date;
?>>

                                </div>
                            </div>
                            <br><br>



                            <div class="form-group">
                                <label for="type" class="col-md-3 control-label">Event Type</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="event_type" value=<?php echo
$event_type;
?>>

                                </div>
                            </div>
                            <br><br>




                            <br><br>


                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit"   name="update" value="join" class="btn btn-info" >
                                    <span style="margin-left:8px;"></span> 
                                </div></div>



                        </div>
                    </div>
                </div>
        </form> 

        <div class="wow">
            <div class="col-md-6 well" >  
                <div class="panel-heading">
                    <div class="panel-title"><h2 style="font-family: boulder">COLLAB EVENTS</h2></div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
                </div> 
                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                <div id="wowslider-container2">
                    <div class="ws_images"><ul>
                            <li><img src="data2/images/events_with_us.jpg" alt="EVENTS_WITH_US" title="EVENTS_WITH_US" id="wows2_0"/></li>
                            <li><a href="http://wowslider.net"><img src="data2/images/plan.jpg" alt="html slideshow" title="PLAN" id="wows2_1"/></a></li>
                            <li><img src="data2/images/uwu_collab.png" alt="UWU COLLAB" title="UWU COLLAB" id="wows2_2"/></li>
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

    </body>