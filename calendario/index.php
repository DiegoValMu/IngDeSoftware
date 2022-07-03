<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mi Calendario:: Mantenciones</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="../calendario/css/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../calendario/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../calendario/css/home.css">
  <link rel="stylesheet" href="../assets/css/style.css">
 <link rel="stylesheet" href="	https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

  <link rel="stylesheet" href="../assets/css/sidebar.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>
<body>

<?php
include('config.php');

  $SqlEventos   = ("SELECT * FROM mantencion");
  $resulEventos = mysqli_query($con, $SqlEventos);

?>


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


              

              <section class="">
               

              <div class="container">

                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <h2 class="text-center" id="title">Registro de mantenciones edificio:</h2>
                    </div>
                  </div>
                </div>



              <div id="calendar" class="bg-light"></div>


                <?php  
                include('modalNuevoEvento.php');
                include('modalUpdateEvento.php');
                ?>



<script src ="../calendario/js/jquery-3.0.0.min.js"> </script>
<script src="../calendario/js/popper.min.js"></script>
<script src="../calendario/js/bootstrap.min.js"></script>


<script type="text/javascript" src="../calendario/js/moment.min.js"></script>	
<script type="text/javascript" src="../calendario/js/fullcalendar.min.js"></script>
<script src='locales/es.js'></script>

<script type="text/javascript">
  const vacio = "";
$(document).ready(function() {

  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "month,agendaWeek,agendaDay"
    },

    locale: 'es',

    defaultView: "month",
    navLinks: true, 
    editable: true,
    selectable: true,
    selectHelper: true,

//Nuevo Evento
  select: function(start, end){

  
      $("#exampleModal").modal();

      $('input[name=evento').val(vacio);
      $('select[name=estado]').val(vacio);
      $('select[name=bloque]').val(vacio);
      $('input[name=observacion').val(vacio);

      $("input[name=fecha_inicio]").val(start.format('DD-MM-YYYY'));
       
      var valorFechaFin = end.format("DD-MM-YYYY");
      var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
      $('input[name=fecha_fin').val(F_final); 
      
   

    },
      
    events: [
      <?php
       while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
          {
          _id: '<?php echo $dataEvento['cod_man']; ?>',
          title: '<?php echo $dataEvento['tipo_man']; ?>',
          estado: '<?php echo $dataEvento['estado']; ?>',
          bloque: '<?php echo $dataEvento['cod_bloque']; ?>',
          observacion: '<?php echo $dataEvento['observacion']; ?>',
          start: '<?php echo $dataEvento['fecha_inicio']; ?>',
          end:   '<?php echo $dataEvento['fecha_fin']; ?>',
          color: '<?php echo $dataEvento['color_evento']; ?>'
          },
        <?php } ?>
    ],
   


//Eliminar Evento
eventRender: function(event, element) {
    element
      .find(".fc-content")
      .prepend("<span id='btnCerrar'; class='closeon material-icons'>&#xe5cd;</span>");
    
    //Eliminar evento
    element.find(".closeon").on("click", function() {

    Swal
      .fire({
          title: "Esta por eliminar un registro ",
          text: "¿Continuar?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: "Sí, eliminar",
          cancelButtonText: "Cancelar",
      })
      .then(resultado => {
        if (resultado.value) {
          // Hicieron click en "Sí"
          $("#calendar").fullCalendar("removeEvents", event._id);
        
            $.ajax({
                   type: "POST",
                   url: 'deleteEvento.php',
                   data: {id:event._id},
                   success: function(datos)
                   {
                     Swal
                        .fire({
                          title:"Eliminado con exito",
                          icon: "success",
                          showConfirmButton: false,
                          showCancelButton: false,
                          timer: 1500
                        })
                      
                   },
                   fail:function(datos){
                    Swal
                        .fire({
                          title:"No se a podido borrar",
                          icon: "warning",
                          showConfirmButton: false,
                          showCancelButton: false,
                          timer: 1500
                        })
                   }
               });
        } else {
          // Dijeron que no
            console.log("*NO se elimina*");
        }
    });
});
  },


