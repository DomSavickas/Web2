<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "company_db");
if(isset($_POST["username"]))
{
    $query = "SELECT * FROM admin_login WHERE admin_name = '".$_POST["username"]."'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            if (password_verify($_POST["password"], $row["admin_password"]))
            {
                $_SESSION['username'] = $_POST['username'];
                echo 'Yes';
            } else
            {
                echo 'No';
            }
        }
    }
}
if(isset($_POST["action"]))
{
    unset($_SESSION["username"]);
}
?>

