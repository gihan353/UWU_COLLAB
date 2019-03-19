<?php
include '../connectDB.php';
$job_id=$_POST['job_id'];

$sql = "DELETE FROM job WHERE job_id=$job_id";

if ($conn->query($sql) === TRUE) {
    header("Location: viewMyVacancies.php");
    
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>