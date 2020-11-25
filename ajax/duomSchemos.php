<?php
include "C:/xampp/htdocs/2darbas/ajax/config.php";
include "downloadFile.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> <!--XSS apsaugai-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="2 laboratorinis darbas">
    <meta name="author" content="DominykasSavickasISKS9">

    <title>Duomenų bazės schemos</title>

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

                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <h1 class="mt-4">Duomenų bazių schemos</h1>
            <p><img class="" src="/2darbas/assets/img/admin.jpg" alt="admin">
                <img class="" src="/2darbas/assets/img/medziaga.jpg" alt="medziaga">
                <img class="" src="/2darbas/assets/img/preke.jpg" alt="preke">
                <img class="" src="/2darbas/assets/img/uzsakymas.jpg" alt="uzsakymas">
                <img class="" src="/2darbas/assets/img/vartotojas.jpg" alt="vartotojas">
                <img class="" src="/2darbas/assets/img/sadmin.jpg" alt="sadmin"></p>
            <br>
            <p><h5>Atributai:</h5></p>
            <p><h6><strong>admin_id</strong> - šis atributas skirtas unikaliam admino id, kurį jis gauna, kai jį užregistruoja sistemos administratorius;</h6></p>
            <p><h6><strong>admin_name</strong> - šis atributas nusako administratoriaus username</h6></p>
            <p><h6><strong>admin_password</strong> - šis atributas nusako administratoriaus slaptažodį</h6></p>
            <p><h6><strong>id</strong> - šis atributas skirtas unikaliam id visose sql lentelėse</h6></p>
            <p><h6><strong>pavadinimas</strong> - šis atributas nusako medžiagos/prekės pavadinimą jų lentelėse</h6></p>
            <p><h6><strong>tipas</strong> - šis atributas nusako medžiagos/prekės tipą jų lentelėse</h6></p>
            <p><h6><strong>kiekis</strong> - šis atributas nusako medžiagos/prekės kiekį jų lentelėse</h6></p>
            <p><h6><strong>sadmin_id</strong> - šis atributas skirtas unikaliam sistemos admin id</h6></p>
            <p><h6><strong>sadmin_name</strong> - šis atributas nusako sistemos administratoriaus username</h6></p>
            <p><h6><strong>sadmin_password</strong> - šis atributas nusako sistemos administratoriaus slaptažodį</h6></p>
            <p><h6><strong>id (uzsakymas lentelėje)</strong> - šis atributas nusako unikalų užsakymo id</h6></p>
            <p><h6><strong>vartotojo_id</strong> - šis atributas nusako vartotojo id, kuriam yra priskirtas šis užsakymas</h6></p>
            <p><h6><strong>vartotojo_email</strong> - šis atributas nusako vartotojo email, kuriam yra priskirtas šis užsakymas</h6></p>
            <p><h6><strong>vartotojo_tel</strong> - šis atributas nusako vartotojo telefono numerį, kuriam yra priskirtas šis užsakymas</h6></p>
            <p><h6><strong>vartotojas</strong> - šis atributas nusako vartotojo vardą</h6></p>
            <p><h6><strong>uzsakymoNr</strong> - šis atributas nusako vartotojui priskirto užsakymo numerį (id)</h6></p>
            <p><h6><strong>email</strong> - šis atributas nusako vartotojo el-pašto adresą</h6></p>
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
                    location.replace("duomSchemos.php");
                }
            });
        });
    });
</script>

</body>

</html>
