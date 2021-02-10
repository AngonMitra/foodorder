<?php include("partial/menu.php");?>

<div class="main-content">
     <h3> Add Food</h3>
<br>
<?php

     if(isset($_SESSION['upload']))
     {
         echo $_SESSION['upload'];
         unset ($_SESSION['upload']);
     }

    
?>

<form action="" method="POST" enctype="multipart/form-data">

  <table class="tbl-30"> 
      <tr>
          <td>
              Title :
          </td>
          <td>
              <input type="text" name="title" placeholder="Title of the Food">
          </td>
      </tr>

      <tr>
          <td>Description: </td>
          <td>
              <textarea name="description" cols="30" rows="5" placeholder="Food Description Here"></textarea>
          </td>
      </tr>
      <tr>
          <td>
              Price :
          </td>
          <td>
              <input type="decimal number" name="price" >
          </td>
      </tr>

      <tr>
          <td>Image:</td>
          <td>
              <input type="file" name="image">
          </td>
      </tr>

      <tr>
          <td>
              Category:
          </td>
          <td>
              <select name="category" >

              <?php
                 
                 $sql = "SELECT * FROM table_category WHERE active='Yes'";

                 $res = mysqli_query($conn, $sql);

                 $count = mysqli_num_rows($res);

                 if($count>0)
                 {

                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];

                 ?>

                 <option value="<?php echo $id; ?>"><?php echo $title; ?></option>



                <?php
                    }

                 }
                 else{
                ?>

                     <option value="0">No Category Found</option>



            <?php
                 }

            ?>
                 
              </select>
          </td>
      </tr>

      <tr>
          <td>Feature:</td>
          <td>
              <input type="radio" name="feature" value="Yes"> Yes
              <input type="radio" name="feature"  value="No"> No
          </td>
      </tr>

      <tr>
          <td>Active:</td>
          <td>
              <input type="radio" name="active" value="Yes"> Yes
              <input type="radio" name="active"  value="No"> No
          </td>
      </tr>

      <tr>
          <td>
              <input type="submit" name="submit" value="Add Food" class="btn btn-success">
          </td>
      </tr>

  </table>

</form>


  <?php

      if(isset($_POST['submit']))
      {
          $title = $_POST['title'];
          $description = $_POST['description'];
          $price = $_POST['price'];
          $category = $_POST['category'];

          if(isset($_POST['feature']))
          {
              $feature = $_POST['feature'];
          }
          else{
              $feature ="No";
          }
          if(isset($_POST['active']))
          {
              $active = $_POST['active'];
          }
          else{
              $active ="No";
          }


          if(isset($_FILES['image']['name']))
          {
              $image_name = $_FILES['image']['name'];

              if($image_name!="")
              {
                  $ext = end(explode('.', $image_name));
                  $image_name = "Food-Name-".rand(000,999).'.'.$ext;

                  $src = $_FILES['image']['tmp_name'];
                  $des = "../images/food/".$image_name;

                  $upload = move_uploaded_file($src, $des);

                  if($upload == false)
                  {
                      $_SESSION['upload'] = "<div class='error'>Failed to Upload Image </div>";
                      header('location:'.SITEURL.'admin/add-food.php');
                      die();

                  }
                 
            }


          }
          else{
              $image_name= "";
          }

        

          $sql2 = "INSERT INTO `table_food`(`title`, `description`, `price`, `image_name`, `category_id`, `feature`, `active`)
           VALUES ('$title','$description','$price','$image_name','$category','$feature','$active')";

          $res2 = mysqli_query($conn, $sql2);

          if($res2 == TRUE)
          {
              $_SESSION['add'] = "<div class='coll'>Food Added Successfully </div>";
              header('location:'.SITEURL.'admin/manage-food.php');

          }
          else
          {
           
            $_SESSION['addfood'] = "<div class='error'>Food Added Successfully </div>";
            header('location:'.SITEURL.'admin/manage-food.php');
          }

      }

   ?>



</div>   

<?php include("partial/footer.php");?>