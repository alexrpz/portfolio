<?php
    $pg ="proyectos";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/estilos.css">
    <link rel="shortcut icon" href="images/A.png" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="proyecto">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-0 px-0">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/abmclientes" class="btn btn-Online" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="text-center btn-Cod px-4">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-0 px-0">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/login" class="btn btn-Online" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="text-center btn-Cod px-4"">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-0 px-0">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-Online">Ver online</a>
                        </div>
                        <div class="col-6">
                            <a href="" class="text-center btn-Cod px-4">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text start">
                <a class="" href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a class="px-5 px-sm-0" href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank"
                    title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0 pe-sm-0 pe-5">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE" class="Suite">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:alexacuna122003@gmail.com" class="Email">alexacuna122003@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank" title="Whatsapp"
            class="btnWhatsapp"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>