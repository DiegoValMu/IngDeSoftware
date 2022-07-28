
let myModal = document.getElementById('myModal')
let myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})


let myModal2 = document.getElementById('myModal2')
let myInput2 = document.getElementById('myInput2')

myModal.addEventListener('shown.bs.modal', function () {
  myInput2.focus()
})

let myInput3 = document.getElementById('myInput3')

myModal.addEventListener('shown.bs.modal', function () {
  myInput3.focus()
})





const botonEsconder = document.getElementById('btn-login');

cargarEventsListeners();
function cargarEventsListeners() {
    botonEsconder.addEventListener('click', mostrarOcultarSidebar);
}

function mostrarOcultarSidebar(e){
    const sidebar = document.querySelector('#sidebar-container-inicio')
    if(sidebar.classList.contains('activo3')){
        sidebar.classList.remove('activo3');
        sidebar.classList.add('pasivo3');
    } else {
        sidebar.classList.remove('pasivo3');
        sidebar.classList.add('activo3');

    }
        
}

const DropDownIconADM = document.getElementById('btnLoginAdm');

//const DropDownIconPRO = document.getElementById('btnLoginPro');

const DropDownIconENC = document.getElementById('btnLoginEnc');

DropDownIconADM.addEventListener('click', cambiarIcono);

//DropDownIconPRO.addEventListener('click', cambiarIcono2);

DropDownIconENC.addEventListener('click', cambiarIcono3);



function cambiarIcono(){
    const btnExpandir = document.getElementById('btnLoginAdm');
    const iconoAdm = document.getElementById('iconoAdm');

    if(btnExpandir.classList[5]=="collapsed"){
        iconoAdm.classList.remove("bi-chevron-compact-up");
        iconoAdm.classList.add("bi-chevron-compact-down");

    }else{
        iconoAdm.classList.remove("bi-chevron-compact-down");
        iconoAdm.classList.add("bi-chevron-compact-up");
    }
}
/*
function cambiarIcono2(){
    const btnExpandir2 = document.getElementById('btnLoginPro');
    const iconoPro = document.getElementById('iconoPro');

    if(btnExpandir2.classList[5]=="collapsed"){
        iconoPro.classList.remove("bi-chevron-compact-up");
        iconoPro.classList.add("bi-chevron-compact-down");

    }else{
        iconoPro.classList.remove("bi-chevron-compact-down");
        iconoPro.classList.add("bi-chevron-compact-up");
    }
}*/

function cambiarIcono3(){
    const btnExpandir3 = document.getElementById('btnLoginEnc');
    const iconoEnc = document.getElementById('iconoEnc');

    if(btnExpandir3.classList[5]=="collapsed"){
        iconoEnc.classList.remove("bi-chevron-compact-up");
        iconoEnc.classList.add("bi-chevron-compact-down");

    }else{
        iconoEnc.classList.remove("bi-chevron-compact-down");
        iconoEnc.classList.add("bi-chevron-compact-up");
    }
}