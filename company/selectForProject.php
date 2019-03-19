<?php
include '../connectDB.php';
$st_id=$_POST['student_id'];
$projectrequest_id=$_POST['projectrequest_id'];

$result = mysqli_query($conn, "UPDATE projectrequest SET selectedStudent='$st_id' WHERE projectrequest_id='$projectrequest_id'");
    if ($result) {
       header("Location: viewMyProjectRequest.php");
    }


$conn->close();

?>