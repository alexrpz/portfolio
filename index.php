<?php
    $pg ="inicio";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/estilos.css">
    <link rel="shortcut icon" href="images/A.png" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="inicio">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-sm-12 col-12 text-center mt-sm-2 div-cohete">
                <a href="proyectos.html"><img src="images/cohete.svg" alt="" class="cohete"></a>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12 col-12 py-4 py-sm-4">
                <div class="text-center">
                    <a href="proyectos.php" class="btn-proyectos shadow">Conoce mis proyectos</a>
                </div>
            </div>                
        </div>
        </div>
    </main>
    <footer class="container">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank" title="Whatsapp"
                class="btnWhatsapp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row py-sm-5 py-3">
            <div class="col-sm-3 col-12">
                <div class="px-5">
                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div>
                    <a href="https://github.com/" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="col-12 col-sm-3 ps-0 text-center text-sm-start">
                <div>
                    <p>Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank">DePC Suite</a></p>
                </div>
            </div>
            <div class="col-12 col-sm-3 ps-4 ps-sm-0">
                <div>
                    <a href="mailto:alexacuna122003@gmail.com" class="Email">alexacuna122003@gmail.com</a>
                </div>    
            </div>
        </div>
    </footer>
</body>

</html>