<?php
include "includes/nav.php";
$dir="../images";
$files=scandir($dir);
if($files)
{
?>
<div class="main">
<div class="row">
<?php
 foreach($files as $file)
 {
    //  echo $files[$i];
    if(strlen($file)>2)
    {
 
    ?>

    <div class="col 12 m3 s6">
    <div class="card">
    <div class="card-image">
    <img src="../images/<?php echo $file;?>" alt="" style="height:100px;width:150px;" >
    </div>
    </div>
    </div>

    <?php
    }
 }
}
?>
</div>
</div>