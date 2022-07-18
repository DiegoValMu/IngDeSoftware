<!-- Sidebar -->
<div id="sidebar-container">
            

                <a href="../" class="d-block"><i class="bi bi-currency-dollar"></i>
                Gastos Comunes</a>

                <a href="../" class="d-block "><i class="bi bi-chat-dots"></i>
                Comunicación</a>

                <a href="../" class="d-block"><i class="bi bi-chat-right-text"></i>
                Reservas </a>

                <a href="../" class="d-block"><i class="bi bi-qr-code"></i>
                Visitas</a>


                <div class="d-inline-flex" style="width:18erem;">
                <a href="../mantencion" class="d-block" style="width: 13rem"> <i class="bi bi-calendar-week"></i> Area de Mantenciones</a>
                <button class="btn btn-toggle text-light collapsed px-0" style="box-shadow:none!important;" id="btnCalendario" data-bs-toggle="collapse" data-bs-target="#mantenciones" aria-expanded="false">
                        <p class="m-0"><i class="bi bi-chevron-down"></i>  </p>
                </button>
              
                     
                </div>
               
                     <div class="collapse" style=" z-index:1000; top:70%; left:5%; width:300px;" id="mantenciones">
                                <ul class="btn-toggle-nav m-0 list-unstyled fw-normal text-light smaller">
                                    <li> <a class="sinDecoracion text-light py-1 my-1 px-2" style="font-size: 14px; left:10%; " href="../calendario"><i class="bi bi-caret-right"></i> Registro de mantenciones</a></li>
                                    
                                    <li><a class="sinDecoracion text-light py-1 my-1 px-2" style="font-size: 14px;  left:10%;"  href="../tools/listarMantenciones.view.php"><i class="bi bi-caret-right"></i> Listado de mantenciones</a></li>
                                   
                                    <li><a class="sinDecoracion text-light py-1 my-1 px-2" style="font-size: 14px;  left:10%;"  href="../tools/listarMantenciones.view.php"><i class="bi bi-caret-right"></i> Registrar empresa</a></li>
                                
                                    <li><a class="sinDecoracion text-light py-1 my-1 px-2" style="font-size: 14px;  left:10%;"  href="../tools/listarMantenciones.view.php"><i class="bi bi-caret-right"></i> Listado de empresas</a></li>
                                </ul>
                               
                            
                              
                            </div>
               

                <a href="../" class="d-block"><i class="bi bi-envelope"></i>
                Paquetes y correspondencia</a>

                    <button class="btn btn-toggle sinDecoracion btnNav text-light align-items-center rounded collapsed position-absolute" id="btnConfig" style="top:85%;" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                       <i class="bi bi-gear" style="font-size: 28px;"></i>
                   </button>
                       <div class="collapse position-absolute py-2 px-2 rounded " style="width: 150px; background-color:#6F2968; z-index:1000; top:70%; left:5%" id="orders-collapse">
                           <ul class="btn-toggle-nav m-0 list-unstyled fw-normal text-light smaller">
                               <li> <a class="sinDecoracion text-light py-1 px-2" href="../perfil/"></i> Mi perfil</a></li>
                               
                                <li><a class="sinDecoracion text-light py-1 px-2" href="../login/index.php"></i> Configuracion</a></li>
                               <div class="dropdown-divider"></div>
                                <li><a class="sinDecoracion text-light py-1 px-2" href="../EdifRed/index.php"></i> Cerrar sesión</a></li>
                           </ul>
                          
                       
                         
                       </div>
        
        </div>
      
        
        
        <!-- Fin sidebar -->