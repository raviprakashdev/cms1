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
    <div class="col-lg-9 col-md-9 col-sm-12">
    <!-- main content -->Main blog/content
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
            <h5><?php echo $title?></h5>
            <h5><?php echo $content?></h5>

            <?php
        }
        else{
            header ("Location:index.php");
        }
    }
    ?>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-12">
    <?php
    include "includes/sidebar.php";
    ?>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
    <!-- trending blogs -->
    trending blogs
    </div>
    </div>
    <?php
    include "includes/footer.php";
    ?>