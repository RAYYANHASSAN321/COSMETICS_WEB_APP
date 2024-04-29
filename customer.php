<?php
include 'db_header.php';
?>
<h1 class="text-center">Customer</h1>
<table class="table text-center">
    <thead>
        <tr>
            <th>S No</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM customer";
        $runn = mysqli_query($conn, $query);
        // echo mysqli_num_rows($runn);
        // print_r(mysqli_fetch_array($runn));
        // $data = mysqli_fetch_array($runn); 
        // echo "<br>"; 
        // echo $data['c_name'];

        $sno = 0; 
        if(mysqli_num_rows($runn)){ 
            while($rows = mysqli_fetch_array($runn)){
        ?>
        <tr>
            <td> <?php echo ++$sno; ?></td>
            <td><?php echo $rows['c_name']; ?></td>
            <td><?php echo $rows['c_contact']; ?></td>
            <td><?php echo $rows['c_email']; ?></td>
            <td><?php echo $rows['c_address']; ?></td>
            <td>
                <a href="customer_delete.php?id=<?php echo $rows['c_id']?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                <a href="customer_update.php?id=<?php echo $rows['c_id']?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
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
