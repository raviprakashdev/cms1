<?php
include "includes/nav.php";

?>
<?php
$conn=mysqli_connect("localhost", "root", "","blogera");
?>
    <!-- <h1>Hello, world!</h1> -->
    <div class="main">
<form action="write_check.php" method="POST" enctype="multipart/form-data">
<div class="card-panel">

<h5>Title For Post</h5>
<textarea name="title" class="materialize-textarea" placeholder="Title For Post"></textarea>
<h5>Featured Image</h5>
<div class="input-field file-field">
<div class="btn">
Upload file
<input type="file" name="image">
</div>
<div class="file-path-wrapper">
<input type="text" class="file-path">
</div>
</div>
<h5>Post Content</h5>
<textarea name="ckeditor" id="ckeditor" class="ckeditor"></textarea>
<br>
<div class="center">
<input type="submit" value="Publish" name="publish" class="btn white-text"> 
</div>

</div>
</form>

</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/ckeditor/ckeditor.js"></script>
  </body>
</html>