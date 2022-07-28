<?php 
session_start(); 
?> 
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
        <div id="content" class="fondo2 w-100">

              <section class="bg-light py-4">
                  <div class="container" >
                      <div class="row">
                          <div class="col-lg-12 col-md-8">
                            <h1 class="font-weight-bold text-center mb-0">Bienvenido a tu perfil</h1>
                           
                          </div>
                         
                      </div>
                  </div>
              </section>

              <section class=" my-5">
                <div class="contenedor w-50 bg-light">
                        <form action="perfil.php" method="post" class="form">
                          <div class="form-group ">
                            <label class="col-sm-12 control-label border-bottom" style="color: #000000"><i class="bi bi-chevron-right"></i>Informacion basica</label>
                          </div>
                          <div class="form-group ">
                          <p class="m-0"><i class="bi bi-dot"></i>Nombre</p>
                            <div class="col-sm-12 ">  
                            
                              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required/>
			                      </div>
                          </div> 

                          <div class="form-group ">
                          <p class="m-0"><i class="bi bi-dot"></i>Apellido</p>
                            <div class="col-sm-12 ">  
                              <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required/>
			                      </div>
                          </div>

                          <div class="form-group ">
                          <p class="m-0"><i class="bi bi-dot"></i>Rut</p>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="rut" id="rut" placeholder="Rut" required/>
                            </div>
                          </div>

                          <div class="form-group ">
                          <p class="m-0"><i class="bi bi-dot"></i>Cargo</p>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo" required/>
                            </div>
                          </div>

                          <div class="form-group ">
                          <p class="m-0"><i class="bi bi-dot"></i>Correo</p>
                            <div class="col-sm-12">
                              <input type="mail" class="form-control" name="cargo" id="cargo" placeholder="Correo" required/>
                            </div>
                          </div>

                          <div class="form-group ">
                          <p class="m-0"><i class="bi bi-dot"></i>Dirección</p>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Direccion" required/>
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="col-sm-12">
      	                      <button type="submit" class="boton" >Guardar registro</button>
                      
                            </div>
                        	</div>

                          



                        </form>
                </div>
              </section>

              <section>
                  <div class="container">
                    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
</body>

</html>