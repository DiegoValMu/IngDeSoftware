<!-- Sidebar -->
<div id="sidebar-container-inicio">
    
<div align="center">
    <h2 class="text-light my-4" style="width: 400px;">¿Como desea ingresar?</h2>
</div>

<div class="container my-4">
    <div class="col" align="center">
        <div class="row m-4 d-inline"  style="justify-content: space-around!important; width: 300px!important; height: 100px!important;">
            <div class="card text-light"style="width: 300px!important; justify-content: space-around; background-color:#B84368;">
                <h3 class="pt-2"><i class="bi bi-building"></i> Administrador</h3>

                <div class="collapse" style=" z-index:1000;" id="formAdm">
                   <form action="loginAdmin.php" method="POST">
                        <input type="text" class="form-control my-2" placeholder="Rut" style="width:auto;">
                        <input type="password" class="form-control my-2" placeholder="Contraseña" style="width:auto;">

                        <input type="submit" class="btn btn-outline-light my-2 font-weight-bold" value="Ingresar" >
                   </form>             
                </div>

                <button class="btn btn-sm btn-toggle text-light collapsed p-0" style="box-shadow:none!important;" id="btnLoginAdm" data-bs-toggle="collapse" data-bs-target="#formAdm" aria-expanded="false">
                    <i id="iconoAdm" style="font-size:28px;" class="bi bi-chevron-compact-down"></i>
                </button>

            </div>
        </div>
        <div class="row m-4 d-inline" style="justify-content: space-around!important; width: 300px!important;  height: 100px!important;">
            <div class="card text-light" style="width: 300px!important; justify-content: space-around; background-color:#FFB356;">
                <h3 class="pt-2"><i class="bi bi-person-lines-fill"></i> Propietario </h3>

                <div class="collapse" style=" z-index:1000; " id="formPro">
                    <form action="loginProp.php" method="POST">
                        <input type="text" class="form-control my-2" placeholder="Rut" style="width:auto;">
                        <input type="password" class="form-control my-2" placeholder="Contraseña" style="width:auto;">

                        <input type="submit" class="btn btn-outline-light my-2 font-weight-bold" value="Ingresar" >
                    </form>          
                </div>

                <button class="btn btn-sm btn-toggle text-light collapsed p-0" style="box-shadow:none!important;" id="btnLoginPro" data-bs-toggle="collapse" data-bs-target="#formPro" aria-expanded="false">
                    <i id="iconoPro" style="font-size:28px;" class="bi bi-chevron-compact-down"></i>
                </button>
            </div>
        </div>

        <div class="row m-4 d-inline" style="justify-content: space-around!important; width: 300px!important;  height: 100px!important;">
            <div class="card text-light" style="width: 300px!important; justify-content: space-around; background-color:#EB745D;">
                <h3 class="pt-2"><i class="bi bi-tools"></i> Encargado</h3>

                <div class="collapse" style=" z-index:1000;" id="formEnc">
                    <form action="loginEncargado.php"  method="POST">
                        <input type="text" class="form-control my-2" placeholder="Rut" style="width:auto;">
                        <input type="password" class="form-control my-2" placeholder="Contraseña" style="width:auto;">

                        <input type="submit" class="btn btn-outline-light my-2 font-weight-bold" value="Ingresar" >
                    </form>          
                </div>

                <button class="btn btn-sm btn-toggle text-light collapsed p-0" style="box-shadow:none!important;" id="btnLoginEnc" data-bs-toggle="collapse" data-bs-target="#formEnc" aria-expanded="false">
                    <i id="iconoEnc" style="font-size:28px;" class="bi bi-chevron-compact-down"></i>
                </button>
            </div>

        </div>

    </div>

</div>
   
               
        
</div>

<script>

const DropDownIconADM = document.getElementById('btnLoginAdm');

const DropDownIconPRO = document.getElementById('btnLoginPro');

const DropDownIconENC = document.getElementById('btnLoginEnc');

DropDownIconADM.addEventListener('click', cambiarIcono);

DropDownIconPRO.addEventListener('click', cambiarIcono2);

DropDownIconENC.addEventListener('click', cambiarIcono3);



function cambiarIcono(){
    const btnExpandir = document.getElementById('btnLoginAdm');
    const iconoAdm = document.getElementById('iconoAdm');
    console.log(btnExpandir.classList[5]);
    if(btnExpandir.classList[5]=="collapsed"){
        iconoAdm.classList.remove("bi-chevron-compact-up");
        iconoAdm.classList.add("bi-chevron-compact-down");

    }else{
        iconoAdm.classList.remove("bi-chevron-compact-down");
        iconoAdm.classList.add("bi-chevron-compact-up");
    }
}

function cambiarIcono2(){
    const btnExpandir2 = document.getElementById('btnLoginPro');
    const iconoPro = document.getElementById('iconoPro');
    console.log(btnExpandir2.classList[5]);
    if(btnExpandir2.classList[5]=="collapsed"){
        iconoPro.classList.remove("bi-chevron-compact-up");
        iconoPro.classList.add("bi-chevron-compact-down");

    }else{
        iconoPro.classList.remove("bi-chevron-compact-down");
        iconoPro.classList.add("bi-chevron-compact-up");
    }
}

function cambiarIcono3(){
    const btnExpandir3 = document.getElementById('btnLoginEnc');
    const iconoEnc = document.getElementById('iconoEnc');
    console.log(btnExpandir3.classList[5]);
    if(btnExpandir3.classList[5]=="collapsed"){
        iconoEnc.classList.remove("bi-chevron-compact-up");
        iconoEnc.classList.add("bi-chevron-compact-down");

    }else{
        iconoEnc.classList.remove("bi-chevron-compact-down");
        iconoEnc.classList.add("bi-chevron-compact-up");
    }
}



</script>
      
        
        
        <!-- Fin sidebar -->