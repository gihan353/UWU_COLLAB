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
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Activate </title>
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
            .name1{font-size: 13px;}
        </style>





    </head>
    <body>


        <?php include 'AdminHeader.php'; ?>


    <h2><span class="">User Activation</span></h2>

    <?php
  
        include '../connectDB.php';

    if (!empty($_GET['user_name'])) {
        if ($_GET['do'] == 'activate') {
            // check if the username has been set    
            $result = mysqli_query($conn, "UPDATE user SET activated='1' WHERE user_name='$_GET[user_name]'");
            //header("Location: UserActivate.php");
            // echo $result;
            echo mysqli_error($conn);
            echo'<div class="alert alert-success" role="alert">User Activation successfully!</div>';
        } elseif ($_GET['do'] == 'deactivate') {
            // check if the username has been set    
            $result = mysqli_query($conn, "UPDATE user SET activated='0' WHERE user_name='$_GET[user_name]'");
            //header("Location: UserActivate.php");
            // echo $result;
            echo mysqli_error($conn);
            echo'<div class="alert alert-success" role="alert">User Deactivation successfully!</div>'; 
        }
    }


    $result1 = mysqli_query($conn, "SELECT * FROM user WHERE activated=1");
    $result2 = mysqli_query($conn, "SELECT * FROM user WHERE activated=0");


    echo'<div class="container">';
    echo'<div class="jumbotron">';
     echo '<p>New Users</p>';

    echo'<table class="table">';
    echo' <thead>';
    echo'  <tr>';
    echo'  <th>User Name</th>';
    echo'   <th>Type</th>';

    echo'</tr>';
    echo'</thead>';
    echo' <tbody>';
    while ($row = mysqli_fetch_array($result2)) {
        echo'  <tr>';
        echo"    <td>$row[user_name]</td><td>$row[type]</td><td>";
        if ($row['activated'] == 1) {
            echo "<a href='UserActivate.php?user_name=" . $row['user_name'] . "&do=deactivate' <button type='button' class='btn btn-danger'>Deactivate</button></td><td>";
        } else {
            echo "<a href='UserActivate.php?user_name=" . $row['user_name'] . "&do=activate' <button type='button' class='btn btn-success'>Activate</button></td><td>";
        }
        echo' </tr> ';
    }
    echo' </tbody>';
    echo' </table>';

    echo'</div>';
    
    echo'<div class="jumbotron">';
    echo '<p>Activate Users</p>';

    echo'<table class="table">';
    echo' <thead>';
    echo'  <tr>';
    echo'  <th>User Name</th>';
    echo'   <th>Type</th>';

    echo'</tr>';
    echo'</thead>';
    echo' <tbody>';
    while ($row = mysqli_fetch_array($result1)) {
        echo'  <tr>';
        echo"    <td>$row[user_name]</td><td>$row[type]</td><td>";
        if ($row['activated'] == 1) {
            echo "<a href='UserActivate.php?user_name=" . $row['user_name'] . "&do=deactivate' <button type='button' class='btn btn-danger'>Deactivate</button></td><td>";
        } else {
            echo "<a href='UserActivate.php?user_name=" . $row['user_name'] . "&do=activate' <button type='button' class='btn btn-success'>Activate</button></td><td>";
        }
        echo' </tr> ';
    }
    echo' </tbody>';
    echo' </table>';

    echo'</div>';

    mysqli_close($conn);
    ?> 


</div>
</div>







<footer class="container-fluid text-center footer">
    <p>All Rights Reserved.</p>
</footer>
</body> 
</html>
