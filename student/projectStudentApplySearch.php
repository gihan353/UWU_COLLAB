
<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $return_arr = array();

    $user_name = $_GET['student_username'];
 
    include '../connectDB.php';

  

    $sql2 = "Select * from student where user_name='$user_name'";


 

    $fetch = mysqli_query($conn,$sql2);

    while ($row = mysqli_fetch_assoc($fetch)) {
         $row_array['student_id'] = $row['st_id'];
        $row_array['student_username'] = $row['user_name'];
        $row_array['st_name'] = $row['st_name'];
        $row_array['degree'] = $row['degree'];
        $row_array['ac_year'] = $row['ac_year'];
        $row_array['email'] = $row['email'];
        
        


        array_push($return_arr, $row_array);
    }

    echo json_encode($return_arr);

    mysqli_close($conn);
}
?>
