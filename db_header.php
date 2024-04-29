<?php
include 'conn.php';
include 'signin_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="db_header.php">
      <span class="ms-1 font-weight-bold text-white">Dashboard</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
  <a class="nav-link text-white " href="#">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none"><?php echo $name;?></span>
      </div>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="product.php">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="bi bi-collection"></i>
      </div>
    <span class="nav-link-text ms-1">Products</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="category.php">
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="bi bi-bookmark-check"></i>
      </div>
    <span class="nav-link-text ms-1">Category</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="customer.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="bi bi-emoji-sunglasses"></i>
      </div>
    
    <span class="nav-link-text ms-1">Customers</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="orders.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="bi bi-emoji-sunglasses"></i>
      </div>
    
    <span class="nav-link-text ms-1">Orders</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link text-white " href="notification.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="bi bi-bell-fill"></i>
      </div>
    
    <span class="nav-link-text ms-1">Notifications</span>
  </a>
</li>

  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>
<li class="nav-item">
  <a class="nav-link text-white " href="signin.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">login</i>
      </div>
    
    <span class="nav-link-text ms-1">Sign In</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="signup.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
    
    <span class="nav-link-text ms-1">Sign Up</span>
  </a>
</li>
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary w-100" href="Logout.php" type="button">Logout</a>
    </div>
    
  </div>
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
    <a class="navbar-brand m-0" href="db_header.php">
    <img src="./assets/img/logo.png" class="navbar-brand-img" style="width: 50px;" alt="main_logo">
      <span class="ms-1 font-weight-bold"></span>
    </a>
      
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="product.php">Products</a>
        </li>
        <li class="nav-item d-flex align-items-center">
          <a href="#" class="nav-link text-body font-weight-bold px-0">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none"><?php echo $name;?></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->
