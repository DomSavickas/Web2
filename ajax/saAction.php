<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "company_db");
if(isset($_POST["sadusername"]))
{
    $query = "  
      SELECT * FROM sadmin_login  
      WHERE sadmin_name = '".$_POST["sadusername"]."'  
      AND sadmin_password = '".$_POST["sadpassword"]."'  
      ";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['sadusername'] = $_POST['sadusername'];
        echo 'Yes';
    }
    else
    {
        echo 'No';
    }
}
if(isset($_POST["action"]))
{
    unset($_SESSION["sadusername"]);
}
?>