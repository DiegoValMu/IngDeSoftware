<?php 
session_start();



?> 
    <!-- head -->
        <?php include('../partes/head.php') ?>
    <!-- fin head -->


<body >
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <!-- fin sideBar -->

        <div class="w-100">

    <!-- Navbar -->
        <?php include('../partes/navAdm.php') ?>
    <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="w-100 bg-light">



           
        
                <section class="bg-light ubicacion">
                    <div class="container">
                            <div class=" p-3 text-center justify-content-center border-bottom"> 
                                <h1 class="font-weight-bold mb-0 " style="font-family: serif; font-style: oblique">Bienvenido <?php echo $_SESSION["nombre_usuario"] ," ",$_SESSION["apellidos_usuario"] ; ?> </h1>
                                <p class="font-weight-bold m-0">Revisa la última información</p>
                            </div>
                    </div>
                </section>
              
            
              <section class="py-5 position-relative" style="height:auto; width: 70%!important; margin-left: auto!important; margin-right: auto!important;">
              <div class="container border rounded" align="center" id="hanging-icons">
                   <h2 class="pb-2 border-bottom text-start font-weight-bold" align="left" ><i class="bi bi-chevron-right"></i>Condominios registrados en el sistema</h2>
              

   
                   <div class="p-2 w-100 table-responsive"  style="">
                        <table class="table table-striped table-bordered table-condensed"  id="tablaCondominios">
                            <thead >
                                <tr>
                                    <th >ID</th>
                                    <th >Nombre</th>
                                    <th >Encargado</th>
                                    <th >Ciudad</th>
                                    <th ></th>
                                </tr>
                                
                            </thead>
                            <tbody class="text-center">
                
                            
               
                            </tbody>
                        </table>
                    </div>
                     
                   

  
                  
                 </div>

             
              </section>




              <!-- Footer -->

        </div>


        </div>
        
        
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../calendarioAdm/js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    <script src="../js/tablaCondominios.js"></script>
</body>





</html>