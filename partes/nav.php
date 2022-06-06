<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light gradiente">
        <div class="container">
        
       <!--     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
           
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg><div class="nav" id="navbarSupportedContent">
                <form class="form-inline position-relative  my-2 buscando">
                    <div  class="form-control buscando">
                        <input class="position-relative" type="text" id="buscar" placeholder="Buscar" aria-label="Buscar">
                    
                        <button class="btn position-relative btn-search inline" id="btnsearch" type="submit"><i class="icon ion-md-search"></i></button> 
                    </div>
                    
             <!--   </form>https://previews.123rf.com/images/jemastock/jemastock1609/jemastock160905175/63043795-persona-ejecutiva-en-traje-con-la-ilustraci%C3%B3n-de-vector-de-imagen-de-iconos-de-negocios-relacionados-co.jpg-->
                </form>
                    <div>
                        <li class="logout" id="logout">
                        <img src="../assets/img/perfil.jpg" 
                        class="img-fluid rounded-circle avatar "
                        alt="imagen" /> Sesión
                            <div class=" menuSesion" id="menuSesion">
                                <a class="" href="../perfil/"><i class="fas fa-user"></i> Mi perfil</a>
                            <div class="dropdown-divider"></div>
                                <a class="" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                            </div>
                        </li>
                    </div>
                </div>
        </div>
        <script>
            const botonEsconder = document.querySelector('svg.bi.bi-list');
            const btnLogout = document.querySelector('#logout');
            console.log(botonEsconder);

            cargarEventsListeners();
            function cargarEventsListeners() {
            botonEsconder.addEventListener('click', mostrarOcultarSidebar);

            /*btnLogout.addEventListener('mouseenter', () => {
                const menu = document.querySelector('#menuSesion');
                if(menu.classList.contains('pasivo')){
                    menu.classList.remove('pasivo');
                    menu.classList.add('activo');
            
                }});

            btnLogout.addEventListener('mouseleave', () => {
                const menu = document.querySelector('#menuSesion');
                console.log(menu);
                if(menu.classList.contains('activo')){
                    menu.classList.remove('activo');
                    menu.classList.add('pasivo');
            
                }});*/
                 
                 
            
            }
            function mostrarOcultarSidebar(e){
                const sidebar = document.querySelector('#sidebar-container')
                if(sidebar.classList.contains('activo')){
                    console.log(sidebar);
                    sidebar.classList.remove('activo');
                    sidebar.classList.add('pasivo');
                    console.log(sidebar);
                } else {
                    console.log(sidebar);
                    sidebar.classList.remove('pasivo');
                    sidebar.classList.add('activo');
                    console.log(sidebar);
                }
                    
            }

           
        </script>
    </nav>
<!-- Fin Navbar -->