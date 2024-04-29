<?php
session_start();

include 'conn.php';

// session_destroy();

if($_SESSION['coustmerLogin']){
        $idddd = $_SESSION['coustmerLogin'];
        $queryyy = "select * from customer where c_id = $idddd";
        $runnnn=  mysqli_query($conn , $queryyy);

        $rowssss = mysqli_fetch_array($runnnn);

        $nameeee  = $rowssss['c_name'];


}
else{

    // header("location:index.php");
}
?>