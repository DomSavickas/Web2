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

    <title>Prekės</title>

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
                        <!--product Modal-->
                        <div id="productModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Prekės įtraukimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Prekės pavadinimas</label>
                                        <input type="text" name="ppavadinimas" id="ppavadinimas" class="form-control" />
                                        <br />
                                        <label>Prekės tipas</label>
                                        <input type="text" name="ptipas" id="ptipas" class="form-control" />
                                        <br />
                                        <label>Prekės kiekis</label>
                                        <input type="text" name="pkiekis" id="pkiekis" class="form-control" />
                                        <br />
                                        <button type="button" name="insertProduct_button" id="insertProduct_button" class="btn btn-warning" >Įterpti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--product del Modal-->
                        <div id="productDelModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Prekės šalinimas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Prekės ID</label>
                                        <input type="text" name="pid" id="pid" class="form-control" />
                                        <br />
                                        <button type="button" name="deleteProduct_button" id="deleteProduct_button" class="btn btn-warning" >Šalinti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal-->
                        <!--product edit Modal-->
                        <div id="productEditModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Koreguoti prekę</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Prekės ID</label>
                                        <input type="text" name="peid" id="peid" class="form-control" />
                                        <br />
                                        <label>Prekės pavadinimas</label>
                                        <input type="text" name="pepavadinimas" id="pepavadinimas" class="form-control" />
                                        <br />
                                        <label>Prekės tipas</label>
                                        <input type="text" name="petipas" id="petipas" class="form-control" />
                                        <br />
                                        <label>Prekės kiekis</label>
                                        <input type="text" name="pekiekis" id="pekiekis" class="form-control" />
                                        <br />
                                        <button type="button" name="editProduct_button" id="editProduct_button" class="btn btn-warning" >Koreguoti</button>
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
            <h1 class="mt-4">Prekės įtraukimas</h1>
            <p><button type="button " name="productInsert" id="productInsert" class="btn btn-primary" data-toggle="modal" data-target="#productModal">Įtraukti prekę</button>
                <button type="button " name="productDelete" id="productDelete" class="btn btn-primary" data-toggle="modal" data-target="#productDelModal">Ištrinti prekę</button>
                <button type="button " name="productEdit" id="productEdit" class="btn btn-primary" data-toggle="modal" data-target="#productEditModal">Koreguoti prekę</button>
                <button class="btn btn-primary" id="PrintButton"  onclick="printDiv('printableArea')">Spausdinti lentelę</button></p>
            <div id="printableArea">
            <p><table border='1' class='float-left' style='border-collapse: collapse;'>
                <tr>
                    <th>Id</th>
                    <th>Pavadinimas</th>
                    <th>Tipas</th>
                    <th>Kiekis</th>
                </tr>
                <?php
                $query = "select * from preke";
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
        $("#insertProduct_button").click(function(){
            var name=$("#ppavadinimas").val();
            var type=$("#ptipas").val();
            var amount=$("#pkiekis").val();
            $.ajax({
                url:'insertProduct.php',
                method:'POST',
                data:{
                    name:name,
                    type:type,
                    amount:amount
                },
                success:function(data){
                    alert(data);
                    $('#productModal').hide();
                    location.replace("PrekėsĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#deleteProduct_button").click(function(){
            var id=$("#pid").val();
            $.ajax({
                url:'deleteProduct.php',
                method:'POST',
                data:{
                    id:id,
                },
                success:function(data){
                    alert(data);
                    $('#productDelModal').hide();
                    location.replace("PrekėsĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#editProduct_button").click(function(){
            var id=$("#peid").val();
            var name=$("#pepavadinimas").val();
            var type=$("#petipas").val();
            var amount=$("#pekiekis").val();
            $.ajax({
                url:'editProduct.php',
                method:'POST',
                data:{
                    id:id,
                    name:name,
                    type:type,
                    amount:amount
                },
                success:function(data){
                    alert(data);
                    $('#productEditModal').hide();
                    location.replace("PrekėsĮtraukimas.php");
                }
            });
        });
    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        location.replace("PrekėsĮtraukimas.php");
    }
</script>

</body>

</html>

