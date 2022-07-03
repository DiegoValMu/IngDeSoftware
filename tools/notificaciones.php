
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
        <div id="content" class="fondo2 w-100">

                <section class="bg-light ubicacion" style="opacity: 0.7;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8" style="opacity: 1;">
                                <h1 class="font-weight-bold mb-0">Notificaciones</h1>
                            </div>
                            <!--
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
                            </div>
-->
                        </div>
                    </div>
                </section>


                <section>
                    

                    

            
                    

                    <div class="container bg-light notificaciones " style="">
                        <h5 style="font-weight:bold; padding-top:5px" align="center">Mantenciones realizadas del mes: Junio</h5>
                        <table id="notificaciones" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Mantención</th>
                                    <th>Contratista</th>
                                    <th>Empresa</th>
                                    <th>Estado</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                      include ('../calendario/config.php');
                      $result = $con->query("SELECT * FROM mantencion where estado = 1 AND fecha_inicio between '2022-06-01' and '2022-06-30'");
                       while( $data = mysqli_fetch_array($result)){
                      ?>
                      <tr align="left">
                        <td><?php  echo $data["tipo_man"];?></td>
                        <td>                 </td>
                        <td>                 </td>
                        <td><?php switch($data["estado"]){
                                      case 1:
                                        echo "Realizada";
                                      break;
                                      case 2:
                                        echo "En curso";
                                      break;
                                      case 3:
                                        echo "En espera";
                                      break;
                                      case 4:
                                        echo "Cancelada";
                                      break;
                                      default:
                                        echo "sin seleccionar";
                                      break;
                        } ?></td>

                      </tr>
                      <?php   }  ?>
                            </tbody>
                        </table>

                    </div>

                </section>

                <section>
                    

                  

                

                
    
        

        </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
       
</body>


<script>
    






    /*
    let miCanvas = document.getElementById("graficaPastel").getContext("2d");
    
    var data = {
    labels: [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    ],
    datasets: [
        {
            data: [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
            backgroundColor: [
                "#FF6384",
                "#63FF84",
                "#84FF63",
                "#8463FF",
                "#6384FF",
                "#b11e1e",
                "#900d7f",
                "#900d7f",
                "#cb7f0d",
                "#0fd0de",
                "#de0f69",
                "#0fdeb8"
            ]
        }]
};
    
    
    
    
    var chart = new Chart(miCanvas,{
        type: "pie",
        data: data
    })*/
</script>

</html>