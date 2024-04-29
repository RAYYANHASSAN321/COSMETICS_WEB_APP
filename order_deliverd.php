<?php
include 'conn.php';
$id = $_GET['id'];
$query = "DELETE FROM order_details WHERE order_id = $id";
$runn = mysqli_query($conn , $query);

if($runn){
    echo "
    <script>
        alert('Mark Delivered!');
        window.location.href='orders.php'
    </script>
    ";
}
// header('location:category.php');
?>