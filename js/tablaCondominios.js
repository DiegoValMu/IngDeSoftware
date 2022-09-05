$(document).ready(function () {

    

    let dtTable = $('#tablaCondominios').DataTable({
        language: {
            select: {
                rows: {
                    _: "",
                    1: "1 Fila seleccionada"
                }
            }
        },
        select:true,
        responsive:true,

    "responsive":true,
    "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
    "ajax":{
        "url":"../inicio/datosCondominios.php",
        "method": "POST",
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "nombre"},
        {"data": "encargado"},
        {"data": "ciudad"},
        {"defaultContent": " <div class='row justify-content-center'>" +
        "<div class=' col align-items-center'>" +
        "<div class='btn-group'>" +
        "<button class='btn btn-sm btnModificar text-light' style='background-color:#EB745D;'>Administrar</button>" +
        "" +
        "</div>" +
        "</div>" +
        "</div>",
        orderable:false
    }
    ],
    "columnDefs": [{

        "targets": [0], //Comma separated values
        "visible": false,
        "searchable": true
    }],


      "oLanguage": {
            "sProcessing":     "Procesando...",
            "sLengthMenu": 'Mostrar <select>'+
                '<option value="5" >5</option>'+
                '<option value="10">10</option>'+
                '<option value="25">20</option>'+
                '<option value="50">50</option>'+
                '<option value="100">100</option>'+
                '<option value="-1">All</option>'+
                '</select> registros',    
            "sZeroRecords":    "No se registran solicitudes",
            "sEmptyTable":     "no hay datos disponibles para la tabla",
            "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Filtrar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
    }
    });

    $('select').addClass("form-control");
    $('select').addClass("p-1");
    $('select').addClass("h-25");

    $('#tablaCondominios_length').addClass('text-left');




    $(document).on('click', '.btnModificar', function () {
        const tabla = document.querySelector('tr.selected');
        const idCondominio = tabla.firstChild.innerHTML;
        console.log(tabla.firstChild.innerHTML);
        window.location.href = "../mantencion?idCondominio="+idCondominio;
        
    });
  

  });



  //<button class='btn btn-sm btnBorrar text-light' style='background-color:#B84368;'>Eliminar</button>