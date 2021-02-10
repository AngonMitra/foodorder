<?php

 include('../config/connection.php');
 
    $id = $_GET['id'];

    $sql = "DELETE FROM table_admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res == TRUE)
    {
        $_SESSION['delete'] = "<div class='coll'>Admin Delete Successfully</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }
    else
    {
        $_SESSION['delete']= "<div class='error'>Failed to Delete Admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }

?>