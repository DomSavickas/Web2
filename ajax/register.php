<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$name=$_POST['name'];
$email=$_POST['email'];
$sql="INSERT INTO admin_login (admin_name, admin_password) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
	echo "duomenys įvesti";
}
else
{
	echo "duomenų nepavyko įvesti";
}
?>