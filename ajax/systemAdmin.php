<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="2 laboratorinis darbas">
    <meta name="author" content="DominykasSavickasISKS9">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/js/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">

</head>

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
                        <div id="sadloginModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Prisijungimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Vardas</label>
                                        <input type="text" name="sadusername" id="sadusername" class="form-control" />
                                        <br />
                                        <label>Slaptažodis</label>
                                        <input type="password" name="sadpassword" id="sadpassword" class="form-control" />
                                        <br />
                                        <button type="button" name="sadlogin_button" id="sadlogin_button" class="btn btn-warning" >Prisijungti</button>
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
                                        <input type="text" name="username" id="username" class="form-control" />
                                        <br />
                                        <label>Slaptažodis</label>
                                        <input type="password" name="password" id="password" class="form-control" />
                                        <br />
                                        <button type="button" name="register_button" id="register_button" class="btn btn-warning" >Registruotis</button>
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
            <h1 class="mt-4">Prisijungimas</h1>
            <br />
            <?php
            if(isset($_SESSION['sadusername']))
            {
                ?>
            <div align="center">
                <h2 class="mt-4">Sveikiname prisijungus - <?php echo $_SESSION['sadusername']; ?></h2><br />
                <a href="forNotRegisteredUser.php" id="sadlogout">logout</a>
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
        $('#sadlogin_button').click(function(){
            var sadusername = $('#sadusername').val();
            var sadpassword = $('#sadpassword').val();
            if(sadusername != '' && sadpassword != '')
            {
                $.ajax({
                    url:"saAction.php",
                    method:"POST",
                    data: {sadusername:sadusername, sadpassword:sadpassword},
                    success:function(data)
                    {
                        //alert(data);
                        if(data == 'No')
                        {
                            alert("Neteisingi duomenys");
                        }
                        else
                        {
                            $('#sadloginModal').hide();
                            location.replace("systemAdmin.php");
                        }
                    }
                });
            }
            else
            {
                alert("Užpildykite abu laukus");
            }
        });
        $('#sadlogout').click(function(){
            var action = "sadlogout";
            $.ajax({
                url:"saAction.php",
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
</script>

</body>

</html>


