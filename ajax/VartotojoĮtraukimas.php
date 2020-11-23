<?php
include "config.php";
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
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Hexa ĮVA</div>
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-light">Pradžia</a>
            <a href="MedžiagosĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Medžiagos įtraukimas</a>
            <a href="VartotojoĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Vartotojo įtraukimas</a>
            <a href="PrekėsĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Prekės įtraukimas</a>
            <a href="UžsakymųĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Užsakymų valdymas</a>
            <a class="dropdown-toggle list-group-item list-group-item-action bg-light" id="papildomos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Papildomos funkcijos
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="papildomos">
                <a class="dropdown-item" href="#">Duomenų bazių schemos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Puslapio žemėlapis</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="failoKoregavimas.php">Failo koregavimas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="susisiekite.php">Susisiekite</a>
            </div>
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
                        <a class="nav-link" href="index.php">Pradžia <span class="sr-only">(current)</span></a>
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

                        <!--user Modal-->
                        <div id="userModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Vartotojo įtraukimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Vartotojo vardas</label>
                                        <input type="text" name="vvardas" id="vvardas" class="form-control" />
                                        <br />
                                        <label>Užsakymo Nr.</label>
                                        <input type="text" name="vuzsakymas" id="vuzsakymas" class="form-control" />
                                        <br />
                                        <label>Email</label>
                                        <input type="text" name="vemail" id="vemail" class="form-control" />
                                        <br />
                                        <button type="button" name="insertUser_button" id="insertUser_button" class="btn btn-warning" >Įterpti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--user del Modal-->
                        <div id="userDelModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Vartotojo Šalinimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Vartotojo ID</label>
                                        <input type="text" name="delvid" id="delvid" class="form-control" />
                                        <br />
                                        <button type="button" name="deleteUser_button" id="deleteUser_button" class="btn btn-warning" >Šalinti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--user edit Modal-->
                        <div id="userEditModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Vartotojo koregavimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Vartotojo ID</label>
                                        <input type="text" name="evid" id="evid" class="form-control" />
                                        <br />
                                        <label>Vartotojo vardas</label>
                                        <input type="text" name="evvardas" id="evvardas" class="form-control" />
                                        <br />
                                        <label>Užsakymo Nr.</label>
                                        <input type="text" name="evuzsakymas" id="evuzsakymas" class="form-control" />
                                        <br />
                                        <label>Email</label>
                                        <input type="text" name="evemail" id="evemail" class="form-control" />
                                        <br />
                                        <button type="button" name="editUser_button" id="editUser_button" class="btn btn-warning" >Koreguoti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                    </li>
                </ul>
            </div>
        </nav>
        <!--Vartotoju lentele-->
        <div class="container-fluid">
            <h1 class="mt-4">Vartotojo įtraukimas</h1>
            <p><button type="button " name="userInsert" id="userInsert" class="btn btn-primary" data-toggle="modal" data-target="#userModal">Įtraukti vartotoją</button>
                <button type="button " name="userDel" id="userDel" class="btn btn-primary" data-toggle="modal" data-target="#userDelModal">Šalinti vartotoją</button>
                <button type="button " name="userEdit" id="userEdit" class="btn btn-primary" data-toggle="modal" data-target="#userEditModal">Koreguoti vartotoją</button></p>
            <p> <table border='1' class='float-left' style='border-collapse: collapse;'>
                <tr>
                    <th>Id</th>
                    <th>Vardas</th>
                    <th>Užsakymo Nr.</th>
                    <th>Email</th>
                </tr>
                <?php
                $query = "select * from vartotojas";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $vardas = $row['vartotojas'];
                    $unr = $row['uzsakymoNr'];
                    $email = $row['email'];

                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$vardas."</td>";
                    echo "<td>".$unr."</td>";
                    echo "<td>".$email."</td>";
                    /*
                    echo "<td><button data-id='".$id."' class='userinfo'>Info</button></td>";
                     */
                    echo "</tr>";
                }
                ?>
            </table></p>
            <div class="container" >
                <!-- Modal -->
                <div class="modal fade" id="varModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Vartotojo informacija</h4>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                            </div>
                        </div>
                    </div>
                </div>

                <br/>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<!-- Scripts -->
<script>
    $(document).ready(function(){

        $('.userinfo').click(function(){

            var userid = $(this).data('id');

            // AJAX request
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {userid: userid},
                success: function(response){
                    // Add response in Modal body
                    $('.modal-body').html(response);

                    // Display Modal
                    $('#varModal').modal('show');
                }
            });
        });
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
        $("#insertUser_button").click(function(){
            var name=$("#vvardas").val();
            var nr=$("#vuzsakymas").val();
            var email=$("#vemail").val();
            $.ajax({
                url:'insertUser.php',
                method:'POST',
                data:{
                    name:name,
                    nr:nr,
                    email:email
                },
                success:function(data){
                    alert(data);
                    $('#userModal').hide();
                    location.reload();
                }
            });
        });
    });
    $(document).ready(function(){
        $("#deleteUser_button").click(function(){
            var id=$("#delvid").val();
            $.ajax({
                url:'deleteUser.php',
                method:'POST',
                data:{
                    id:id
                },
                success:function(data){
                    alert(data);
                    $('#userDelModal').hide();
                    location.reload();
                }
            });
        });
    });
    $(document).ready(function(){
        $("#editUser_button").click(function(){
            var id=$("#evid").val();
            var name=$("#evvardas").val();
            var nr=$("#evuzsakymas").val();
            var email=$("#evemail").val();
            $.ajax({
                url:'editUser.php',
                method:'POST',
                data:{
                    id:id,
                    name:name,
                    nr:nr,
                    email:email
                },
                success:function(data){
                    alert(data);
                    $('#userEditModal').hide();
                    location.reload();
                }
            });
        });
    });
</script>

</body>

</html>

