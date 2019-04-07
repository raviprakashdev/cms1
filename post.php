<?php
    include "includes/header.php";
    ?>
    <?php
    include "includes/navbar.php";
    ?>
    <?php
    include "includes/dbh.php";
    ?>
    <div class="row">
    <div class="col l9 m9 s12">
    <!-- main content -->
    <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $id=mysqli_real_escape_string($conn,$id);
        $id=htmlentities($id);
        $sql="SELECT * FROM posts WHERE id=$id";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_assoc($res);
            $title=$row['title'];
            $content=$row['content'];
            ?>
            

            <div class="card-panel">
            <h5 class="center"><?php echo ucwords($title);?></h5>
            <p class="flow-text"><?php echo $content?></p>
            </div>

            <?php
        }
        }
        else{
            header ("Location:index.php");
        }
    
    ?>
    <!-- </div> -->
       <!-- related blogs -->
       <!-- <div class="col l9 m9 s12" > -->
    <h5>Related Blogs</h5>
    <?php
$sql="select * from posts order by id DESC";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
  while($row=mysqli_fetch_assoc($res))
  {
?>
<div class="col l3 m4 s6">
<div class="card ">
<span class="card-title black-text truncate"><?php echo $row['title']?></span>
<div class="card-image">
<img src="images/<?php echo $row['featured_image'];?>" alt="" style="height:200px;">
<span class="card-title black-text truncate"><?php echo $row['title']?></span>
</div>

<div class="card-action blue center">
<a href="post.php?id=<?php echo $row['id'];?>" class="white-text">Read More</a>
</div>
</div>
</div>
<?php
  }
}
?>
    </div>
    <!-- side bar -->
    <div class="col l3 m3 s12" >
    <?php
    include "includes/sidebar.php";
    ?>
    </div>
    </div>
    
 
 
    
    
    </div>
    <?php
    include "includes/footer.php";
    ?>