//Moviendo Evento Drag - Drop
eventDrop: function (event, delta) {
  var idEvento = event._id;
  var start = (event.start.format('DD-MM-YYYY'));
  var end = (event.end.format("DD-MM-YYYY"));
    $.ajax({
        url: 'drag_drop_evento.php',
        data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
        type: "POST",
        success: function (response) {
          Swal
              .fire({
                title:"Modificado con exito",
                icon: "success",
                showConfirmButton: false,
                showCancelButton: false,
                timer: 1000
              })
        }
    });
    
},

//Modificar Evento del Calendario 
eventClick:function(event,e){
  var idEvento = event._id;

if(e.target.id=="btnCerrar"){

}else{
    
    $('input[name=idEvento').val(idEvento);
    $('input[name=evento').val(event.title);
    switch(event.estado){
      case '1':
        $('select[name=estado]').val(1);
      break;
      case '2':
        $('select[name=estado]').val(2);
      break;
      case '3':
        $('select[name=estado]').val(3);
      break;
      case '4':
        $('select[name=estado]').val(4);
      break;
      default:
      $('select[name=estado]').val(vacio);
      break;
    }

    switch(event.bloque){
      case '1':
        $('select[name=bloque]').val(1);
      break;
      case '2':
        $('select[name=bloque]').val(2);
      break;
      case '3':
        $('select[name=bloque]').val(3);
      break;
      case '4':
        $('select[name=bloque]').val(4);
      break;
      default:
      $('select[name=bloque]').val(vacio);
      break;
    }
    

    $('input[name=observacion').val(event.observacion);
    $('input[name=fecha_inicio').val(event.start.format('DD-MM-YYYY'));
    $('input[name=fecha_fin').val(event.end.format("DD-MM-YYYY"));
    

    
   
      
    

    
    
    //if(event.color == colorSele.map) )
    //$('input[name=color_evento').prop('checked',true);
    $("#modalUpdateEvento").modal();
   
  }

  
    
}
  ,
  


  });
 
 
    // capturamos la url
    var loc = document.location.href;
    // si existe el interrogante
    if(loc.indexOf('?')>0)
    {
      function getGET(){
        // cogemos la parte de la url que hay despues del interrogante
        var getString = loc.split('?')[1];
        // obtenemos un array con cada clave=valor
        var GET = getString.split('&');
        var get = {};
        // recorremos todo el array de valores
        for(var i = 0, l = GET.length; i < l; i++){
            var tmp = GET[i].split('=');
            get[tmp[0]] = unescape(decodeURI(tmp[1]));
        }
        return get;
      }
      
      const nuevoEvento = getGET();

      if(nuevoEvento.e == 1){
        Swal
              .fire({
                title:"Mantencion registrada con exito",
                icon: "success",
                showConfirmButton: false,
                showCancelButton: false,
                timer: 1500
              })
      }

      history.pushState(null, 'calendario', 'index.php')
    }
    
/*
const btnSidebar = document.getElementById("sidebar-container");
 
const btnLabel = document.getElementById("btnLabel");
var src;
cargarEventsListeners();
            function cargarEventsListeners() {


                btnLabel.addEventListener("click", cambiarBoot )


            }
            
  function cambiarBoot(){
    const ruta = document.getElementById("11");
    ruta.src ="";
    if(btnSidebar.classList.contains("activo2")){ 
      ruta.src ="";
      ruta.src = "../calendario/js/bootstrap.min.js";
    }else{
      ruta.src ="";
      ruta.src = "../js/bootstrap.min.js";
    }

  }

  */
});

</script>





              </section>

              

        </div>

        </div>
    </div>





<div class="mt-5"></div>



<script src="https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>

</body>
</html>