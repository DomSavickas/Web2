<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$hash = password_hash($pass, PASSWORD_DEFAULT);
$sql="UPDATE admin_login SET admin_name='$name', admin_password='$hash' WHERE admin_id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "duomenys koreguoti";
}
else
{
    echo "duomenų nepavyko koreguoti";
}
?>
