<?php include("partial/menu.php");?>

<div class="main-content">
     <h3> Manage Food</h3>

     <br>
     <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn btn-success">+ Add Food</a>

   <br>

   <?php

     if(isset($_SESSION['add']))
     {
       echo $_SESSION['add'];
       unset($_SESSION['add']);
       
     }

   ?>

   <br>

   <table class="table">
         <tr>
            <th>S.N</th>
            <th>Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Feature</th>
            <th>Active</th>
            <th>Actions</th>
         </tr>
<?php

        $sql = "SELECT * FROM table_food";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        $sn =1;

        if($count>0)
        {

          while($row=mysqli_fetch_assoc($res))
          {
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $image_name = $row['image_name'];
            $feature = $row['feature'];
            $active = $row['active'];

            ?>

<tr>
             <td><?php echo $sn++ ?>.</td>
             <td><?php echo $title?></td>
             <td><?php echo $price ?></td>
             <td>
                 <?php 
                   
                   if($image_name=="")
                   {
                     echo "<div class='error'>No Image</div>";
                   }
                   else{

                    ?>
                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name?>" width="50px" >

                    <?php

                  
                   }
                 

                 ?>
             </td>
             <td><?php echo $feature ?></td>
             <td><?php echo $active ?></td>
            
             <td>
                  <a href="#" class="btn btn-success">Update Food</a>
                  <a href="#" class="btn btn-danger">Delete Food</a>
             </td>
        </tr>

            <?php
          }

        }
        else{

          ?>
          <tr>
               <td><div class="error">No Food Added</div></td>
          </tr>
          <?php
        }

?>


        
   </table>
   
     <div class="clearfix"></div>
   </div>

<?php include("partial/footer.php");?>