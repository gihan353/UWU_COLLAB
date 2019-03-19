<?php
include("connectDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $queryNew = "INSERT INTO comment(date,name,comment)VALUES('" . $date . "','" . $name . "','" . $comment . "')";

    $result = mysqli_query($connect, $queryNew);
    if ($result > 0) {
           echo' "<div class="alert alert-success" role="alert">success</div>';
	
    } else {
           echo' "<div class="alert alert-warning" role="alert">save successfully</div>';
	
    }
}
?>

<html>

    <head>
        <title>
UWU_COLLAB
        </title> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        

        
        <style>
                body {
   background-image: url("images/S2.jpg");
   background-color: #cccccc;
}
.h1{
   
} 
            
        </style>
    </head>   
    <body>
        <div class="h1">
        <h2 align="center" ><a href="#">GIVE YOUR FEEDBACK</a></h2>
        </div>
        <br>
        <div class="container">
            <form method="POST" action="comment.php" id="comment_form">


                <div class="form-group">
                    <label>Date:</label>
                    <input  type="date" name="date" 
                            class="form-control" placeholder="Enter Date"
                            rows="5"></input>

                    <br><br>
                    <label>Name:</label>
                    <input  type=textarea" name="name" id="comment_content"
                            class="form-control" placeholder="Enter Name"
                            rows="5"></input>

                    <br><br>
                    <label>Enter Comment:</label>
                    <div class="form-group">
                        <input  type=textarea" name="comment" id="comment_content"
                                class="form-control" placeholder="Enter comment"
                                rows="5"></input>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-info"
                           value="Submit"/>


                </div>
            </form>
            <span id="comment_message"></span>
            <br>
            <div id="display_comment"></div>


        </div>





    </body>



</html>
