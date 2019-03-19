<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "uwu_collab";
//
//
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//if (!$conn) {
//    echo "connection failed";
//}

$uname = "root";
$psword = "";
$hostname = "localhost";
$db = "uwu_collab";


$conn = mysqli_connect($hostname, $uname, $psword, $db)
        or die("Unable to connect to MySQL");
?>
