<?php

include("../config/connection.php");
include('login-access.php');

?>

<!DOCTYPE html>
<html Lang="en">
<head>
<meta charset="UTF-8>
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Food Ordering System</title>

<link rel="stylesheet" href="../css/admin.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>



<body>
   <!-- Menu Start -->
   <div class="menu">
   <nav class="navbar navbar-expand-sm navbar-light pl-5 fixed-top">
     <div class="container-fluid">
       <a class="navbar-brand" href="index.php"> <img src="../images/logo.png" class="card-img-top" /></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <ul class="navbar-nav custom-nav pl-5">
           <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Dashboard</a></li>
           <li class="nav-item custom-nav-item"><a href="manage-admin.php" class="nav-link">Admin Profile</a></li>
           <li class="nav-item custom-nav-item"><a href="manage-category.php" class="nav-link">Category</a></li>
           <li class="nav-item custom-nav-item"><a href="manage-food.php" class="nav-link">Food</a></li>
           <li class="nav-item custom-nav-item"><a href="manage-order.php" class="nav-link">Order</a></li>
           <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

         </ul>
       </div>
     </div>
   </nav>
</div>
<br/>




   
   <!-- JavaScript Bundle with Popper -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



 
</body>


</html>