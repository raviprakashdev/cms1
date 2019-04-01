<?php
include "includes/nav.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM posts WHERE id=$id";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo "Deleted succesfully";
    }
    else{
        echo "something went wrong";
    }
}
?>