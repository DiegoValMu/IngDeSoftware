<?php 

include ('../calendarioAdm/config.php');

$SqlCondominio   = ("SELECT *
                        FROM condominio c, encargado e, ciudad ciu  
                        WHERE c.id_admin = '111'
                        AND c.cod_ciudad = ciu.cod_ciudad
                        AND c.id_encargado = e.id_encargado");
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