<?php
include 'db_header.php';
// ----------- To fetch data
$id = $_GET['id'];
$query = "SELECT * FROM customer WHERE c_id = $id";
$runn = mysqli_query($conn , $query);
$data = mysqli_fetch_array($runn);

// ---------- To update data

if(isset($_POST['submit'])){
    $c_name = $_POST['cname'];
    $c_contact = $_POST['ccontact'];
    $c_email = $_POST['cemail'];
    $c_password = $_POST['cpassword'];
    $c_address = $_POST['caddress'];
    $queryy = "UPDATE customer SET c_name = '$c_name' , c_contact = '$c_contact' , c_email = '$c_email' , c_password = '$c_password' , c_address = '$c_address' WHERE c_id = $id";
    $runnn = mysqli_query($conn , $queryy);

    if($runnn){
        echo"
        <script>
            alert('Record Updated!');
            window.location.href = 'customer.php';
        </script>
        ";
    }
}
?>
<h1 class="text-center">Customer Update</h1>
<form action="" class="my-4" method="POST">
    <div class="col-6 m-auto py-2">
        <input type="text" class="form-control" require name="cname" value="<?php echo $data['c_name']?>">
    </div>
    <div class="col-6 m-auto py-2">
        <input type="number" class="form-control" require name="ccontact" value="<?php echo $data['c_contact']?>">
    </div>
    <div class="col-6 m-auto py-2">
        <input type="email" class="form-control" require name="cemail" value="<?php echo $data['c_email']?>">
    </div>
    <div class="col-6 m-auto py-2">
        <input type="password" class="form-control" require name="cpassword" id="myInput" value="<?php echo $data['c_password']?>">
        <input type="checkbox" onclick="myFunction()">Show Password
    </div>
    <div class="col-6 m-auto py-2">
        <input type="text" class="form-control" require name="caddress" value="<?php echo $data['c_address']?>">
    </div>
    <div class="col-6 m-auto py-2">
        <input type="submit" class="btn btn-info m-auto" name="submit" value="Update">
    </div>
</form>

<?php
include 'db_footer.php'
?>