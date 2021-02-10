<?php

include('../config/connection.php');

?>

<html>
   <head>
     <title>Login Food Order System</title>

     <link rel="stylesheet" href="../css/admin.css">
   </head>


   <body>

       <div class="login">

       
         <h1 class="text-center">Login Here</h1>

         <?php

         if(isset($_SESSION['login']))
         {
             echo $_SESSION['login'];
             unset($_SESSION['login']);
         }

         if(isset($_SESSION['not login']))
         {
            echo $_SESSION['not login'];
            unset($_SESSION['not login']);
         }

         ?>
         <br>

         <form action="" method="POST" class="text-center">
             Username :
             <input type="text" name="username" placeholder="Enter Username">
             <br><br>
             Password :
             <input type="password" name="password" placeholder="Enter Password">
             <br><br>
             <input type="submit" name="submit" value="Login" class="btn-success">

         </form>
        

       </div>
       
   </body>
</html>

<?php

     if(isset($_POST['submit']))
     {
         $username = $_POST['username'];
         $password =md5($_POST['password']);

         $sql = "SELECT * FROM table_admin WHERE username='$username' AND password='$password'";

         $res = mysqli_query($conn, $sql);

         $count = mysqli_num_rows($res);

         if($count == 1)
         {
             $_SESSION['login'] = "<div class='coll'>Login Successfull</div>";
             $_SESSION['user'] = $username;


             header('location:'.SITEURL.'admin/');

         }
         else
         {
            $_SESSION['login'] = "<div class='error text-center'>Username or Password is Incorrect</div>";
            header('location:'.SITEURL.'admin/login.php');
         }
     }
?>