<?php 

include ('../calendarioAdm/config.php');


$idCondominio = $_REQUEST['idCondominio'];

$SqlCondominio   = ("SELECT *
                        FROM condominio c, encargado e, ciudad ciu , mantencion m, realiza r, contratista con, trabaja tr, empresa_mantenciones em
                        WHERE m.estado = 1   
                        AND c.cod_ciudad = ciu.cod_ciudad
                        AND c.id_encargado = e.id_encargado 
                        AND e.id_encargado = m.id_encargado
                        AND m.cod_mantencion = r.cod_mantencion 
                        AND r.id_contratista = con.id_contratista
                        AND con.id_contratista = tr.id_contratista
                        AND tr.cod_empresam = em.cod_empresam
                        AND c.cod_condominio = '".$idCondominio."'");
$resultCondominio = mysqli_query($con, $SqlCondominio);
$data=array();

while ($dataEnc = mysqli_fetch_assoc($resultCondominio)){ 
    $data[]=array(
        'id'=>$dataEnc["cod_mantencion"],
        'mantencion'=>$dataEnc["nomb_mantencion"],
        'observacion'=>$dataEnc["observacion"],
        'costo'=>$dataEnc["costo_servicio"],
        'fecha_inicio'=> date('d-m-Y', strtotime($dataEnc["fecha_inicio"])) ,
        'fecha_fin'=>  date('d-m-Y', strtotime($dataEnc["fecha_fin"])),
        'contratista'=>$dataEnc["nomb_contratista"]." ".$dataEnc["apellidos_contratista"],
        'empresa'=>$dataEnc["nomb_Empresa"]

    );
}

echo json_encode($data);

?> 