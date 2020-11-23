
<?php
//entry.php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:forNotRegisteredUser.php?action=login");
}
?>
