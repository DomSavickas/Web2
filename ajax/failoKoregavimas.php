<?php
include "C:/xampp/htdocs/2darbas/ajax/config.php";
include "downloadFile.php";
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
        <div class="sidebar-heading ">Hexa ĮVA</div>
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

                        <!--Email Modal-->
                        <div id="failoModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Protokolo koregavimas</h4>
                                    </div>
                                    <div class="modal-body">
                                            <label>Vardas pavardė</label>
                                            <input type="text" name="fvardas" id="fvardas" class="form-control" />
                                            <br />
                                            <label>admin id</label>
                                            <input type="text" name="faid" id="faid" class="form-control" />
                                            <br />
                                            <label>Protokolas</label>
                                            <input type="text" name="fprotokolas" id="fprotokolas" class="form-control" />
                                            <br />
                                            <button type="submit" name="sendFile" id="sendFile" class="btn btn-warning" >Koreguoti</button>
                                        </form>
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
            <h1 class="mt-4">Protokolo koregavimas</h1>
            <p><button type="button " name="editProtocol" id="editProtocol" class="btn btn-primary" data-toggle="modal" data-target="#failoModal">Koreguoti protokolą</button>
            <a class="btn btn-primary" href="downloadFile.php?path=Ataskaita.txt">Atsisiūsti protokolą</a></p>
        </div>
    </div>
    <!-- Footer -->
    <footer><!--<div class="footer-copyright text-center py-3">© 2020 Copyright: Dominykas Savickas, dominykas.savickas@knf.stud.vu.lt</div>--></footer>
    <!-- Footer -->
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
        $("#sendFile").click(function(){
            var name=$("#fvardas").val();
            var id=$("#faid").val();
            var protocol=$("#fprotokolas").val();
            $.ajax({
                url:'sendFile.php',
                method:'POST',
                data:{
                    name:name,
                    id:id,
                    protocol:protocol
                },
                success:function(data){
                    $('#failoModal').hide();
                    location.replace("failoKoregavimas.php");
                }
            });
        });
    });
</script>

</body>

</html>
