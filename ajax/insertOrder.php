<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$sql="INSERT INTO uzsakymas (vartotojo_id, vartotojo_email, vartotojo_tel) VALUES ('$name', '$email', '$tel')";
if ($conn->query($sql) === TRUE) {
    echo "duomenys įvesti";
}
else
{
    echo "duomenų nepavyko įvesti";
}
?>

