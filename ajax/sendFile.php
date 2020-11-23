<?php
session_start();
include "Ataskaita.txt";
$name=$_POST['name'];
$id=$_POST['id'];
$protocol=$_POST['protocol'];
//Failo duomenų keitimas
$myfile = fopen("Ataskaita.txt", "w");
$txt ="Admin vardas: $name ";
fwrite ($myfile, $txt);
$txt ="Admin id: $id ";
fwrite ($myfile, "\n".$txt);
$txt ="Protokolas: $protocol ";
fwrite ($myfile, "\n".$txt);
fclose ($myfile);
?>
