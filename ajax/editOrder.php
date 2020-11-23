<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$uid=$_POST['uid'];
$vid=$_POST['vid'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$sql="UPDATE uzsakymas SET vartotojo_id='$vid', vartotojo_email='$email', vartotojo_tel='$tel' WHERE id='$uid'";
if ($conn->query($sql) === TRUE) {
    echo "duomenys koreguoti";
}
else
{
    echo "duomenų nepavyko koreguoti";
}
?>
