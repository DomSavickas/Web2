<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$sql="DELETE FROM vartotojas WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "duomenys ištrinti";
}
else
{
    echo "duomenų nepavyko ištrinti";
}
?>
