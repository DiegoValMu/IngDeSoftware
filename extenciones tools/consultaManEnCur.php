<?php 

include ('../conexion/config.php');


$idCondominio = $_REQUEST['idCondominio'];

$SqlCondominio   = ("SELECT *
                        FROM condominio c, encargado e, mantencion m
                        WHERE m.estado = 2   
                        AND c.id_encargado = e.id_encargado 
                        AND e.id_encargado = m.id_encargado
                        AND c.cod_condominio = '".$idCondominio."'");
$resultCondominio = mysqli_query($con, $SqlCondominio);
$data=array();

while ($dataEnc = mysqli_fetch_assoc($resultCondominio)){ 
    $data[]=array(
        'id'=>$dataEnc["cod_mantencion"],
        'mantencion'=>$dataEnc["nomb_mantencion"],
        'observacion'=>$dataEnc["observacion"],
        'fecha_inicio'=> date('d-m-Y', strtotime($dataEnc["fecha_inicio"])) ,
        'fecha_fin'=>  date('d-m-Y', strtotime($dataEnc["fecha_fin"]))
    );
}

echo json_encode($data);

?> 