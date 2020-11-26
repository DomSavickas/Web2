<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company_db";
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=gbk", $username, $password);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$id=$_POST['id'];
$sql=$conn->prepare("DELETE FROM preke WHERE id = :id");
$sql->bindParam(':id',$id);
if ($sql->execute() === TRUE) {
    echo "duomenys ištrinti";
}
else
{
    echo "duomenų nepavyko ištrinti";
}
$conn = null;
?>
