<?php
include "includes/header.php";
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
footer,header,.main{
padding-left:300px;
}
@media(max-width:992px)
{
  footer,header,.main{
padding-left:0px;
}
}
</style>
    </head>

    <body>
        <nav class="teal">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="" class="brand-logo center">CMS1</a>
                    <a href="" class="button-collapse show-on-large" data-activates="slide-out ">
                        <i class="material-icons">menu</i>
                    </a>
                     <!-- <a href="#" data-target="slide-out" class="sidenav-trigger" data-activates="slide-out"><i class="material-icons">menu</i></a> -->
                    <ul class="hide-on-small-and-down right">

                    </ul>
                </div>
            </div>
        </nav>
        <ul class="sidenav sidenav-fixed" id="sidenav">
          <li>
            <div class="user-view">
            <div class="background">
                <img src="../images/beautiful-bird-s-eye-view-boats-1039302.jpg" alt="" class="responsive-image">
            </div>
            <a href=""><img src="../images/animal-beak-bird-416166.jpg" alt="" class="circle"></a>
            <span class="name white-text"><?php echo $_SESSION['uname'] ?></span>
            <span class="email white-text">
            <?php
            $user=$_SESSION['uname'];
            $sql="SELECT email FROM users WHERE username='$user'";
            $res= mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
            echo $row['email'];
            ?>
            </span>
          </div>
          </li>
          <li>
            <a href="">Dashboard</a>
          </li>
          <li>
            <a href="">Post</a>
          </li>
          <li>
            <a href="">Images</a>
          </li>
          <li>
            <a href="">Comments</a>
          </li>
          <li>
            <a href="">Setting</a>
          </li>
          <div class="divider"></div>
          <li>
            <a href="">Logout</a>
          </li>
        </ul>
         
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