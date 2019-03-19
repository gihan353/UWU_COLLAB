 
<html>
    <head>
           <title>UPLOAD IMAGES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
        <title>
            
        </title>
  <style>
    body {
   background-image: url("images/S2.jpg");
   
}
</style>
    </head>
    
 
    <body>
        
      <div class="container text-center">    
  <div class="row" bgcolor="broun">
    <div class="col-sm-12 well">
     
      
      
        <form action="#" method="post" enctype="multipart/form-data">
            <h1>UPLOAD IMAGES</h1>
            <input type="file" name="img">
            <br><br>
            
            <input type="submit" name="submit"  value="upload"style="margin-top:10px; height:35px; width:75px;"/>
        </form>
    
<?php

//include ("db.php");

set_error_handler(function($errno, $errstr) {
    return strpos($errstr, 'mysql_') === 0;
}, E_DEPRECATED);

        mysql_connect('localhost','root','');
        mysql_select_db('uwu_collab');
        if(isset($_POST['submit'])){
            $filename= addslashes($_FILES["img"]["name"]);
            /* @var $tmpname type */
            $tmpname= addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
            $filetype= addslashes($_FILES["img"]["type"]);
            $array=array('jpg','jpeg');
            $ext= pathinfo($filename,PATHINFO_EXTENSION);
            if(!empty($filename)){
                if(in_array($ext,$array)){
                mysql_query("INSERT into image(name,image)values('$filename','$tmpname')");    
                }
            
            else{
                echo"unsupported format";
            }
            }
            else{
                echo"please select the image";
            }
            }
            //display
            $res=mysql_query("SELECT * from image");
            while($row=mysql_fetch_array($res)){
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="250" height="250">';
                echo "<br> <br> <br> <br> <br>";
            }
            ?>
        
        </div>
  </div>
      </div>
    </body>
       </html>