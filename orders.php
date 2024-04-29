<?php
include 'db_header.php';
?>
<h1 class="text-center">Orders</h1>
<table class="table text-center">
    <thead>
        <tr>
            <th>S No</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM order_details";
        $runn = mysqli_query($conn, $query);
        $sno = 0; 
        if(mysqli_num_rows($runn)){ 
            while($rows = mysqli_fetch_array($runn)){
        ?>
        <tr>
            <td> <?php echo ++$sno; ?></td>
            <td><?php echo $rows['pro_name']; ?></td>
            <td><?php echo $rows['price']; ?></td>
            <td><?php echo $rows['quantity']; ?></td>
            <td>
                <a href="order_deliverd.php?id=<?php echo $rows['order_id']?>" class="btn btn-success">Delivered</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php
include "db_footer.php";
?>
