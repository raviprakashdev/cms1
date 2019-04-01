
    <?php
    include "includes/header.php";
    ?>
    <?php
    include "includes/dbh.php";
    ?>
    <?php
    include "includes/navbar.php";
    ?>
    <div class="row">
    <!-- This is main content area -->
    <div class="col-lg-9 col-md-9 col-sm-12" >
      <!-- cards -->

      <?php
      $sql="SELECT * FROM posts ORDER BY id DESC";
      $res=mysqli_query($conn,$sql);
      // print_r($res);
      if(mysqli_num_rows($res)>0)
      {
        while($row=mysqli_fetch_assoc($res))
        {
      ?>

    <div class="row">
    <div class="col-lg-3- col-md-4 col-sm-6" >
    <div class="card" style="width: 100%;">
  <img src="images/<?php echo $row['featured_image']?>" class="card-img-top" alt="..." style="height:200px;width:250px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title']?></h5>
    <p class="card-text"><?php echo $row['content']?></p>
    <a href="post.php?id=<?php echo $row['id']?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  
    
    </div>
    </div>
    <?php
        }
      }
  ?>
    <!-- This is sidebar area -->
    <div class="col-lg-3 col-md-3 col-sm-12" >
      ch
      <?php
    include "includes/sidebar.php";
    ?>
    </div>
    <?php
    include "includes/footer.php";
    ?>

    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>