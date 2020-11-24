<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$amount=$_POST['amount'];
$sql="SELECT * FROM medziaga WHERE kiekis = $amount";
if ($result=mysqli_query($conn,$sql))
{
    $rowcount=mysqli_num_rows($result);
    echo "$rowcount";
    mysqli_free_result($result);
}
else {echo "Medžiaga nerasta";}
mysqli_close($conn);
?>

