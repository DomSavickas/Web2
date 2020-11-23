<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$name=$_POST['name'];
$type=$_POST['type'];
$amount=$_POST['amount'];
$sql="UPDATE preke SET pavadinimas='$name', tipas='$type', kiekis='$amount' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "duomenys koreguoti";
}
else
{
    echo "duomenų nepavyko koreguoti";
}
?>
