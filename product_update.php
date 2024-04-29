<?php
include 'db_header.php';
// ----------- To fetch data
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE p_id = $id";
$runn = mysqli_query($conn , $query);
$data = mysqli_fetch_array($runn);

// ---------- To update data

if(isset($_POST['submit'])){
    $p_name = $_POST['pname'];
    $p_price = $_POST['pprice'];
    $p_quantity = $_POST['pquantity'];
    $img_name = $_FILES['pimage']['name'];
    $img_path = $_FILES['pimage']['tmp_name'];
    move_uploaded_file($img_path, "img/".$img_name);

    $p_category = $_POST['pcategory'];
    $queryy = "UPDATE product SET P_name = '$p_name' , p_price = $p_price , p_quantity = $p_quantity , p_image = '$img_name' ,  p_category = $p_category WHERE p_id = $id";
    $runnn = mysqli_query($conn , $queryy);

    if($runnn){
        echo"
        <script>
            alert('Record Updated!');
            window.location.href = 'product.php';
        </script>
        ";
    }
}
?>
<h1 class="text-center">Product </h1>
<!-- Must add this attribute on form tag in which you are selecting a file type data enctype="multipart/form-->
<form class="my-4" method="POST" enctype="multipart/form-data">
<div class="col-6 m-auto py-2">
<input class="form-control border" type="text" require name="pname" value="<?php echo $data['P_name']?>">
</div>
<div class="col-6 m-auto py-2">
<input class="form-control border" type="number" require name="pprice" value="<?php echo $data['p_price']?>"> 
</div>
<div class="col-6 m-auto py-2">
<input class="form-control border" type="number" require name="pquantity" value="<?php echo $data['p_quantity']?>"> 
</div>
<div class="col-6 m-auto py-2">
<input class="form-control border" type="file" require name="pimage" value="<?php echo $data['p_image']?>"> 
</div>
<div class="col-6 m-auto py-2">

<select class="form-control border" name="pcategory" >
<?php
$queryy = "select * from category";
$rowsss= mysqli_query($conn, $queryy);
while($data = mysqli_fetch_array($rowsss)){
?>
<option value="<?php echo $data['c_id']?>"><?php echo $data['c_name']?></option>
<?php
}
?>
</select> 
</div> <div class="col-6 m-auto py-2">
<input class="btn btn-info m-auto" type="submit" name="submit" value="Update">
</div> 
</form> 

<?php
include 'db_footer.php'
?>