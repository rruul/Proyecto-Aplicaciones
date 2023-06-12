<?
    session_start();
    include './back/conexion.php';
    include './back/admin/alumnos.php';
    if(empty($_SESSION["id"])){
        header('location: ./index.php');
    }
    if($_SESSION["tipo"] != "admin"){
        header('location: ./index.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
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
        <link href="./css/login.css" rel="stylesheet"/>
        <link rel="icon" href="./img/open-book.png">
        <title>Alumnos en plat</title>
</head>
<body>
        <?php include 'header.php' ?>
        <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-3 mt-5">Alumnos registrados en plataforma</h2>
        </div>
      </div>
      <div class="row">
        <div class="col contenido" id="profes">
          <!-- Contenido del segundo contenedor -->
        </div>
      </div>
    </div>

    <template id="cardprofes">
      <div class="cardstyle">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-8">
            
              <div class="card-body">
                <h5 class="card-title nombre"></h5>
                <div class="divmail">
                  <p class="card-text correo"></p>
                  <a href="" class="mailto"><i class="fa-solid fa-envelope"></i></a>
                </div>
                <p class="card-text conmutador"></p>
                <p class="card-text extension"></p>
                <button class="btn btn-danger calif" style=" height: 5vh; width: 15vw;">Eliminar</button>
              </div>
              <div class="card-footer text-muted cargo"></div>
            </div>
          </div>
        </div>
      </div>
    </template>

  </main>
    <script src="./js/adminalu.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>