<?php
session_start();

if ($_SESSION['type'] == 'admin') {
    $type = $_SESSION['type'];
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
}else{
     header("location: ../login.php");
}
    ?>
        <?php

echo "edit profile"; ?>

