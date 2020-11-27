<?php
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

    <title>Medžiagos</title>

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
            <a href="index.php" class="list-group-item list-group-item-action bg-light">Pradžia</a>
            <a href="MedžiagosĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Medžiagos įtraukimas</a>
            <a href="VartotojoĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Vartotojo įtraukimas</a>
            <a href="PrekėsĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Prekės įtraukimas</a>
            <a href="UžsakymųĮtraukimas.php" class="list-group-item list-group-item-action bg-light">Užsakymų valdymas</a>
            <a class="dropdown-toggle list-group-item list-group-item-action bg-light" id="papildomos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Papildomos funkcijos
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="papildomos">
                <a class="dropdown-item" href="duomSchemos.php">Duomenų bazių schemos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="puslapioZemelapis.php">Puslapio žemėlapis</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="failoKoregavimas.php">Protokolo koregavimas</a>
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
                        <!--material Modal-->
                        <div id="materialModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Medžiagos įtraukimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Medžiagos pavadinimas</label>
                                        <input type="text" name="mpavadinimas" id="mpavadinimas" class="form-control" />
                                        <br />
                                        <label>Medžiagos tipas</label>
                                        <input type="text" name="mtipas" id="mtipas" class="form-control" />
                                        <br />
                                        <label>Medžiagos kiekis</label>
                                        <input type="text" name="mkiekis" id="mkiekis" class="form-control" />
                                        <br />
                                        <button type="button" name="insertMaterial_button" id="insertMaterial_button" class="btn btn-warning" >Įterpti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--material del Modal-->
                        <div id="materialDelModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Medžiagos ištrinimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Medžiagos id</label>
                                        <input type="text" name="mid" id="mid" class="form-control" />
                                        <br />
                                        <button type="button" name="deleteMaterial_button" id="deleteMaterial_button" class="btn btn-warning" >Ištrinti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--material edit Modal-->
                        <div id="materialEditModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Medžiagos koregavimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Medžiagos id</label>
                                        <input type="text" name="meid" id="meid" class="form-control" />
                                        <br />
                                        <label>Medžiagos pavadinimas</label>
                                        <input type="text" name="mepavadinimas" id="mepavadinimas" class="form-control" />
                                        <br />
                                        <label>Medžiagos tipas</label>
                                        <input type="text" name="metipas" id="metipas" class="form-control" />
                                        <br />
                                        <label>Medžiagos kiekis</label>
                                        <input type="text" name="mekiekis" id="mekiekis" class="form-control" />
                                        <br />
                                        <button type="button" name="editMaterial_button" id="editMaterial_button" class="btn btn-warning" >Koreguoti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--material count Modal-->
                        <div id="materialCountModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Medžiagų skaičiavimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Medžiagos kiekis</label>
                                        <input type="text" name="amkiekis" id="amkiekis" class="form-control" />
                                        <br />
                                        <button type="button" name="countMaterial_button" id="countMaterial_button" class="btn btn-warning" >Apskaičiuoti</button>
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
            <h1 class="mt-4">Medžiagos įtraukimas</h1>
            <p><button type="button " name="materialInsert" id="materialInsert" class="btn btn-primary" data-toggle="modal" data-target="#materialModal">Įtraukti medžiagą</button>
            <button type="button " name="materialDelete" id="materialDelete" class="btn btn-primary" data-toggle="modal" data-target="#materialDelModal">Ištrinti medžiagą</button>
                <button type="button " name="materialEdit" id="materialEdit" class="btn btn-primary" data-toggle="modal" data-target="#materialEditModal">Koreguoti medžiagą</button>
                <button class="btn btn-primary" id="PrintButton"  onclick="printDiv('printableArea')">Spausdinti lentelę</button>
                <button type="button " name="countAmount" id="countAmount" class="btn btn-primary" data-toggle="modal" data-target="#materialCountModal">Medžiagų skaičius pagal kiekį</button></p>
            <div id="printableArea">
            <p><table border='1' class='float-left' style='border-collapse: collapse;'>
                <tr>
                    <th>Id</th>
                    <th>Pavadinimas</th>
                    <th>Tipas</th>
                    <th>Kiekis</th>
                </tr>
                <?php
                $query = "select * from medziaga";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $pavadinimas = $row['pavadinimas'];
                    $tipas = $row['tipas'];
                    $kiekis = $row['kiekis'];

                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$pavadinimas."</td>";
                    echo "<td>".$tipas."</td>";
                    echo "<td>".$kiekis."</td>";
                    echo "</tr>";
                }
                ?>
            </table></p>
            </div>
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
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
        $("#insertMaterial_button").click(function(){
            var name=$("#mpavadinimas").val();
            var email=$("#mtipas").val();
            var type=$("#mkiekis").val();
            $.ajax({
                url:'insertMaterial.php',
                method:'POST',
                data:{
                    name:name,
                    email:email,
                    type:type
                },
                success:function(data){
                    alert(data);
                    $('#materialModal').hide();
                    location.replace("MedžiagosĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#deleteMaterial_button").click(function(){
            var id=$("#mid").val();
            $.ajax({
                url:'deleteMaterial.php',
                method:'POST',
                data:{
                    id:id
                },
                success:function(data){
                    alert(data);
                    $('#materialDelModal').hide();
                    location.replace("MedžiagosĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#editMaterial_button").click(function(){
            var id=$("#meid").val();
            var name=$("#mepavadinimas").val();
            var type=$("#metipas").val();
            var amount=$("#mekiekis").val();
            $.ajax({
                url:'editMaterial.php',
                method:'POST',
                data:{
                    id:id,
                    name:name,
                    type:type,
                    amount:amount
                },
                success:function(data){
                    alert(data);
                    $('#materialEditModal').hide();
                    location.replace("MedžiagosĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#countMaterial_button").click(function(){
            var amount=$("#amkiekis").val();
            $.ajax({
                url:'countMaterial.php',
                method:'POST',
                data:{
                    amount:amount
                },
                success:function(data){
                    alert(data);
                    $('#materialCountModal').hide();
                    location.replace("MedžiagosĮtraukimas.php");
                }
            });
        });
    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        location.replace("MedžiagosĮtraukimas.php");
    }
</script>

</body>

</html>

