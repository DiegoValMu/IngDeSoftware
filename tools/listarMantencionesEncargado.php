<?php 
session_start();


?> 
 
 <!-- head -->
 <?php include('../partesEncargado/head.php') ?>
 <head>
   
 </head>
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
        <div id="content" class="fondo2 w-100">

              <section class=" ">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <h2 class="text-center font-weight-bold" id="title">Listado de mantenciones registradas</h2>
                    </div>
                  </div>
                </div>
              </section>

              <section class="py-5" >
                <div id="tablaLista" class="table-responsive">
                  <table id="tablaMantenciones" class="table table-striped" style="width:100%">
                    <thead>
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Observacion</th>
                        <th>Fecha inicio</th>
                        <th>Fecha termino</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      <?php
                      $encargado = $_SESSION['id_usuario']; 
                      include ('../calendarioEncargado/config.php');
                      $result = $con->query("SELECT * FROM mantencion WHERE id_encargado = '".$encargado."'");
                       while( $data = mysqli_fetch_array($result)){
                      ?>
                      <tr class="text-center">
                      <td><?php  echo $data["cod_mantencion"];?></td>
                        <td><?php  echo $data["nomb_mantencion"];?></td>
                        <td><?php switch($data["estado"]){
                                      case 1:
                                        ?> <i class="bi bi-check-circle" style="color:green;font-size:20px; "></i>  <?php echo "Realizada";
                                      break;
                                      case 2:
                                        ?> <i class="bi bi-play-circle" style="color:green;font-size:20px;"></i>  <?php echo "En curso";
                                      break;
                                      case 3:
                                        ?> <i class="bi bi-stop-circle" style="color:#e4e400;font-size:20px;"></i>  <?php echo "En espera" ;
                                      break;
                                      case 4:
                                        ?> <i class="bi bi-x-circle-fill" style="color:crimson;font-size:20px;"></i>  <?php echo "Cancelada"  ;
                                      break;
                                      default:
                                        echo "sin seleccionar";
                                      break;
                        } ?></td>
                        <td><?php  echo $data["observacion"];?></td>
                        <td><?php   $timestampi = strtotime($data["fecha_inicio"]); 
                                    $newDatei = date("m-d-Y", $timestampi );
                                    echo "$newDatei";
                        ?></td>
                        <td><?php   $timestampf = strtotime($data["fecha_fin"]); 
                                    $newDatef = date("m-d-Y", $timestampf );
                                    echo "$newDatef";
                        ;?></td>
                      </tr>
                      <?php   }  ?>
                    </tbody>
                  </table>
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

   
    <script type="text/javascript" src="../js/tabla.js"></script>
 
     
</body>

</html>