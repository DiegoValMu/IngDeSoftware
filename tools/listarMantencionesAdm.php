<?php 
session_start();

$idCondominio = $_SESSION["idCondominio"];



?> 
 <!-- head -->
 <?php include('../partes/head.php') ?>
 <head>
   
 </head>
    <!-- fin head -->

<body>
    <div class="d-flex" id="content-wrapper">
      <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
      <!-- fin sideBar -->

        <div class="w-100">

        <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="fondo2 w-100">


        <?php 
        include("./MantencionesRealizadas.php");
        include("./MantencionesEnCurso.php");
        include("./MantencionesEnEspera.php");
        include("./MantencionesCanceladas.php");
        ?> 

              <section class=" ">
                <div class="container bg-light">
                  <div class="row">
                    <div class="col-md-12 my-2">
                      <h2 class="text-center font-weight-bold p-2" >Listas Mantenciones registradas</h2>
                    </div>
                  </div>
                </div>
              </section>

              <section class="rounded position-relative my-4" style=" min-width: 300px; width: 80%!important; margin-left: auto!important; margin-right: auto!important;">
              
              <div class="container h-100 rounded mb-4 bg-light border py-2" align="center">

              <h5 class="py-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Opciones  </h5>
              
                      <div class="herramienta d-inline-flex m-2  ">
                      <button id="btnReali" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#manReali">
                               Mantenciones Realizadas
                      </button>
                      </h6>
                       </div>

                       <div class="herramienta  d-inline-flex m-2 ">
                       <button id="btnEnCur" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#manEnCur">
                               Mantenciones En Curso
                      </button>
                       </div>
             
                       <div class="herramienta  d-inline-flex m-2 ">
                       <button id="btnEnEsp" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#manEnEsp">
                               Mantenciones En Espera
                      </button>
                       </div>
             
                       <div class="herramienta  d-inline-flex m-2 ">
                       <button id="btnCancel" class="btn btn-lg btn-primary" style="background-color:#6F2968;" data-bs-toggle="modal" data-bs-target="#manCancel">
                               Mantenciones Canceladas
                      </button>
                       </div>
                </div>
              </div>
               
              </section>


        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="../js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>

      var idCondominio =<?php echo $idCondominio ?> 

    </script>

   
    <script src="../extenciones tools/tablaMantenciones.js"></script>

 <script>


  var myModal = document.getElementById('manCancel')
  var myInput = document.getElementById('btnCancel')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })


  var myModal2 = document.getElementById('manReali')
  var myInput2 = document.getElementById('btnReali')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput2.focus()
  })

  var myModal3 = document.getElementById('manEnCur')
  var myInput3 = document.getElementById('btnEnCur')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput3.focus()
  })

  var myModal4 = document.getElementById('manEnEsp')
  var myInput4 = document.getElementById('btnEnEsp')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput4.focus()
  })


  
 </script>
     
</body>

</html>