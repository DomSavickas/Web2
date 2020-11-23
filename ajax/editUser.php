<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$name=$_POST['name'];
$nr=$_POST['nr'];
$email=$_POST['email'];
$sql="UPDATE vartotojas SET vartotojas='$name', uzsakymoNr='$nr', email='$email' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "duomenys koreguoti";
}
else
{
    echo "duomenų nepavyko koreguoti";
}
?>
