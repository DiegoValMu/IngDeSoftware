<?php
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL,"es_ES");

include('../conexion/config.php');
                        
$idEvento         = $_REQUEST['idEvento'];

$idContratista    = $_REQUEST['contratista'];

if(!empty($idContratista)){

$UpdateRealiza = ("INSERT INTO `realiza` (`cod_mantencion`, `id_contratista`) VALUES ('$idEvento', '$idContratista');");
$resultRealiza = mysqli_query($con, $UpdateRealiza);


}


$nomb_man            = ucwords($_REQUEST['evento']);
$nomb_man            = trim($nomb_man);

$estado_man          = ucwords($_REQUEST['estado']);

switch ($estado_man){
    case '1':
        $color_evento = "#8ec148";
    break;
    case '2':
        $color_evento = "#f8ba43";
    break;
    case '3':
        $color_evento = "#6c757d";
    break;
    case '4':
        $color_evento = "#d94555";
    break;
}
$observacion_man     = ucwords($_REQUEST['observacion']);
$observacion_man     = trim($observacion_man);

$f_inicio          = $_REQUEST['fecha_inicio'];

$f_inicio          = trim($f_inicio); 
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin'];
$f_fin             = trim($f_fin);
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 0 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1)); 

    



$UpdateProd = ("UPDATE mantencion
    SET nomb_mantencion ='$nomb_man',
        estado ='$estado_man',
        observacion ='$observacion_man',
        fecha_inicio ='$fecha_inicio',
        fecha_fin ='$fecha_fin',
        color_evento ='$color_evento'
    WHERE cod_mantencion='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

header("Location:index.php?e=2");
?>