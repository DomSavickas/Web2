<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> <!--XSS apsaugai-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="2 laboratorinis darbas">
    <meta name="author" content="DominykasSavickasISKS9">

    <title>Admino registracija</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/js/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">

</head>
<header></header>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Hexa ĮVA</div>
        <div class="list-group list-group-flush">
            <a href="systemAdmin.php" class="list-group-item list-group-item-action bg-light">Prisijungimas</a>
            <a href="registerAdmin.php" class="list-group-item list-group-item-action bg-light">Registruoti Adminą</a>
            <a href="sadminPusalpioZemelapis.php" class="list-group-item list-group-item-action bg-light">Puslapio žemėlapis</a>
            </a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Meniu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="systemAdmin.php">Pradžia <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Apie</button>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Apie</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Tinklapis sukurtas VU Knf studento Dominyko Savicko ISKS9.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal content end-->
                        <!--Login Modal-->
                        <div id="loginModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Prisijungimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Vardas</label>
                                        <input type="text" name="username" id="username" class="form-control" />
                                        <br />
                                        <label>Slaptažodis</label>
                                        <input type="password" name="password" id="password" class="form-control" />
                                        <br />
                                        <button type="button" name="login_button" id="login_button" class="btn btn-warning" >Prisijungti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--Register Modal-->
                        <div id="registerModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Registracija</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Vardas</label>
                                        <input type="text" name="ausername" id="ausername" class="form-control" />
                                        <br />
                                        <label>Slaptažodis</label>
                                        <input type="password" name="apassword" id="apassword" class="form-control" />
                                        <br />
                                        <button type="button" name="register_button" id="register_button" class="btn btn-warning" >Registruotis</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--Admin del Modal-->
                        <div id="registerDelModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Admin šalinimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Admin ID</label>
                                        <input type="text" name="delaid" id="delaid" class="form-control" />
                                        <br />
                                        <button type="button" name="deleteAdmin_button" id="deleteAdmin_button" class="btn btn-warning" >Šalinti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--Admin edit Modal-->
                        <div id="registerEditModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Koreguoti admin</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Admin ID</label>
                                        <input type="text" name="eaid" id="eaid" class="form-control" />
                                        <br />
                                        <label>Admin vardas</label>
                                        <input type="text" name="eausername" id="eausername" class="form-control" />
                                        <br />
                                        <label>Admin slaptažodis</label>
                                        <input type="password" name="eapassword" id="eapassword" class="form-control" />
                                        <br />
                                        <button type="button" name="editAdmin_button" id="editAdmin_button" class="btn btn-warning" >Koreguoti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <h1 class="mt-4">Registruoti Adminą</h1>
            <p><button type="button " name="register" id="register" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Registruoti adminą</button>
                <button type="button " name="delAdmin" id="delAdmin" class="btn btn-primary" data-toggle="modal" data-target="#registerDelModal">Šalinti adminą</button>
                <button type="button " name="editAdmin" id="editAdmin" class="btn btn-primary" data-toggle="modal" data-target="#registerEditModal">Koreguoti adminą</button></p>
            <p><table border='1' class='float-left' style='border-collapse: collapse;'>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>password</th>
                </tr>
                <?php
                $query = "select * from admin_login";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['admin_id'];
                    $admin_name = $row['admin_name'];
                    $admin_password = $row['admin_password'];

                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$admin_name."</td>";
                    echo "<td>".$admin_password."</td>";
                    echo "</tr>";
                }
                ?>
            </table></p>
            <br />
            <?php
            if(isset($_SESSION['username']))
            {
                ?>
                <div align="center">
                    <h2 class="mt-4">Sveikiname prisijungus - <?php echo $_SESSION['username']; ?></h2><br />
                    <a href="forNotRegisteredUser.php" id="logout">Atsijungti</a>
                </div>
                <?php
            }
            else
            {
                ?>
                <?php
            }
            ?>
        </div>
        <!-- Footer -->
        <footer><div class="footer-copyright text-center fixed-bottom py-3">© 2020 Copyright: Dominykas Savickas, dominykas.savickas@knf.stud.vu.lt</div></footer>
        <!-- Footer -->
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $(document).ready(function(){
        $('#login_button').click(function(){
            var username = $('#username').val();
            var password = $('#password').val();
            if(username != '' && password != '')
            {
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data: {username:username, password:password},
                    success:function(data)
                    {
                        //alert(data);
                        if(data == 'No')
                        {
                            alert("Neteisingi duomenys");
                        }
                        else
                        {
                            $('#loginModal').hide();
                            location.reload();
                        }
                    }
                });
            }
            else
            {
                alert("Užpildykite abu laukus");
            }
        });
        $('#logout').click(function(){
            var action = "logout";
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{action:action},
                success:function()
                {
                    location.reload();
                }
            });
        });
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
        $("#register_button").click(function(){
            var name=$("#ausername").val();
            var pass=$("#apassword").val();
            $.ajax({
                url:'register.php',
                method:'POST',
                data:{
                    name:name,
                    pass:pass
                },
                success:function(data){
                    alert(data);
                    $('#registerModal').hide();
                    location.replace("registerAdmin.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#deleteAdmin_button").click(function(){
            var id=$("#delaid").val();
            $.ajax({
                url:'deleteAdmin.php',
                method:'POST',
                data:{
                    id:id
                },
                success:function(data){
                    alert(data);
                    $('#registerDelModal').hide();
                    location.replace("registerAdmin.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#editAdmin_button").click(function(){
            var id=$("#eaid").val();
            var name=$("#eausername").val();
            var pass=$("#eapassword").val();
            $.ajax({
                url:'editAdmin.php',
                method:'POST',
                data:{
                    id:id,
                    name:name,
                    pass:pass
                },
                success:function(data){
                    alert(data);
                    $('#registerEditModal').hide();
                    location.replace("registerAdmin.php");
                }
            });
        });
    });
</script>

</body>

</html>



