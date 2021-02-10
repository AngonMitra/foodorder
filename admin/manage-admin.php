<?php include("partial/menu.php"); ?>

   <!-- Main Content Start -->
   <div class="main-content">
     <h3> Admin Management</h3>

     <br/>

     <a href="add-admin.php" class="btn btn-success">+ Add Admin</a>
     <br/>
     <br/>

     <?php
       if(isset($_SESSION['add']))
       {
          echo $_SESSION['add'];
          unset($_SESSION['add']);
       }

       if(isset($_SESSION['delete']))  
       {
          echo $_SESSION['delete'];
          unset($_SESSION['delete']);
       }   
       
       if(isset($_SESSION['update']))
       {
          echo $_SESSION['update'];
          unset($_SESSION['update']);
       }


     ?>
<br/><br/>
     <table class="table" >
        <tr>
           <th>S.N.</th>
           <th>Full Name</th>
           <th>Username</th>
           <th>Actions</th>
        </tr>

        <?php

          $sql = "SELECT * FROM table_admin";
          $res = mysqli_query($conn, $sql);

          if($res == TRUE)
          {
             $count = mysqli_num_rows($res);

             $sn =1;

             if($count >0)
             {
                while($rows=mysqli_fetch_assoc($res))
                {
                   $id = $rows['id'];
                   $full_name = $rows['full_name'];
                   $username = $rows['username'];

          ?>

         <tr>
             <td><?php echo $sn++ ?></td>
             <td><?php echo $full_name ?></td>
             <td><?php echo $username ?></td>
             <td>
             <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn btn-primary" >Update Admin</a>
             <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn btn-danger" >Delete Admin</a>
             </td>
          </tr>


         <?php

                }

             }
             else
             {

             }
          }

        ?>



     </table>

     <div class="clearfix"></div>
   </div>
   <!-- Main Content End -->

 <?php include("partial/footer.php"); ?>


   


 
</body>


</html>