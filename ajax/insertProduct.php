<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$name=$_POST['name'];
$type=$_POST['type'];
$amount=$_POST['amount'];
$sql="INSERT INTO preke (pavadinimas, tipas, kiekis) VALUES ('$name', '$type', '$amount')";
if ($conn->query($sql) === TRUE) {
    echo "duomenys įvesti";
}
else
{
    echo "duomenų nepavyko įvesti";
}
?>
