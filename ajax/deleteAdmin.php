<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$sql="DELETE FROM admin_login WHERE admin_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "duomenys ištrinti";
}
else
{
    echo "duomenų nepavyko ištrinti";
}
?>
