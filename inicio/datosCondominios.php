<?php 
session_start();

$idAdm = $_SESSION["id_usuario"];

include ('../conexion/config.php');

$SqlCondominio   = ("SELECT *
                        FROM condominio c, encargado e, ciudad ciu  
                        WHERE  c.cod_ciudad = ciu.cod_ciudad
                        AND c.id_encargado = e.id_encargado
                        AND c.id_admin = '".$idAdm."'");
$resultCondominio = mysqli_query($con, $SqlCondominio);
$data=array();

while ($dataEnc = mysqli_fetch_assoc($resultCondominio)){ 
    $data[]=array(
        'id'=>$dataEnc["cod_condominio"],
        'nombre'=>$dataEnc["nomb_condominio"],
        'encargado'=>$dataEnc["nomb_encargado"]." ".$dataEnc["apellidos_encargado"],
        'ciudad'=>$dataEnc["nombre_ciudad"]
    );
}

echo json_encode($data);

?> 