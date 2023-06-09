<?php 
    session_start();
    include './back/conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <header class="mb-5">
        <nav id="sidebarMenu" class="coloryletra collapse d-lg-block sidebar collapse " style="background-color: #AFD3E2; color: white;">
            <div class="position-sticky">
                
                <div class="list-group list-group-flush mx-3 mt-4 d-grip gap-3">
                <?php if(empty($_SESSION["id"])):?>
                    <div class="botones btn-group" role="group" id="botones" >
                        <div class=" d-grid gap-2 d-md-flex"> <!--Alt: " d-grid gap-2 d-md-flex justify-content-md-end"--> <!--gap-2: separation-->
                            <a class="btn btnsl btnsignup" style="background-color: #F6F1F1;" href="./registro.php"> <!--./login.html-->
                                Sign up
                            </a>
                            <a class="btn btnsl me-md-2 btnlogin" style="background-color: #146C94; color: white;" href="./login.php">
                                Log in
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                    <a id="home" href="/" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;" aria-current="true">
                        <i class="bi bi-house"></i><span style="margin-left: 5px;"> Pagina principal</span>
                    </a>
                    <a href="./redirecccion/rmiscursos.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;">
                        <i class="bi bi-archive"></i><span style="margin-left: 5px;"> Mis cursos</span>
                    </a>
                    <a href="./redirecccion/rcursos.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;">
                        <i class="bi bi-archive"></i><span style="margin-left: 5px;"> Cursos</span>
                    </a>
                    <a href="./ayuda.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;">
                        <i class="bi bi-people"></i><span style="margin-left: 5px;"> Ayuda y asistencia</span>
                    </a>
                    <a href="./acercade.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;">
                        <i class="bi bi-question-circle"></i><span style="margin-left: 5px;"> Acerca de nosotros</span>
                    </a>
                    <a href="./tandc.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;">
                        <i class="bi bi-file-ruled"></i><span style="margin-left: 5px;"> Condiciones</span>
                    </a>
                    <?php if(!empty($_SESSION["id"])):?>
                        <a href="./perfil.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #19A7CE; border-radius: 5px;">
                            <i class="bi bi-person-circle"></i><span style="margin-left: 5px;"> Perfil</span>
                        </a>
                        <a href="./back/login/control_logout.php" class="btnopc list-group-item list-group-item-action py-2 ripple text-light p-2" style="background-color: #27374D; border-radius: 5px;">
                            <i class="bi bi-people"></i><span style="margin-left: 5px;"> Salir</span>
                        </a>
                    <?php endif; ?>
                </div>
                    
                </div>
            </div>
        </nav>
    
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top p-3" style="background-color: #19A7CE;">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation" id="menu">
                <i class="navbar-toggler-icon"></i>
              </button>
              <div class="align-content-start">
                <img class = "d-inline-block align-text-center" src="./img/open-book.png" width="30" height="30"/>
                <span class = "nombreApp" style="margin-left: 10px; font-size: 23px;">
                    <span class="text-light">Learn</span>Sphere <!--##ffe484-->
                </span>
            </div>
            <span></span>
            
              </div>
        </nav>
        
    </header>
</body>
</html>