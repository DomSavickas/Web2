<?php
session_start();
if(isset($_GET['path'])) {
//Read the filename
    $filename = $_GET['path'];
//Check the file exists or not
    if (file_exists($filename)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: 0");
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));
        header('Pragma: public');
        flush();
        readfile($filename);
    }
}
?>
