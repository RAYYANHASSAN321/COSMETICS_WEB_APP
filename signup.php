<?php
include 'conn.php';

if(isset($_POST['signup'])){

  $name = $_POST['uname'];
  $password = $_POST['upass'];
  $email = $_POST['uemail'];
  
 $query = "INSERT INTO admin (a_name , a_email , a_password) VALUES ('$name' , '$email' , '$password')";
 $runn =  mysqli_query($conn , $query);

 if($runn){

  echo "
  
  <script>
  alert('Account created!');
  window.location.href='signin.php';
  </script>
  ";

 }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="col-4 m-auto">
  <div class="logo text-center mt-3 mb-3">
          <img src="assets/img/logo.png" style="width: 80px;">
        </div>
  <h4 class="text-center">Register your Account</h4>
  <form action="" method="POST">
<div class="py-2">
    <input type="text" class="form-control" Placeholder="Enter your name..." name="uname">
</div>

<div class="py-2">
<input type="password" class="form-control border px-2" require name="cpassword" id="myInput" placeholder="Enter strong password......"  name="upass">
    <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
</div>

<div class="py-2">
    <input type="email" class="form-control" Placeholder="Enter your email..." name="uemail">
</div>

<div class="m-auto">
<button type="submit" class="btn btn-outline-secondary login-btn w-100 mb-3" name="signup">Signup</button>
    
</div>
<p class="text-center register-test mt-3">Don't have an account? <a href="signin.php" class="text-decoration-none">Signin here</a></p>
</form>
  </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>