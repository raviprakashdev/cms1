<?php
$conn=mysqli_connect("localhost", "root", "","blogera");
?>
<?php
// include "includes/header.php";

if(isset($_POST['update']))
{
    $id=$_GET['id'];
//   $data=$_POST['ckeditor'];
//   $data=mysqli_real_escape_string($conn,$data);
//   $title=$_POST['title'];
//   $title=mysqli_real_escape_string($conn,$title);
//   $title=htmlentities($title);

  $data=$_POST['ckeditor'];
  $data=($data);
  $title=$_POST['title'];
  $title=($title);
//   $sql="INSERT INTO `posts` (title,content) VALUE('$title','$data')";
//         $res=mysqli_query($conn,$sql);
//   $title=htmlentities($title);

 
    //   $sql="INSERT INTO `posts` (title,content,featured_image) VALUE('$title','$data','$img_name')";
      $sql="UPDATE `posts` SET title = '$title',content='$data' WHERE id=$id";
      $res=mysqli_query($conn,$sql);
      if($res)
      {
      $_SESSION['message']="<div class='chip green white-text'> Post is Published</div>";
      header("Location: edit.php?id=".$id);
      echo "okay";
      }
      else
      {
        $_SESSION['message']="<div class='chip red black-text'> Sorry,Something went wrong.</div>";
        header("Location: edit.php?id=".$id);
      }
    }
    else
    {
      $_SESSION['message']="<div class='chip red black-text'> Sorry, Image size exceded 2mb.</div>";
        header("Location: edit.php");
    }
 
 
?>
