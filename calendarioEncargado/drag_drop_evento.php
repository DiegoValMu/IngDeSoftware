<?php
date_default_timezone_set("America/Chile");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_REQUEST['idEvento'];
$start            = $_REQUEST['start'];
$fecha_inicio     = date('Y-m-d', strtotime($start)); 
$end              = $_REQUEST['end']; 
$fecha_fin        = date('Y-m-d', strtotime($end));  


$UpdateProd = ("UPDATE mantencion 
    SET 
        fecha_inicio ='$fecha_inicio',
        fecha_fin ='$fecha_fin'

    WHERE cod_mantencion='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);



?>