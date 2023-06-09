<!DOCTYPE html>
<html lang="es">
    <head>
        <style>
            .btnlog:hover {
                background-color: #F6F1F1!important; 
                color: black!important;
            }

            .btnsign:hover {
                background-color: #146C94!important; 
                color: white!important;
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
        <link href="./css/style.css" rel="stylesheet"/>
        <link rel="icon" href="./img/open-book.png">
        <title>Inicia</title>
    </head>
<body style="font-family: 'Red Hat Display', sans-serif;">
    <?php include './header.php'?>

    <main>
        <div class="contenedor">
            <div class="container mt-4" style="height: 65%; display: flex; flex-direction: row; flex-wrap: wrap; align-items: center; justify-content: center;">
                <h2 >Inicia sesion o registrate para acceder a este contenido</h2>
                <div class="container" style="width: 50%; display: flex; justify-content: center;">
                    <div class="card" style="width: 50%; display: flex; text-align: center; align-items: center;">
                        <div class="card-body">
                            <h5 class="card-title">Registrate</h5>
                            <a href="./registro.php" class="btn btnsign" style="background-color: #F6F1F1;">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="container" style="width: 50%; display: flex; justify-content: center;">
                    <div class="card" style="width: 50%; display: flex; text-align: center; align-items: center;">
                        <div class="card-body">
                            <h5 class="card-title">Inicia sesion</h5>
                            <a href="./login.php" class="btn btnlog" style="background-color: #146C94; color: white;">Log in</a>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="herowave" style="overflow: hidden; height: 30%;" >
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-0.00,50.10 C150.00,150.33 349.20,-50.10 500.00,50.10 L500.00,150.33 L-0.00,150.33 Z" style="stroke: none; fill: #19A7CE;">
                    </path>
                </svg>
            </div>
        </div>
        <?php include './footer.html'?>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>