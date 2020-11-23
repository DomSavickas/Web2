<?php
include "Ataskaita.txt";
$name=$_POST['name'];
$id=$_POST['id'];
$protocol=$_POST['protocol'];
//Failo duomenų keitimas
$myfile = fopen("Ataskaita.txt", "w");
$txt ="Admin vardas: $name/n";
fwrite ($myfile, $txt);
$txt ="Admin id: $id/n";
fwrite ($myfile, $txt);
$txt ="Protokolas: $protocol/n";
fwrite ($myfile, $txt);
fclose ($myfile);
//Failo siuntimas
$file = 'Ataskaita.txt';
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>