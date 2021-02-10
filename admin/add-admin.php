<?php include("partial/menu.php"); ?>


<div class="main-content">
     <h4>Add Admin</h4>

<a href="manage-admin.php" class="button">Go Back</a>
<br/><br/>

 

   <form action="" method="POST">
       <table class="tbl-form">
        
          <tr>
              <td>Full Name: </td>
              
              <td>
                 <input type="text" name="full_name" placeholder="Enter Your Nmae">
              </td>
          </tr> 

          <tr>
              <td>Username: </td>
              
              <td>
                 <input type="text" name="username" placeholder="Enter User Name">
              </td>
          </tr>
          <tr>
              <td>Password: </td>
              
              <td>
                 <input type="password" name="password" placeholder="Enter Your Password">
              </td>
          </tr>

          <tr>
              <td>
                  <input type="submit" name="submit" value="Save" class="btn btn-success">
              </td>
          </tr>
        </table>
   </form>

</div>    

<?php include("partial/footer.php"); ?>

<?php

//Save Data

if(isset($_POST['submit']))
{
   $full_name = $_POST['full_name'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);

   $sql ="INSERT INTO table_admin SET 
       full_name='$full_name',
       username = '$username',
       password = '$password'
    ";

    
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res== TRUE)
    {
      //echo "Admin Save Successfully";
      $_SESSION['add'] = "Admin Save Successfully";
      header("location:".SITEURL.'admin/manage-admin.php');

    }
    else
    {
        $_SESSION['add'] = "Admin Save Failed";
      header("location:".SITEURL.'admin/add-admin.php');
    }
}

?>