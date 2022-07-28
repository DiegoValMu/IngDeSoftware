<?php 



$idCondominio = $_REQUEST['idCondominio'];


include ('../calendarioAdm/config.php');

$SqlCondominio   = ("SELECT c.cod_condominio, c.nomb_condominio, ciu.nombre_ciudad, e.nomb_encargado 
                        FROM condominio c, encargado e, ciudad ciu  
                        WHERE c.id_admin = '111'
                        AND c.cod_ciudad = ciu.cod_ciudad
                        AND c.id_encargado = e.id_encargado");
$resultCondominio = mysqli_query($con, $SqlCondominio);
$data=array();

while ($dataEnc = mysqli_fetch_assoc($resultCondominio)){ 
    
}

echo json_encode($dataEnc);


?> 