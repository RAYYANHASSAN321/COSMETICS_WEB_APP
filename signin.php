<?php
include 'conn.php';
session_start();
if(isset($_POST['signin'])){

    $email = $_POST['uemail'];
    $password = $_POST['cpassword'];
 
    $query= "SELECT * FROM admin WHERE a_email = '$email' && a_password = '$password'";

    $runn =  mysqli_query($conn , $query);

  if(mysqli_num_rows($runn) > 0){

    $data = mysqli_fetch_array($runn);

    $_SESSION['dbLogin'] = $data['a_id'];
    
    header('location:product.php');

  }
  else{
echo "
<script>
alert('Wrong username or password!');
</script>
";

  }
}

?>

<!doctype html>
<html lang="en">
  <he<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo.png">
    <link rel="icon" type="image/png" href="./assets/img/logo.png">
    <title>Address Book</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  </head>
  <body class="text-black bg-light">
  
  <div class="col-4 m-auto">
  <div class="logo text-center mt-3 mb-3">
          <img src="assets/img/logo.png" style="width: 80px;">
        </div>
        <h4 class="text-center">Sign into your Account</h4>
        <form action="#" method="POST">
          <div class="mb-3 form-box">
            <input type="email" class="form-control" id="email" placeholder="Enter Your Email" required name="uemail">
          </div>
          <div class="mb-3">
          <input type="password" class="form-control border px-2" require name="cpassword" id="myInput" placeholder="Enter strong password......"  name="upass">
          <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
          </div>
          <button type="submit" class="btn btn-outline-secondary login-btn w-100 mb-3" name="signin">Login</button>
        </form>

        <!-- Register Link -->
        <p class="text-center register-test mt-3">Don't have an account? <a href="signup.php" class="text-decoration-none">Register here</a></p>
      </div>
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