<?php include("partial/menu.php");?>

<div class="main-content">
     <h3> Manage Category</h3>
<br>

<?php
  if(isset($_SESSION['add']))
  {
    echo $_SESSION['add'];
    unset ($_SESSION['add']);
  }

?>

<br>
<a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn btn-success">+ Add Category</a>
<br>
<br>
<table class="table" >
        <tr>
           <th>S.N.</th>
           <th>Title</th>
           <th>Image</th>
           <th>Feature</th>
           <th>Active</th>
        </tr>

        <?php

           $sql = "SELECT * FROM table_category";
           $res = mysqli_query($conn, $sql);

           $count = mysqli_num_rows($res);

           $sn =1;

           if($count >0)
           {

               while($row=mysqli_fetch_assoc($res))
               {
                    $id = $row['id'];
                    $title= $row['title'];
                    $image_name = $row['image_name'];
                    $feature = $row['feature'];
                    $active =$row['active'];

                    ?>

           <tr>
             <td><?php echo $sn++ ?>.</td>
             <td><?php echo $title?></td>
             <td><?php echo $image_name ?></td>
             <td><?php echo $feature ?></td>
             <td><?php echo $active ?></td>
             <td>
                  <a href="#" class="btn btn-success">Update Category</a>
                  <a href="#" class="btn btn-danger">Delete Category</a>
             </td>
        </tr>

                    <?php
               }

           }
           else
           {
                ?>
                <tr>
                     <td><div class="error">No Category Added</div></td>
                </tr>
                <?php
           }




        ?>

       
      
</table>     

     

     <div class="clearfix"></div>
   </div>

<?php include("partial/footer.php");?>