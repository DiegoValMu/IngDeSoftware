<?php
date_default_timezone_set("America/Santiago");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");




function codrandom(){
	$numeroran = random_int(1,100000);
	return $numeroran;
}

$id= '';
$id = codrandom();


require("../conexion/config.php");
$nomb_man            = ucwords($_REQUEST['evento']);
$estado_man          = ucwords($_REQUEST['estado']);
$observacion_man     = ucwords($_REQUEST['observacion']);

$idEncargado         =$_REQUEST["idEncargado"];

$nomb_man            = trim($nomb_man);
$observacion_man     = trim($observacion_man);

$f_inicio          = $_REQUEST['fecha_inicio'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 

$f_fin             = $_REQUEST['fecha_fin']; 
$seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
$fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
$fecha_fin         = date('Y-m-d', ($fecha_fin1));  
$color_evento      = $_REQUEST['color_evento'];


$InsertNuevoEvento = "INSERT INTO mantencion(
      cod_mantencion,
      nomb_mantencion,
      estado,
      observacion,
      fecha_inicio,
      fecha_fin,
      id_encargado,
      color_evento
      )
    VALUES (
      '" .$id. "',
      '" .$nomb_man. "',
      '". $estado_man."',
      '". $observacion_man."',
      '". $fecha_inicio."',
      '" .$fecha_fin. "',
      '". $idEncargado."',
      '" .$color_evento. "'
  )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);

header("Location:index.php?e=1");

?>