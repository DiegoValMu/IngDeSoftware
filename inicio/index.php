
    <!-- head -->
        <?php include('../partes/head.php') ?>
    <!-- fin head -->


<body >
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->

        <div class="w-100">

    <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="w-100 bg-light">


     
<?php include ('ContactanosModal.php') ?>

           
        
                <section class="bg-light ubicacion">
                    <div class="container">
                            <div class=" p-3 text-center justify-content-center"> 
                                <h1 class="font-weight-bold mb-0 ">Condominio/Edificio Nuevo Amanecer</h1>
                                <p class="font-weight-bold m-0">Revisa la última información</p>
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
                               <h1>Ven y vive la experiencia</h1>
                               <p>El lugar perfecto para familias, disfruta nuestras instalaciones y sientete en casa</p>
                               <button id="myInput" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                 Contactanos
                                </button>

                                
                             </div>
                           </div>
                         </div>
                         <div class="carousel-item">
                         <img src="../assets/img/foto1.jpg" alt="">


                           <div class="container">
                             <div class="carousel-caption text-center" style="top: 60%;">
                               <h1>Estamos para servir</h1>
                               <p>Revise los distintos planes que tenemos para usted</p>
                               <p><a class="btn btn-lg btn-primary" href="#">Cotiza aqui!</a></p>
                             </div>
                           </div>
                         </div>
                         <div class="carousel-item">
                         <img src="../assets/img/foto3.jpg" alt="">

                           <div class="container">
                             <div class="carousel-caption text-end">
                               <h1>One more for good measure.</h1>
                               <p>Some representative placeholder content for the third slide of this carousel.</p>
                               <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
              
             

              <section class="py-5 position-relative" style="height:auto; width: 60%!important; margin-left: auto!important; margin-right: auto!important;">
              <div class="container" align="center" id="hanging-icons">
                   <h2 class="pb-2 border-bottom text-start font-weight-bold" align="left" ><i class="bi bi-chevron-right"></i>Areas del sistema</h2>
              

                     <div class="   mt-4 d-inline-flex"  >
                       
                       <div class="herramienta">
                       <a href="#" class="btn-herramienta" >
                       <h4 class="border-bottom text-center"> <i class="bi bi-currency-dollar"></i> GC</h4>
                         <p class="largo ">Seccion de pago de gastos comunes de los residentes</p>
                         
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
                     </div>
  
  
  
                     <div class=" align-center  mt-4 d-inline-flex" >
                       
                       <div class="herramienta">
                       <a href="#" class="btn-herramienta" >
                       <h4 class="border-bottom text-center"> <i class="bi bi-chat-dots"></i> Comunicaciones</h4>
                         <p class="largo">Seccion para notificar/informar a la comunidad las noticias relacionadas a las inmediaciones</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                        </a>
                       </div>
                     </div>
  
  
  
        
                  
  
  
  
                     <div class="  mt-4 d-inline-flex" >
                       
                       <div class="herramienta">
                       <a href="#" class="btn-herramienta" >
                         <h4 class="border-bottom text-center"> <i class="bi bi-chat-right-text"></i> Reservas</h4>
                         <p class="largo">Seccion para los usuarios que quieran reservar los espacios comunes del condominio</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
                     </div>
  
  
  
                     <div class=" mt-4 d-inline-flex" >
                       
                       <div class="herramienta">
                       <a href="#" class="btn-herramienta" >
                       <h4 class="border-bottom text-center"> <i class="bi bi-qr-code"></i> Visitas</h4>
                         <p class="largo">Seccion para el registro de las visitas de los usuarios residentes del condominio</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
                     </div>
  
  
  
                     <div class="  mt-4 d-inline-flex" >
                       
                       <div class="herramienta">
                       <a href="../mantencion" class="btn-herramienta" >
                         
                       <h4 class="border-bottom text-center"> <i class="bi bi-calendar-week"></i> Mantenciones</h4>
                         <p class="largo ">Seccion para notificar alguna falla en las instalaciones del condominio o informacion ver acerca de las mantenciones vigentes</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
                     </div>
                   
  
  
  
                     <div class="  mt-4 d-inline-flex" >
                       
                       <div class="herramienta">
                       <a href="#" class="btn-herramienta" >
                         <h4 class="border-bottom text-center"> <i class="bi bi-envelope"></i> Buzon</h4>
                         <p class="largo">Seccion para los usuarios donde podran ver la informacion relacionada a recepcion y envio de paqueteria</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
                     </div>
  
                  
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
<script src="../calendario/js/jquery-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script>

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
</body>



</html>