<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pagina de inicio, para logearse y ver informacion relevante sobre la empresa"> 
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="../extencionesCalendario/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    
    <!-- CON ESTOS SCRIPTS PUEDES USAR LAS ALERTAS de SWEETALERT Y ALERFITY -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    

    <title>ISW - Grupo 10</title>
</head>

<body >
    <?php include ("../extencionesCalendario/js/jquery-3.0.0.min.js") ?>
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <?php include('../edifRed/sidebarInicio.php') ?>
    <!-- fin sideBar -->

        <div class="w-100">

    <!-- Navbar -->
  <!-- Navbar -->

  <nav class="navbar gradiente">
    
    <div class="container">
    
    
    
      <div class="nav" id="navbarSupportedContent">
        <div class="d-flex">
          <img src="../assets/img/edificio (1).png" alt="">
        <div class="position-relative" style="top: 20px;">
          <p class="logo"style="">EdifRed</p>
          <p class="subLogo">Tranquilidad en tu hogar</p>
        </div>

          
        </div>
          <div>
              <div class="text-light">

              <button id="btn-login" class="btn text-light" style=" box-shadow:none!important;"><i class="bi bi-person-circle" style="font-size:28px;"></i> </button>

              </div>
          </div>
        </div>
    </div>

</nav>

<!-- Fin Navbar -->
    <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="w-100 bg-light">


     
<?php 
include ('ContactanosModal.php');
 
include('planesModal.php');
?>

           
        
                <section class="bg-light ubicacion">
                    <div class="container">
                            <div class=" p-3 text-center justify-content-center"> 
                                <h1 class="font-weight-bold mb-0 " style="font-family: serif; font-style: oblique">Adminitración de Condominios y Edificios EdifRed Ltda.</h1>
                            </div>
                    </div>
                </section>


                <section>
                   <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                         </div>
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                         <img src="../assets/img/foto2.jpg" alt="">

                           <div class="container">
                             <div class="carousel-caption text-right " style="top:40%;">
                               <h1>Comienza a usarlo hoy mismo</h1>
                               <p>Registrate y realiza una prueba gratis de los servicios que tenemos para ti</p>
                               <button id="myInput" type="button" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#">
                                 Registrarse
                                </button>

                                
                             </div>
                           </div>
                         </div>
                         <div class="carousel-item">
                         <img src="../assets/img/foto1.jpg" alt="">


                           <div class="container">
                             <div class="carousel-caption text-center" style="top: 60%;">
                               <h1>Estamos para servir</h1>
                               <p>Revise las características que tenemos para usted</p>
                               <button id="muInput2" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#myModal2">
                               Saber mas
                              </button>
                             </div>
                           </div>
                         </div>
                         <div class="carousel-item">
                         <img src="../assets/img/foto3.jpg" alt="">

                           <div class="container">
                             <div class="carousel-caption text-left">
                               <h1>Ofrecemos tranquilidad y confort.</h1>
                               <button id="muInput3" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#">
                               aun tienes dudas?, contactanos!
                              </button>
                             </div>
                           </div>
                         </div>
                        
                       </div>
                       <button class="carousel-control-prev" style="width: 8%!important; " type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden"></span>
                       </button>
                       <button class="carousel-control-next" style="width: 8%!important; " type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden"></span>
                       </button>
                     </div>


              </section>
              
              <!-- Footer -->

              <?php include ("../partes/footer.php") ?>

        </div>


        </div>
        
        
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/login.js"></script>
<script src="../js/edifred.js"></script>
</body>



</html>