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
        <title>Project Upload</title>
		

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
  
     
  
         section{
    width:100%;
    height:5vh;
    
    
}
  
 section .leftBox{
        width:60%;
    height:5%;
    float:left;
    padding:0;
    box-sizing: border-box;
  }

  section .leftBox .content{
    color:#fff;
    background:rgba(0,0,0,.5);
    padding: 40px;
    transition: .10s;
    
}


 section .leftBox .content:hover {
    
    background: lightslategrey;
}
  








  

.myclass{
	background-image: url("../images/cvupolad.jpg");

}

</style>
   </head>


<body  class="myclass" style="">


	
    
</style>


    
    <body>

<header class="header">
<?php include './header.php'; ?>






   
			
             
              
            </div>
          </div>
        </div>
      </div>
	       
    </head>

   
    <body>
        <section>
<?php
if (isset($_FILES['filefield'])) {
    $file = $_FILES['filefield'];
    $upload_directory = '../uploads/';
    $ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
    $allowed_extensions = explode(',', $ext_str);
    $max_file_size = 10485760; //10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
    if (!in_array($ext, $allowed_extensions)) {
        echo "only" . $ext_str . " files allowed to upload"; // exit the script by warning
    } /* check file size of the file if it exceeds the specified size warn user */

    if ($file['size'] >= $max_file_size) {

        echo "only the file less than " . $max_file_size . "mb  allowed to upload"; // exit the script by warning
    }

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

    $path = $file['name'];

    if (move_uploaded_file($file['tmp_name'], $upload_directory . $path)) {

     
        include '../connectDB.php';
       // echo"Your File Successfully Uploaded";
         echo'<div class="alert alert-success" role="alert">
  Your File Successfully Uploaded!
</div>';

        mysqli_query($conn,"INSERT INTO project_report VALUES ('', '$path')");
    } else {

        echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning
    }
}

/*

  Hurrey we uploaded a file to server successfully.

 */
?>
 


	
    
	
<div class ="container">
<div class= "row">

<div class = "col-sm-6 banner-info background-color:lightblue" >
    <div class="leftBox">
        <div class="content">
    

  





        <form method="post" enctype="multipart/form-data">
		<font color="White">
		
            <h1 align="center"> <b>Upload Your Project Report</b></h1>
            <input type="file" id="filefield" name="filefield" multiple="multiple" />
            <p style="text-align: right; margin-top: 20px;">
                <input type="submit" id="Upload" name="Upload" value="Upload" class="btn btn-lg btn-primary" />
                  <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                
            </p>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
    <style>
    .footer{
        position: fixed;
        right: 0;
        bottom: 0;
        width: 100%;
        background-color:black;
        color: white;
        text-align: center;


    }
    .name1{font-size: 12px;}
</style>
</head>
<body>
</section>
       <footer class="container-fluid text-center footer">
<font size="2.5">
  <p>All Rights Reserved.</p></font>
  </style>
</footer> 
</body>
</html>





