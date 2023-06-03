<?php 
    include '../back/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            .btnabout {
                color: white!important;
            }

            .btn:hover {
                background-color: #AFD3E2!important;
                color: black!important;
            }
        </style>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!-- Bootstrap, fonts, and CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="./css/about.css">
        <link rel="icon" href="./img/open-book.png">
        <title>Cursos</title>
    </head>
<body>
    <?php include './header.php'?>

    <main>
        <div class="contenedor">
            <div class="principal">
                <div class="container mt-4 mb-1" style="overflow:hidden; padding: 40px;">
                    <div class="text-center">
                        <h2>Acerca de nosotros</h2>
                        <div class="content1 mt-5">
                            <object data="./img/aboutus.svg" style="height: 35vh"></object>
                            <p class="about_texts">En [nombre de la plataforma], nos enorgullece ofrecerte una amplia gama de cursos 
                                en línea diseñados para impulsar tu aprendizaje y ayudarte a alcanzar tus metas 
                                personales y profesionales.</p>
                        </div>
                        <div class="content1 mt-5">
                            <p class="about_texts">Nuestra misión es brindarte acceso a conocimientos de alta calidad y a expertos 
                                en diversos campos, todo desde la comodidad de tu hogar u oficina. Creemos en la educación accesible 
                                para todos, sin importar tu ubicación o circunstancias. Por eso, hemos desarrollado una plataforma 
                                intuitiva y fácil de usar, que te permite aprender a tu propio ritmo y adaptar tu experiencia de 
                                aprendizaje a tus necesidades individuales.</p>
                                <object data="./img/aboutus2.svg" class="imgabout" style="height: 35vh"></object>
                        </div>
                    </div>
                    <a href="./registro.php" class="btn btnabout" style="background-color: #19A7CE;">¡Registrate!</a>
                </div>
                <div class="herowave" style="overflow: hidden;" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                        <path d="M-0.00,50.10 C150.00,150.33 349.20,-50.10 500.00,50.10 L500.00,150.33 L-0.00,150.33 Z" style="stroke: none; fill: #19A7CE;">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <?php include './footer.html'?>
    </main>
    
    <script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>