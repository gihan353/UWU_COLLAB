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
        <title>File Upload</title>
        
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
 

            .myclass{
	background-image: url("../images/cvupolad.jpg");

}
            
</style>
        
        
        
        
        
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />

        <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>    

    </script>

</head>


<body class="myclass">
    <?php include 'header.php'; ?>


    <?php
    if (isset($_FILES['filefield'])) {
        $file = $_FILES['filefield'];
        $upload_directory = '../uploads/';
        $ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
        $allowed_extensions = explode(',', $ext_str);
        $max_file_size = 10485760; //10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
        $ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
        if (!in_array($ext, $allowed_extensions)) {
            echo "only \n" . $ext_str . " files allowed to upload"; // exit the script by warning
        } /* check file size of the file if it exceeds the specified size warn user */

        if ($file['size'] >= $max_file_size) {

            echo "only the file less than " . $max_file_size . "mb  allowed to upload"; // exit the script by warning
        }

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

        $path = md5(microtime()) . '.' . $ext;

        if (move_uploaded_file($file['tmp_name'], $upload_directory . $path)) {

            include '../connectDB.php';

            // echo"Your File Successfully Uploaded";
            echo'<div class="alert alert-success" role="alert">
  Your File Successfully Uploaded!
</div>';

            $st_id = $_SESSION['st_id'];
            $job_id = $_GET['job_id'];
            //  mysqli_query($conn,"INSERT INTO cv VALUES ('', '$path')");
            mysqli_query($conn, "INSERT INTO student_job VALUES ('$st_id','$job_id', '$path', now())");
        } else {

            echo "\nThe file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning
        }
    }

    /*

      Hurrey we uploaded a file to server successfully.

     */
    ?>





    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post" enctype="multipart/form-data">
                <h1> <b> <p>Upload Your CV</p></b></h1>
                <input type="file" id="filefield" name="filefield" multiple="multiple" />
                <p style="text-align: right; margin-top: 20px;">
                    <input type="submit" id="Upload" name="Upload" value="Upload" class="btn btn-lg btn-success" />
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />

                </p>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

<footer class="container-fluid text-center footer">
  <p>All Rights Reserved.</p>
</footer>

</body>
</html>




