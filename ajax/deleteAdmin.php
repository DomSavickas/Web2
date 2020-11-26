<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company_db";
$id=$_POST['id'];
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=gbk", $username, $password);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$sql = $conn->prepare("DELETE FROM admin_login WHERE admin_id = :id");
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