<?php include("partial/menu.php"); ?>



<div class="main-content">
<h3> Add Category</h3>
<a href="manage-category.php" class="button">Go Back</a>
<br><br>

<?php
  if(isset($_SESSION['add']))
  {
    echo $_SESSION['add'];
    unset ($_SESSION['add']);
  }

  if(isset($_SESSION['upload']))
  {
    echo $_SESSION['upload'];
    unset ($_SESSION['upload']);
  }

?>

<br>

  <form action="" method="POST" enctype="multipart/form-data">

     <table class="tbl-30">
       <tr>
         <td>Title :</td>
         <td>
           <input type="text" name="title" placeholder="Category Title">
         </td>
       </tr>

       <tr>
         <td>Select Image :</td>
         <td>
           <input type="file" name="image">
         </td>
       </tr>
      
       <tr>
         <td>Feature :</td>
         <td>
           <input type="radio" name="feature" value="Yes">Yes
           <input type="radio" name="feature" value="No">No
         </td>
       </tr>

       <tr>
         <td>Active :</td>
         <td>
         <input type="radio" name="active" value="Yes">Yes
           <input type="radio" name="active" value="No">No
         </td>
       </tr>

       <tr>
         <td>
           <input type="submit" name="submit" value="Add Category" class="btn-success">
         </td>
       </tr>

     </table>
      

  </form>

    <?php

      if(isset($_POST['submit']))
      {
        $title = $_POST['title'];

        if(isset($_POST['feature']))
        {
          $feature = $_POST['feature'];
        }
        else
        {
          $feature = "No";
        }

        if(isset($_POST['active']))
        {
          $active = $_POST['active'];
        }
        else
        {
          $active = "No";
        }

        if(isset($_Files['image']['name']))
        {
          $image_name = $_FILES['image']['name'];

          if($image_name!="")
          {
              $ext = end(explode('.', $image_name));
              $image_name = "Food-Name-".rand(000,999).'.'.$ext;

              $src = $_FILES['image']['tmp_name'];
              $des = "../images/category/".$image_name;

              $upload = move_uploaded_file($src, $des);

              if($upload == false)
              {
                  $_SESSION['upload'] = "<div class='error'>Failed to Upload Image </div>";
                  header('location:'.SITEURL.'admin/add-category.php');

                  die();

              }
             


          }


        }
        else{
          $image_name = "";
        
           }
        

        $sql = "INSERT INTO `table_category`(`title`, `image_name`, `feature`, `active`) 
        VALUES ('$title','$image_name','$feature','$active')";

        $res = mysqli_query($conn, $sql);

        if($res== TRUE)
        {
          $_SESSION['add'] = "<div class='coll'>Category Added Successfully</div>";
          header('location:'.SITEURL.'admin/manage-category.php');
        }
        else{
          $_SESSION['add'] = "<div class='error'>Failed to Add Category </div>";
          header('location:'.SITEURL.'admin/manage-category.php');
        }
      }

    ?>

</div>



<?php include("partial/footer.php"); ?>