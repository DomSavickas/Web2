<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql="UPDATE admin_login SET admin_name='$name', admin_password='$pass' WHERE admin_id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "duomenys koreguoti";
}
else
{
    echo "duomenų nepavyko koreguoti";
}
?>
