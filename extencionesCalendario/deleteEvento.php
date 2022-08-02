<?php
require_once('../conexion/config.php');

$id    		= $_REQUEST['id']; 
$estado     = $_REQUEST['estado'];


if($estado == '1' || $estado == '2'){
    $sqlDeleteRealiza = ("DELETE FROM realiza WHERE  cod_mantencion='" .$id. "'");
$resultDelete = mysqli_query($con, $sqlDeleteRealiza);
}


$sqlDeleteEvento = ("DELETE FROM mantencion WHERE  cod_mantencion='" .$id. "'");
$resultProd = mysqli_query($con, $sqlDeleteEvento);

?>
  