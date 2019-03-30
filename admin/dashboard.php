<?php
include "includes/nav.php";
if(isset($_SESSION['uname']))
{
?>


        <!-- main content -->
        <div class="main">
            <div class="row">
            <div class="col l6 m6 s12">
            <ul class="collection with-header">
            <li class="collection-header teal">
            <h5 class="white-text">Recent Posts</h5>
            <!-- <span id="message"></span> -->
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
            ?>
            </ul>
            </div>
            <div class="col l6 m6 s12">
            <ul class="collection with-header">
            <li class="collection-header teal">
            <h5 class="white-text">Recent Comments</h5>
            <span id="message1"></span>
            </li>
            
            <li class="collection-item">
                <a href="">title</a>
                <br>
            <span class="secondary-content">
           
            </span>
            <br>
            <span><a href="" class="approve" id="<?php echo $row['id'];?>"><i class="material-icons tiny green-text">done</i> Approve</a></span>
            </li>
            <li class="collection-item">
                <a href="">title</a>
                <br>
            <span class="secondary-content">
           
            </span>
            <br>
            <span><a href="" class="approve" id="<?php echo $row['id'];?>"><i class="material-icons tiny green-text">done</i> Approve</a></span>
            </li>
            <li class="collection-item">
                <a href="">title</a>
                <br>
            <span class="secondary-content">
           
            </span>
            <br>
            <span><a href="" class="approve" id="<?php echo $row['id'];?>"><i class="material-icons tiny green-text">done</i> Approve</a></span>
            </li>
            <li class="collection-item">
            
            <span class="secondary-content">
           
            </span>
            <br>
            <span><a href="" class="approve" id="<?php echo $row['id'];?>"><i class="material-icons tiny green-text">done</i> Approve</a></span>
            </li>
            
            
            
            </ul>
            </div>
            </div>
            </div>
            
            <div class="fixed-action-btn">
            <a href="write.php" class="btn-floating btn btn-large white-text pulse"><i class="material-icons">edit</i></a>
            </div>
            <script>
            const approv=document.querySelectorAll(".approve");
            approv.forEach(function(item,index)
            {
            item.addEventListener("click",approvNow)
            })
            
            function approvNow(e)
            {
              e.preventDefault();
              if(confirm("Do you really Want to Approve"))
              {
            const xhr=new XMLHttpRequest();
            xhr.open("GET","approv.php?id="+Number(e.target.id),true)
            xhr.onload=function()
            {
              const messg=xhr.responseText;
              const message=document.getElementById("message1")
              message.innerHTML=messg;
            }
            xhr.send()
              }
            
            }
            
            </script>
            
            
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
            



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
      <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
      <script>
  //     
  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
      </script>
    </body>
  </html>
  <?php
}
else{
  header("Location: login.php");
}
  ?>
  