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
   <?php include("partial/menu.php"); ?>

   <!-- Menu End -->


   <!-- Main Content Start -->
   <div class="main-content">
     <h1> Dashboard</h1>
<br>
     <?php

          if(isset($_SESSION['login']))
           {
              echo $_SESSION['login'];
              unset ($_SESSION['login']);
            }

         ?>
<br>
     <div class="box text-center">
      <h1>5</h1>
      Categories
     </div>
     <div class="box text-center">
      <h1>50</h1>
      Foods
     </div>
     <div class="box text-center">
      <h1>80</h1>
      Views
     </div>
     <div class="box text-center">
      <h1>12</h1>
      Orders
     </div>

     <div class="clearfix"></div>
   </div>
   <!-- Main Content End -->

 <?php include("partial/footer.php"); ?>


   
   <!-- JavaScript Bundle with Popper -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



 
</body>


</html>