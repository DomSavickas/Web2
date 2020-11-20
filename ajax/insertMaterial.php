<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$name=$_POST['name'];
$email=$_POST['email'];
$type=$_POST['type'];
$sql="INSERT INTO medziaga (pavadinimas, tipas, kiekis) VALUES ('$name', '$email', '$type')";
if ($conn->query($sql) === TRUE) {
    echo "duomenys įvesti";
}
else
{
    echo "duomenų nepavyko įvesti";
}
?>
