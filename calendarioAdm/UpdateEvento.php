<?php
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_POST['idEvento'];

$idContratista    = $_POST['contratista'];

if(!empty($idContratista)){

$UpdateRealiza = ("INSERT INTO `realiza` (`cod_mantencion`, `id_contratista`) VALUES ('$idEvento', '$idContratista');");
$resultRealiza = mysqli_query($con, $UpdateRealiza);


}


$nomb_man            = ucwords($_REQUEST['evento']);
$estado_man          = ucwords($_REQUEST['estado']);
$observacion_man     = ucwords($_REQUEST['observacion']);

$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 0 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  
$color_evento      = $_REQUEST['color_evento'];



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