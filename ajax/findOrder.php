<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'company_db');
$id=$_POST['id'];
$number=$_POST['number'];
$sql="SELECT uzsakymas.*, vartotojas.* FROM uzsakymas, vartotojas WHERE '$id' = vartotojas.id AND uzsakymas.id = '$number'";
if ($result=mysqli_query($conn,$sql))
{
    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $cname => $cvalue){
            print "$cname: $cvalue\t";
        }
        print "\r\n";
    }

}
else {echo "Vartotojas nerastas";}
mysqli_close($conn);
?>