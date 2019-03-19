<?php
include '../connectDB.php';
$projectrequest_id=$_POST['projectrequest_id'];

$sql = "DELETE FROM projectrequest WHERE projectrequest_id=$projectrequest_id";

if ($conn->query($sql) === TRUE) {
    header("Location: viewMyProjectRequest.php");
    
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>