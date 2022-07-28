<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="../calendarioAdm/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">


    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    
    <!-- CON ESTOS SCRIPTS PUEDES USAR LAS ALERTAS de SWEETALERT Y ALERFITY -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
    <!-- dataTable -->
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/contact-form.css">

    <title>ISW - Grupo 10</title>
</head>

<body >
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

              <button id="btn-login" class="btn text-light" style=" box-shadow:none!important;"><i class="bi bi-person-circle" style="font-size:28px;"></i> Acceder</button>

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
                                <h1 class="font-weight-bold mb-0 " style="font-family: serif; font-style: oblique">Adminitrador de Condominios y Edificios EdifRed Ltda.</h1>
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
                               <p>Revise las caracteristicas que tenemos para usted</p>
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
                               <button id="muInput3" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#myModal">
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
              
             

            

              <section class=" position-relative" style="height:auto; width: 60%!important; margin-left: auto!important; margin-right: auto!important;">
                <div class="container mb-5" >
                  <h2 class="pb-2 border-bottom text-start font-weight-bold" ><i class="bi bi-chevron-right"></i>Nos ubicamos</h2>
                  <div class="my-2" align="center">
                  <iframe  class="my-4"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15192.396398899558!2d-73.01144534513058!3d-36.82312250301145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b41835139b61%3A0x4c8fe1808ebdd3f9!2sUniversidad%20del%20B%C3%ADo-B%C3%ADo!5e0!3m2!1ses-419!2scl!4v1656812263296!5m2!1ses-419!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </section>



              <!-- Footer -->

              <?php include ("../partes/footer.php") ?>

        </div>


        </div>
        
        
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../calendarioAdm/js/jquery-3.0.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script src="../js/contact-form.js"></script>
<script src="../js/validator.min.js"></script>

<script src="../js/login.js"></script>

<script src="../js/edifred.js"></script>
</body>



</html>