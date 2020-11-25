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
<?php/*
$connect = mysqli_connect("localhost", "root", "", "company_db");
session_start();
if(isset($_SESSION["username"]))
{
    header("location:entry.php");
}
if(isset($_POST["register"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo '<script>alert("Both Fields are required")</script>';
    }
    else
    {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO admin_login(admin_name, admin_password) VALUES('$username', '$password')";
        if(mysqli_query($connect, $query))
        {
            echo '<script>alert("Registration Done")</script>';
        }
    }
}
if(isset($_POST["login"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo '<script>alert("Užpildykite abu laukus")</script>';
    }
    else
    {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $query = "SELECT * FROM admin_login WHERE admin_name = '$username'";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                if(password_verify($password, $row["password"]))
                {
                    //return true;
                    $_SESSION["username"] = $username;
                    header("location:entry.php");
                }
                else
                {
                    //return false;
                    echo '<script>alert("Neteisingi duomenys")</script>';
                }
            }
        }
        else
        {
            echo '<script>alert("Neteisingi duomenys")</script>';
        }
    }
}
*/?>
