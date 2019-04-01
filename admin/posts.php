<?php
include "includes/nav.php";
if(isset($_SESSION['uname']))
{

?>
 <style>
footer,header,.main,.a{
/* padding-left:300px; */
}
@media(max-width:992px)
{
  footer,header,.main,.a{
padding-left:0px;
}
}
</style>
<div class="main">
            <div class="row">
            <div class="col l m12 s12">
 <ul class="collection with-header a">
            <li class="collection-header teal">
            <h5 class="white-text">Recent Posts</h5>
            <span id="message"></span>
            </li>
            <?php
            $sql="SELECT * FROM posts ORDER BY id desc";
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
              while($row=mysqli_fetch_assoc($res))
              {
            
            ?>
            
           
            
            <li class="collection-item">
            <a href=""><?php echo $row['title']?></a>
            <br>
            <span><a href="edit.php?id=<?php echo $row['id']; ?>"><i class="material-icons tiny">edit</i> Edit</a>| <a href="" id="<?php echo $row['id']; ?>" class="delete"><i class="material-icons tiny red-text">clear</i> Delete</a> | <a href=""><i class="material-icons tiny green-text">share</i> Share</a></span>
            </li>
            
            <?php
              }
            }
            else{
              echo "you have no posts";
            }
            ?>
            </ul>
        </div>
        </div>
        </div>
        <div class="fixed-action-btn">
            <a href="write.php" class="btn-floating btn btn-large white-text pulse"><i class="material-icons">edit</i></a>
            </div>
        <script>
            const del=document.querySelectorAll(".delete");
            del.forEach(function(item,index)
            {
            item.addEventListener("click",deleteNow)
            })
            
            function deleteNow(e)
            {
              e.preventDefault();
              if(confirm("Do you really Want to Delete"))
              {
            const xhr=new XMLHttpRequest();
            xhr.open("GET","delete.php?id="+Number(e.target.id),true)
            xhr.onload=function()
            {
              const messg=xhr.responseText;
              const message=document.getElementById("message")
              message.innerHTML=messg;
            }
            xhr.send()
              }
            
            }
            </script>
            <?php
}
else{
  header("Location:login.php");
}
?>