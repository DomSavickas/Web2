<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql="INSERT INTO admin_login (admin_name, admin_password) VALUES ('$name', '$pass')";
if ($conn->query($sql) === TRUE) {
	echo "duomenys įvesti";
}
else
{
	echo "duomenų nepavyko įvesti";
}
?>