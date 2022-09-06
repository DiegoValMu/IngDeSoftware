$(document).ready(function () {

    

    $('#mantencionesRealizadas').DataTable({
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
        "url":"../extenciones tools/consultaManReali.php",
        "method": "POST",
        "data": {"idCondominio": idCondominio},
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "mantencion"},
        {"data": "observacion"},
        {"data": "fecha_inicio"},
        {"data": "fecha_fin"}
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
            "sEmptyTable":     "No existe registro de mantenciones 'Realizadas'",
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

    $('#mantencionesEnCurso').DataTable({
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
        "url":"../extenciones tools/consultaManEnCur.php",
        "method": "POST",
        "data": {"idCondominio": idCondominio},
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "mantencion"},
        {"data": "observacion"},
        {"data": "fecha_inicio"},
        {"data": "fecha_fin"}
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
            "sEmptyTable":     "No existe registro de mantenciones 'En Curso'",
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

    $('#mantencionesEnEspera').DataTable({
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
        "url":"../extenciones tools/consultaManEnEsp.php",
        "method": "POST",
        "data": {"idCondominio": idCondominio},
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "mantencion"},
        {"data": "observacion"},
        {"data": "fecha_inicio"},
        {"data": "fecha_fin"}
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
            "sEmptyTable":     "No existen registros de mantenciones en 'Espera' ",
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

    $('#mantencionesCanceladas').DataTable({
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
        "url":"../extenciones tools/consultaManCancel.php",
        "method": "POST",
        "data": {"idCondominio": idCondominio},
        "dataSrc":""
    },
    "columns":[
        {"data": "id"},
        {"data": "mantencion"},
        {"data": "observacion"}
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
            "sEmptyTable":     "No existe registro de mantenciones 'Canceladas'",
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

    $('#mantencionesRealizadas_length').addClass("text-left");
    $('#mantencionesEnCurso_length').addClass("text-left");
    $('#mantencionesEnEspera_length').addClass("text-left");
    $('#mantencionesCanceladas_length').addClass("text-left");
  });