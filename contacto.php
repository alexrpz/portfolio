<?php
    $pg ="contacto";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/estilos.css">
    <link rel="shortcut icon" href="images/A.png" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="contacto">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow" required> 
                    </div>
                    <div class="pb-3">
                        <textarea name="" id="" cols="30" rows="10" class="form-control shadow"
                            placeholder="Escribe aquí tu mensaje" required></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank" title="Whatsapp"
                class="btnWhatsapp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row pt-sm-5 pt-0">
            <div class="img, col-3 pt-5 pt-sm-0">
                <div class="px-5">
                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div>
                    <a href="https://github.com/" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="col-12 col-sm-3 pe-5 pe-sm-0 text-center text-sm-start">
                <p>Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" class="Suite">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:alexacuna122003@gmail.com" target="_blank" class="Email">alexacuna122003@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>