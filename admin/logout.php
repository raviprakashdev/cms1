<?php
include "includes/nav.php";
if(isset($_SESSION['uname']))
{
    unset($_SESSION['uname']);
    session_destroy();
    header("Location: login.php");
}
else{
    header("Location: login.php");
}
?>