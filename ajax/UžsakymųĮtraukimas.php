<?php
include "C:/xampp/htdocs/2darbas/ajax/config.php";
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
                    <!--material Modal-->
                    <div id="orderInsertModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Užsakymo įtraukimas</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Vartotojo ID</label>
                                    <input type="text" name="uvarid" id="uvarid" class="form-control" />
                                    <br />
                                    <label>Vartotojo email</label>
                                    <input type="text" name="uvaremail" id="uvaremail" class="form-control" />
                                    <br />
                                    <label>Vartotojo tel.</label>
                                    <input type="text" name="uvartel" id="uvartel" class="form-control" />
                                    <br />
                                    <button type="button" name="insertOrder_button" id="insertOrder_button" class="btn btn-warning" >Įterpti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Modal-->
                    <!--material Modal-->
                    <div id="orderDelModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Užsakymo šalinimas</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Užsakymo ID</label>
                                    <input type="text" name="deluordid" id="deluordid" class="form-control" />
                                    <br />
                                    <button type="button" name="delOrder_button" id="delOrder_button" class="btn btn-warning" >Šalinti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Modal-->
                    <!--material Modal-->
                    <div id="orderEditModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Užsakymo koregavimas</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Užsakymo ID</label>
                                    <input type="text" name="euordid" id="euordid" class="form-control" />
                                    <br />
                                    <label>Vartotojo ID</label>
                                    <input type="text" name="euvarid" id="euvarid" class="form-control" />
                                    <br />
                                    <label>Vartotojo email</label>
                                    <input type="text" name="euvaremail" id="euvaremail" class="form-control" />
                                    <br />
                                    <label>Vartotojo tel.</label>
                                    <input type="text" name="euvartel" id="euvartel" class="form-control" />
                                    <br />
                                    <button type="button" name="editOrder_button" id="editOrder_button" class="btn btn-warning" >Koreguoti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Modal-->
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <h1 class="mt-4">Užsakymų įtraukimas</h1>
            <p><button type="button " name="orderInsert" id="orderInsert" class="btn btn-primary" data-toggle="modal" data-target="#orderInsertModal">Įtraukti užsakymą</button>
                <button type="button " name="orderDelete" id="orderDelete" class="btn btn-primary" data-toggle="modal" data-target="#orderDelModal">Šalinti užsakymą</button>
                <button type="button " name="orderEdit" id="orderEdit" class="btn btn-primary" data-toggle="modal" data-target="#orderEditModal">Koreguoti užsakymą</button>
                <button class="btn btn-primary" id="PrintButton"  onclick="printDiv('printableArea')">Spausdinti lentelę</button></p>
            <div id="printableArea">
            <p><table border='1' class='float-left' style='border-collapse: collapse;'>
                <tr>
                    <th>id</th>
                    <th>vartotojo_id</th>
                    <th>vartotojo_email</th>
                    <th>vartotojo_tel</th>
                </tr>
                <?php
                $query = "select * from uzsakymas";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $vartotojo_id = $row['vartotojo_id'];
                    $vartotojo_email = $row['vartotojo_email'];
                    $vartotojo_tel = $row['vartotojo_tel'];

                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$vartotojo_id."</td>";
                    echo "<td>".$vartotojo_email."</td>";
                    echo "<td>".$vartotojo_tel."</td>";
                    echo "</tr>";
                }
                ?>
            </table></p>
            </div>
        </div>
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
        $("#insertOrder_button").click(function(){
            var name=$("#uvarid").val();
            var email=$("#uvaremail").val();
            var tel=$("#uvartel").val();
            $.ajax({
                url:'insertOrder.php',
                method:'POST',
                data:{
                    name:name,
                    email:email,
                    tel:tel
                },
                success:function(data){
                    alert(data);
                    $('#orderInsertModal').hide();
                    location.replace("UžsakymųĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#delOrder_button").click(function(){
            var id=$("#deluordid").val();
            $.ajax({
                url:'deleteOrder.php',
                method:'POST',
                data:{
                    id:id
                },
                success:function(data){
                    alert(data);
                    $('#orderDelModal').hide();
                    location.replace("UžsakymųĮtraukimas.php");
                }
            });
        });
    });
    $(document).ready(function(){
        $("#editOrder_button").click(function(){
            var uid=$("#euordid").val();
            var vid=$("#euvarid").val();
            var email=$("#euvaremail").val();
            var tel=$("#euvartel").val();
            $.ajax({
                url:'editOrder.php',
                method:'POST',
                data:{
                    uid:uid,
                    vid:vid,
                    email:email,
                    tel:tel
                },
                success:function(data){
                    alert(data);
                    $('#orderEditModal').hide();
                    location.replace("UžsakymųĮtraukimas.php");
                }
            });
        });
    });
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        location.replace("UžsakymųĮtraukimas.php");
    }
</script>

</body>

</html>

