<!-- Sidebar -->
<div id="sidebar-container">

                
                <a href="../inicio" class="d-block"><i class="bi bi-house-door"></i>
                Inicio</a>

                <a href="#" class="d-block"><i class="bi bi-currency-dollar"></i>
                Gastos Comunes</a>

                <a href="#" class="d-block "><i class="bi bi-chat-dots"></i>
                Comunicación</a>

                <a href="#" class="d-block"><i class="bi bi-chat-right-text"></i>
                Reservas </a>

                <a href="#" class="d-block"><i class="bi bi-qr-code"></i>
                Visitas</a>


                <div class="d-inline-flex" style="width:18erem;">
                <a href="../mantencion?idCondominio=<?php echo $_SESSION["nombCondominio"]  ?>" class="d-block" style="width: 13rem"> <i class="bi bi-calendar-week"></i> Area de Mantenciones</a>
                <button class="btn btn-toggle text-light collapsed px-0" style="box-shadow:none!important;" id="btnCalendario" data-bs-toggle="collapse" data-bs-target="#mantenciones" aria-expanded="false">
                        <p class="m-0"><i class="bi bi-chevron-down"></i>  </p>
                </button>
              
                     
                </div>
               
                     <div class="collapse" style=" z-index:1000; top:70%; left:5%; width:300px;" id="mantenciones">
                                <ul class="btn-toggle-nav m-0 list-unstyled fw-normal text-light smaller">
                                    <li> <a class="sinDecoracion text-light py-1 my-1 px-2" style="font-size: 14px; left:10%; " href="../calendarioAdm"><i class="bi bi-caret-right"></i> Registro de mantenciones</a></li>
                                    
                                    <li><a class="sinDecoracion text-light py-1 my-1 px-2" style="font-size: 14px;  left:10%;"  href="../tools/listarMantencionesAdm.php"><i class="bi bi-caret-right"></i> Listado de mantenciones</a></li>
                                </ul>
                               
                            
                              
                            </div>
               

                <a href="#" class="d-block"><i class="bi bi-envelope"></i>
                Paquetes y correspondencia</a>

        
        </div>
      
        
        
        <!-- Fin sidebar -->