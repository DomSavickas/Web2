<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$name=$_POST['name'];
$nr=$_POST['nr'];
$email=$_POST['email'];
$sql="INSERT INTO vartotojas (vartotojas, uzsakymoNr, email) VALUES ('$name', '$nr', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "duomenys įvesti";
}
else
{
    echo "duomenų nepavyko įvesti";
}
?>

