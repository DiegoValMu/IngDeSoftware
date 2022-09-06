<?php 
session_start(); 
?> 

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="description" content="Un calendario de registro">    
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mi Calendario:: Mantenciones</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="../extencionesCalendario/css/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../extencionesCalendario/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../extencionesCalendario/css/home.css">
  <link rel="stylesheet" href="../assets/css/style.css">
 <link rel="stylesheet" href="	https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

  <link rel="stylesheet" href="../assets/css/sidebar.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>
<body>

<?php
include('../conexion/config.php');

$encargado = $_SESSION['idEncargado'];

  $SqlEventos   = ("SELECT * FROM mantencion WHERE id_encargado = '".$encargado."'");
  $resulEventos = mysqli_query($con, $SqlEventos);

  $SqlContratista   = ("SELECT * FROM contratista");
  $resulContratista = mysqli_query($con, $SqlContratista);
?>


<div class="d-flex" id="content-wrapper">
      <!-- sideBar -->
    <?php include('../partesEncargado/sidebar.php') ?>
      <!-- fin sideBar -->

        <div class="w-100">

        <!-- Navbar -->
        <?php include('../partesEncargado/nav.php') ?>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="fondo2 w-100">


              

              <section class="">
               

              <div class="container">

                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <h2 class="text-center" id="title">Registro de mantenciones condominio  <?php echo $_SESSION["nombre_condominio"] ?> </h2>
                    </div>
                  </div>
                </div>



              <div id="calendar" class="bg-light"></div>


               



<script src ="../extencionesCalendario/js/jquery-3.0.0.min.js"> </script>
<script src="../extencionesCalendario/js/popper.min.js"></script>
<script src="../extencionesCalendario/js/bootstrap.min.js"></script>


<script type="text/javascript" src="../extencionesCalendario/js/moment.min.js"></script>	
<script type="text/javascript" src="../extencionesCalendario/js/fullcalendar.min.js"></script>
<script src='../extencionesCalendario/locales/es.js'></script>

<?php  
                 include ("../calendarioAdm/agregarContratista.php");
                include('modalNuevoEvento.php');
                include('modalUpdateEvento.php');
                ?>

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
      $('input[name=observacion').val(vacio);

      $("input[name=fecha_inicio]").val(start.format('YYYY-MM-DD'));
       
      var valorFechaFin = end.format("YYYY-MM-DD");
      var F_final = moment(valorFechaFin, "YYYY-MM-DD").subtract(1, 'days').format('YYYY-MM-DD'); //Le resto 1 dia
      $('input[name=fecha_fin').val(F_final); 
      
   

    },
      
    events: [
      <?php
       while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
          {
          _id: '<?php echo $dataEvento['cod_mantencion']; ?>',
          title: '<?php echo $dataEvento['nomb_mantencion']; ?>',
          estado: '<?php echo $dataEvento['estado']; ?>',
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
                   url: '../extencionesCalendario/deleteEvento.php',
                   data: {id:event._id,estado:event.estado},
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
        url: '../extencionesCalendario/drag_drop_evento.php',
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
    
    if ($('select[name=estado]').val() == 1 || $('select[name=estado]').val() == 2){
      $('label[name=labelContratista]').removeClass('d-none');
      $('textarea[name=contratista]').removeClass('d-none');
      $('button[name=agregarContratista]').removeClass('d-none');
      $.ajax({
        url: '../extencionesCalendario/consultarContratista.php',
        data: 'idEvento='+idEvento,
        type: "POST",
        success: function (response) {
          response.trimStart();
          console.log(response.trimStart());
          
          $('textarea[name=contratista]').val(response.trimStart());
        }
      });
    }else if ($('select[name=estado]').val() == 3 || $('select[name=estado]').val() == 4) {
      $('label[name=labelContratista]').addClass('d-none');
      $('textarea[name=contratista]').addClass('d-none');
      $('button[name=agregarContratista]').addClass('d-none');
    }


    $('input[name=observacion').val(event.observacion);
    $('input[name=fecha_inicio').val(event.start.format('YYYY-MM-DD'));
    $('input[name=fecha_fin').val(event.end.format("YYYY-MM-DD"));
    

    
   
      
    

    
    
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
      if(nuevoEvento.e == 2){
        Swal
              .fire({
                title:"Mantencion actualizada con exito",
                icon: "success",
                showConfirmButton: false,
                showCancelButton: false,
                timer: 1500
              })
      }

      history.pushState(null, 'calendario', 'index.php')
    }


    $('#btnCalendario').click(function() {
      const mantenciones = $('#mantenciones');
      mantenciones.slideToggle('slow')
    })

    $('#btn3Dot').click(function() {
      const mantenciones = $('#logout');
      mantenciones.slideToggle('slow')
    })

});

</script>





              </section>

              

        </div>

        </div>
    </div>





<div class="mt-5"></div>



<script src="https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
<script src="../js/agregarContratista.js"></script>
</body>
</html>