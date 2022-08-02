<?php 
session_start();
include ('../conexion/config.php');

$idCondominio = $_SESSION['idCondominio'];

$nombreCondominio = $_SESSION['nombre_condominio'];

$resultTotal = $con->query("SELECT COUNT(m.cod_mantencion) AS totalContado
                            FROM mantencion m, encargado e, condominio c 
                            WHERE c.id_encargado = e.id_encargado 
                            AND m.id_encargado =e.id_encargado 
                            AND c.cod_condominio = '".$idCondominio."'");

                      
while( $dataTotal = mysqli_fetch_array($resultTotal)){
      $totalCondminios = $dataTotal["totalContado"];
};

$resultTotalRealizadas = $con->query("SELECT COUNT(m.cod_mantencion) AS totalContado
                            FROM mantencion m, encargado e, condominio c 
                            WHERE m.estado = 1
                            AND c.id_encargado = e.id_encargado 
                            AND m.id_encargado =e.id_encargado 
                            AND c.cod_condominio = '".$idCondominio."'");

                      
while( $dataTotalRealizadas = mysqli_fetch_array($resultTotalRealizadas)){
      $totalCondminiosRealizadas = $dataTotalRealizadas["totalContado"];
};

$resultTotalCanceladas = $con->query("SELECT COUNT(m.cod_mantencion) AS totalContado
                            FROM mantencion m, encargado e, condominio c 
                            WHERE m.estado = 4
                            AND c.id_encargado = e.id_encargado 
                            AND m.id_encargado =e.id_encargado 
                            AND c.cod_condominio = '".$idCondominio."'");

                      
while( $dataTotalCanceladas = mysqli_fetch_array($resultTotalCanceladas)){
      $totalCondminiosCanceladas = $dataTotalCanceladas["totalContado"];
};

$resultTotalEspera = $con->query("SELECT COUNT(m.cod_mantencion) AS totalContado
                            FROM mantencion m, encargado e, condominio c 
                            WHERE m.estado = 3
                            AND c.id_encargado = e.id_encargado 
                            AND m.id_encargado =e.id_encargado 
                            AND c.cod_condominio = '".$idCondominio."'");

                      
while( $dataTotalEspera = mysqli_fetch_array($resultTotalEspera)){
      $totalCondminiosEspera = $dataTotalEspera["totalContado"];
};

$resultTotalCurso = $con->query("SELECT COUNT(m.cod_mantencion) AS totalContado
                            FROM mantencion m, encargado e, condominio c 
                            WHERE m.estado = 2
                            AND c.id_encargado = e.id_encargado 
                            AND m.id_encargado =e.id_encargado 
                            AND c.cod_condominio = '".$idCondominio."'");

                      
while( $dataTotalCurso = mysqli_fetch_array($resultTotalCurso)){
      $totalCondminiosCurso = $dataTotalCurso["totalContado"];
};

?> 
<!-- head -->
   <?php include('../partes/head.php') ?>
    <!-- fin head -->

<body>
    <div class="d-flex" id="content-wrapper">
      <!-- sideBar -->
    <?php include('../partesEncargado/sidebar.php') ?>
      <!-- fin sideBar -->

        <div class="w-100">

        <!-- Navbar -->
        <?php include('../partesEncargado/nav.php') ?>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-light w-100">

              <section class="bg-light border-bottom ">
                  <div class="container" align="center"> 
                  <h1 class="font-weight-bold py-2 text-center mb-0">Área de mantención de instalaciones <br> Condominio: <?php echo $nombreCondominio ?>  </h1>
                            
                </div>
              </section>

              
              <section class="rounded position-relative my-4" style=" min-width: 300px; width: 85%!important; margin-left: auto!important; margin-right: auto!important;">
              
              <div class="container h-100 rounded mb-4 bg-light border py-2" align="center">

              <h5 class="py-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Opciones de registro y control de mantenciones </h5>
              
                      <div class="p-2 border btnMenuMan rounded d-inline-flex m-2 font-weight-bold " style="width:18rem;">
                       <a href="../calendarioEncargado/index.php" class="btn-herramienta p-2 w-100 text-center" style="font-size:18px;">             
                       <i class="bi bi-calendar-week"></i> Calendario de Registro
                         </a>
                       </div>
                              
                       <div class="p-2 border btnMenuMan rounded d-inline-flex m-2 font-weight-bold" style="width:18rem;">
                       <a href="../tools/listarMantencionesEncargado.php" class="btn-herramienta p-2 w-100 text-center" style="font-size:18px;" >
                          <i class="bi bi-layout-text-sidebar-reverse"></i> Listado de mantenciones
                       </a>
                       </div>
             
                       
                </div>





                <div class="container h-100 rounded mb-4 bg-light border py-2" align="center">

              <h5 class="py-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Total Mantenciones Registradas: <?php echo $totalCondminios; ?></h5>
              
                  

                  <div class="card rounded bg-light border p-2 m-2 d-inline-flex" align="center" style="width:250px;">
                      <h5 class="p-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Realizadas</h5>
                
                      <div class="bg-light">
                      <canvas id="ChartRealizadas" ></canvas>
                       
                      </div>
              
              
                    </div>

                    <div class="card rounded bg-light border p-2 m-2 d-inline-flex" align="center" style="width:250px;">
                      <h5 class="p-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>En Curso</h5>
                
                      <div class="bg-light">
                      <canvas id="ChartEnCurso" ></canvas>
                      </div>
              
              
                    </div>
                    <div class="card rounded bg-light border p-2 m-2 d-inline-flex" align="center" style="width:250px;">
                      <h5 class="p-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>En Espera</h5>
                
                      <div class="bg-light">
                      <canvas id="ChartEnEspera" ></canvas>
                      </div>
              
              
                    </div>
                    <div class="card rounded bg-light border p-2 m-2 d-inline-flex" align="center" style="width:250px;">
                      <h5 class="p-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Canceladas</h5>
                
                      <div class="bg-light">
                      <canvas id="ChartCanceladas" ></canvas>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
 
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>


    <script>
      $(document).ready(function() {
        $('select').addClass("form-control");
        $('select').addClass("p-1");
        $('select').addClass("h-25");

     
      });
      var totalCond = "<?php echo $totalCondminios; ?> ";
      var totalCondRea = "<?php echo $totalCondminiosRealizadas; ?> ";
      var totalCondCan = "<?php echo $totalCondminiosCanceladas; ?> ";
      var totalCondEsp = "<?php echo $totalCondminiosEspera; ?> ";
      var totalCondCur = "<?php echo $totalCondminiosCurso; ?> ";

      var totalRea = totalCond-totalCondRea;
      var totalCan = totalCond-totalCondCan;
      var totalEsp = totalCond-totalCondEsp;
      var totalCur = totalCond-totalCondCur;



    </script>





    <script src="../js/graficoRealizadas.js"></script>
    <script src="../js/graficoCanceladas.js"></script>
    <script src="../js/graficoEnEspera.js"></script>
    <script src="../js/graficoEnCurso.js"></script>



      </body>

</html>