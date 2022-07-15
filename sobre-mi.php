<?php
    $pg ="sobre-mi";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/estilos.css">
    <link rel="shortcut icon" href="images/A.png" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="sobre-mi">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <div class="container pb-3 yo">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Apasionado por la tecnología y gestión de proyectos. Soy estudiante de
                        programación web full stack en DePC Suite.</p>
                    <a href="contacto.php" class="btn-Online">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 pb-2 mt-4 offset-sm-2 text-center">
                    <img src="images/yo.jpeg" alt="Alex Acuña" title="Alex Acuña" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-12">
                        <h2 class="py-5 stack">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/1209/javascript.jpeg" width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg" width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/2538/kEpgHiC9.png" width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/1020/OYIaJ1KK.png" width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png" width="60" alt="">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png" width="85"
                                alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png" width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" src="https://img.stackshare.io/service/6727/css.png"
                                width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" src="https://img.stackshare.io/service/1046/git.png"
                                width="60" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png"
                                width="123" alt="">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto"
                                src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg" width="60" alt="">
                        </div>
                    </div>
                </div>
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow rounded bg-white">
                    <div class="col-2 p-5 d-none d-sm-block">
                        <img src="images/sin-logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-10 py-3 py-sm-0">
                        <h3>Lorem</h3>
                        <h4>LOREM</h4>
                        <h5>ene 2015 - dic 2016</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quae saepe laudantium quod
                            ipsam facere veniam, eveniet minima aliquid asperiores, explicabo, officiis beatae eos ipsum
                            qui animi quisquam in laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quidem illum a aliquid excepturi numquam magni? Esse id, minima quisquam pariatur alias
                            impedit maxime. Sequi corporis fuga iste labore officiis delectus.</p>
                    </div>
                    <div class="col-2 p-5 d-none d-sm-block">
                        <img src="images/sin-logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-10 py-4 py-sm-0">
                        <h3>Lorem</h3>
                        <h4>LOREM</h4>
                        <h5>feb 2017 - jul 2019</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quae saepe laudantium quod
                            ipsam facere veniam, eveniet minima aliquid asperiores, explicabo, officiis beatae eos ipsum
                            qui animi quisquam in laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quidem illum a aliquid excepturi numquam magni? Esse id, minima quisquam pariatur alias
                            impedit maxime. Sequi corporis fuga iste labore officiis delectus.</p>
                    </div>
                    <div class="col-2 p-5 d-none d-sm-block">
                        <img src="images/sin-logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-10 py-4 py-sm-0">
                        <h3>Lorem</h3>
                        <h4>LOREM</h4>
                        <h5>abr 2012 - ago 2013</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quae saepe laudantium quod
                            ipsam facere veniam, eveniet minima aliquid asperiores, explicabo, officiis beatae eos ipsum
                            qui animi quisquam in laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quidem illum a aliquid excepturi numquam magni? Esse id, minima quisquam pariatur alias
                            impedit maxime. Sequi corporis fuga iste labore officiis delectus.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 py-5 pb-4 pb-sm-0">
                    <h2><i class="fa-solid fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Secundario completo</h3>
                            <h4>Colegio Evangélico Buenas Nuevas</h4>
                            <h5>mar 2016 - dic 2021</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Lorem</h3>
                            <h4>Lorem</h4>
                            <h5>mar 2016 - dic 2021</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Lorem</h3>
                            <h4>Lorem</h4>
                            <h5>mar 2016 - dic 2021</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Lorem</h3>
                            <h4>Lorem</h4>
                            <h5>mar 2016 - dic 2021</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="curso" class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-12">
                    <h2><i class="fa-solid fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow mb-5">
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Programación web</h3>
                            <h4>DePC Suite</h4>
                            <h5>Expedición: dic 2022</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Lorem</h3>
                            <h4>Lorem</h4>
                            <h5>Expedición: dic 2022</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Lorem</h3>
                            <h4>Lorem</h4>
                            <h5>Expedición: dic 2022</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 py-3">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-10">
                            <h3>Lorem</h3>
                            <h4>Lorem</h4>
                            <h5>Expedición: dic 2022</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="extras">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-12 col-sm-6 pb-3 pb-sm-0 pe-sm-4">
                        <div class="row shadow bg-white chatS">
                            <div class="col-4 chat py-4 text-center">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            <div class="col-8 py-5 ps-5">
                                <h2>IDIOMAS</h2>
                                <h3>ESPAÑOL - Nativo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pb-sm-0 ps-sm-4">
                        <div class="row shadow bg-white chatS">
                            <div class="col-4 chat py-4 text-center">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 py-5 ps-5">
                                <h2>HOBBIES</h2>
                                <h3>Fútbol</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class=" container">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank" title="Whatsapp"
                class="btnWhatsapp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row py-sm-4 py-3">
            <div class="col-sm-3 col-12">
                <div class="px-5">
                    <a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div>
                    <a href="https://github.com/" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="col-12 col-sm-3 pb-1">
                <div>
                    <p class="ext">Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" class="ext"
                            target="_blank">DePC Suite</a></p>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div>
                    <a href="mailto:alexacuna122003@gmail.com" class="Email">alexacuna122003@gmail.com</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>