<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$sql="DELETE FROM admin_login WHERE admin_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "duomenys ištrinti";
}
else
{
    echo "duomenų nepavyko ištrinti";
}
?>
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company_db";
$id=$_POST['id'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // sql to delete a record
    $sql = "DELETE FROM admin_login WHERE admin_id = $id";

    // use exec() because no results are returned
    $conn->exec($sql);
$conn = null;
*/?>
