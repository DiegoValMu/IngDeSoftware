<!-- Navbar -->

    <nav class="navbar gradiente">
    
        <div class="container">
        
        <div>
            <input type="checkbox" id="nav-check">
            <div class="nav-btn">
                <label id="btnLabel" for="nav-check">
                    <span></span>
                </label>

            </div>
        </div>
        
        <div class="nav" id="navbarSupportedContent">
    
                    <div  class="buscando">
                        <input autocomplete="off" class="position-relative" type="search" id="buscar" placeholder="Buscar" aria-label="Buscar" required>
                    
                    
          
                <ul id="box-search">
                    <li><a href="../inicio"><i class="fas fa-search"></i>Inicio</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Gastos Comunes</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Reservas</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Visitas</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Buzón</a></li>
                    <li><a href="../mantencion?idCondominio=<?php echo $_SESSION["idCondominio"]  ?>"><i class="fas fa-search"></i>Mantencion de instalaciones</a></li>
                    <li><a href="../perfilAdm"><i class="fas fa-search"></i>Perfil</a></li>
                    <li><a href="#"><i class="fas fa-search"></i>Configuracion</a></li>
                    <li><a href="../calendarioAdm"><i class="fas fa-search"></i>Calendario</a></li>
                    <li><a href="../calendarioAdm"><i class="fas fa-search"></i>Registro de mantenciones</a></li>
                    <li><a href="../tools/listarMantencionesAdm.php"><i class="fas fa-search"></i>Lista mantenciones registradas</a></li>
                </ul>
                </div>

                

                    
                
                    <div>
                        
                        <div class="d-inline-flex position-sticky" style="width:auto; top:83%;">
            <button class="btn btn-toggle text-light collapsed px-0" style="box-shadow:none!important;" id="btn3Dot" data-bs-toggle="collapse" data-bs-target="#logout" aria-expanded="false">
                        <p class="m-0"><i class="bi bi-three-dots-vertical" style="font-size: 28px;"></i>  </p>
            </button>
            </div>

            

            <div class="collapse position-absolute p-2 rounded border" style="top:4rem; right: 0px ;width: 150px; background-color:#6F2968; z-index:1;" id="logout">
                <ul class="btn-toggle-nav m-0 list-unstyled fw-normal text-light smaller">
                    <li> <a class="sinDecoracion text-light py-1 px-2" href="../perfil"></i> Mi perfil</a></li>                               
                       <div class="dropdown-divider"></div>
                    <li><a class="sinDecoracion text-light py-1 px-2" href="../cerrarSesion.php"></i> Cerrar sesión</a></li>
                   
                    
                </ul>
                               
                            
                              
            </div>
                    </div>
                </div>
        </div>

       
        <script src="../js/nav.js"></script>
    </nav>
    
<!-- Fin Navbar -->