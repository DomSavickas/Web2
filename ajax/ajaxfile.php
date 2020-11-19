<?php
include "config.php";

$userid = 0;
if(isset($_POST['userid'])){
    $userid = mysqli_real_escape_string($con,$_POST['userid']);
}
$sql = "select * from vartotojas where id=".$userid;
$result = mysqli_query($con,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
    $id = $row['id'];
    $vartotojas = $row['vartotojas'];
    $uzsakymoNr = $row['uzsakymoNr'];
    $email = $row['email'];

    $response .= "<tr>";
    $response .= "<td>Vardas : </td><td>".$vartotojas."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Užsakymo numeris : </td><td>".$uzsakymoNr."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Email : </td><td>".$email."</td>";
    $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;
