    <!-- head -->
    <?php include('../partes/head.php') ?>
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
        <div id="content" class="bg-light w-100">

              <section class="bg-light border-bottom ">
                  <div class="container"> 
                            <h1 class="font-weight-bold py-4 text-center mb-0">Areá de mantención de instalaciones</h1>
                </div>
              </section>

              
              <section class=" rounded position-relative" style="top: 10%; height: auto; min-width: 300px; width: 80%!important; margin-left: auto!important; margin-right: auto!important;">
              
              <div class="container h-100 rounded mb-5 bg-light" align="center">

              <h5 class="py-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Opciones de registro y control de mantenciones </h5>
              
                      <div class="herramienta d-inline-flex my-2  " style="margin-left: 5%; margin-right:5%; ">
                       <a href="../calendario" class="btn-herramienta" >
                         
                       <h6 class="border-bottom text-center"> <i class="bi bi-calendar-week"></i> Calendario de Registro</h6>
                         <p class="largo ">Area designada para registrar, modificar y eliminar mantenciones previstas para las instalaciones</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>

                       <div class="herramienta  d-inline-flex my-2  " style="margin-left: 5%; margin-right:5%;">
                       <a href="#" class="btn-herramienta" >
                         
                       <h6 class="border-bottom text-center"><i class="bi bi-file-earmark-plus"></i> Formulario registro empresas</h6>
                         <p class="largo ">Formulario para registrar empresas prestadoras de servicios, encargadas principalmente del mantenimiento de las instalaciones</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
             
                       <div class="herramienta  d-inline-flex my-2  " style="margin-left: 5%; margin-right:5%;">
                       <a href="../tools/listarMantenciones.view.php" class="btn-herramienta" >
                         
                       <h6 class="border-bottom text-center"><i class="bi bi-layout-text-sidebar-reverse"></i></i> Listado de mantenciones</h6>
                         <p class="largo ">Lista de todas las mantenciones registradas en el tiempo</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
             
                       

                       <div class="herramienta  d-inline-flex my-2  " style="margin-left: 5%; margin-right:5%;">
                       <a href="#" class="btn-herramienta" >
                         
                       <h6 class="border-bottom text-center"> <i class="fa fa-list"></i> Lista de empresas</h6>
                         <p class="largo ">Lista de empresas prestadoras de servicios que han trabajado en mantenciones de las instalaciones</p>
                         <p class="text-center m-0"><i class="bi bi-arrow-right-circle" style="font-size: 28px;" ></i></p>
                         </a>
                       </div>
                </div>


                <div class="container h-100 rounded mb-5 bg-light border" align="center">
                <h5 class="py-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Mantenciones programadas del mes </h5>

                <div class="container pb-2 bg-light ">
                        <h6 class="font-weight-bold py-2" align="center">Mantenciones del mes: Julio</h6>
                        <table id="notificaciones" class="table table-striped w-75 ">
                            <thead>
                                <tr>
                                    <th>Mantención</th>
                                    <th>Estado</th>
                                    <th>Desde</th>
                                    <th>Hasta</th>    
                                </tr>
                            </thead>
                            <tbody class="">
                            <?php
                      include ('../calendario/config.php');
                      $result = $con->query("SELECT * FROM mantencion WHERE estado != 1 AND fecha_inicio between '2022-07-01' and '2022-07-30'");
                       while( $data = mysqli_fetch_array($result)){
                      ?>
                      <tr align="left">
                        <td><?php  echo $data["tipo_man"];?></td>

                        <td><?php switch($data["estado"]){
                                      case 1:
                                        ?> <i class="bi bi-check-circle" style="color:green;"></i>  <?php echo "Realizada";
                                      break;
                                      case 2:
                                        ?> <i class="bi bi-play-circle" style="color:green;"></i>  <?php echo "En curso";
                                      break;
                                      case 3:
                                        ?> <i class="bi bi-pause-circle" style="color:yellow;"></i>  <?php echo "En espera" ;
                                      break;
                                      case 4:
                                        ?> <i class="bi bi-x-circle-fill" style="color:crimson;"></i>  <?php echo "Cancelada"  ;
                                      break;
                                      default:
                                        echo "sin seleccionar";
                                      break;
                        } ?></td>

                        
                        <td><?php   $timestampi = strtotime($data["fecha_inicio"]); 
                                    $newDatei = date("d-m-Y", $timestampi );
                                    echo "$newDatei";
                        ?></td>
                        <td><?php   $timestampf = strtotime($data["fecha_fin"]); 
                                    $newDatef = date("d-m-Y", $timestampf );
                                    echo "$newDatef";
                        ;?></td>
                      </tr>
                      <?php   }  ?>
                            </tbody>
                        </table>

                    </div>


                </div>

                <div class="container h-100 rounded mb-5 bg-light border" align="center">
                <h5 class="py-2 font-weight-bold border-bottom " style="text-align: start ;" ><i class="bi bi-chevron-right"></i>Mantenciones realizadas en las instalaciones </h5>
                
                <div class="container pb-5 bg-light">
                        <h6 class="font-weight-bold py-2" align="center">año 2022</h6>
                        <table id="notificaciones2" class="table table-striped w-75">
                            <thead>
                                <tr>
                                    <th>Mantención</th>
                                    <th>Estado</th>
                                    <th>Desde</th>
                                    <th>Hasta</th>    
                                </tr>
                            </thead>
                            <tbody class="">
                            <?php
                      include ('../calendario/config.php');
                      $result = $con->query("SELECT * FROM mantencion WHERE estado = 1");
                       while( $data = mysqli_fetch_array($result)){
                      ?>
                      <tr align="left">
                        <td><?php  echo $data["tipo_man"];?></td>

                        <td><?php switch($data["estado"]){
                                      case 1:
                                        ?> <i class="bi bi-check-circle" style="color:green;"></i>  <?php echo "Realizada";
                                      break;
                                      default:
                                        echo "sin seleccionar";
                                      break;
                        } ?></td>

                        
                        <td><?php   $timestampi = strtotime($data["fecha_inicio"]); 
                                    $newDatei = date("d-m-Y", $timestampi );
                                    echo "$newDatei";
                        ?></td>
                        <td><?php   $timestampf = strtotime($data["fecha_fin"]); 
                                    $newDatef = date("d-m-Y", $timestampf );
                                    echo "$newDatef";
                        ;?></td>
                      </tr>
                      <?php   }  ?>
                            </tbody>
                        </table>

                    </div>
              
              
              </div>
              </section>

              

           
  
            

        </div>
      
        </div>
    
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
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
    <script src="../js/tablaNoti.js"></script>


      </body>

</html>