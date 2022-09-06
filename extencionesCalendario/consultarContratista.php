

<?php 



$idMantencion = $_REQUEST['idEvento'];


include ('../conexion/config.php');

$SqlMantencion   = ("SELECT * 
                    FROM mantencion m, realiza r, contratista c
                    WHERE c.id_contratista = r.id_contratista 
                    AND r.cod_mantencion = m.cod_mantencion  
                    AND m.cod_mantencion = '".$idMantencion."' ");
$resultMantencion = mysqli_query($con, $SqlMantencion);


while ($dataMan = mysqli_fetch_assoc($resultMantencion)){ 
    echo $dataMan["nomb_contratista"]." ".$dataMan["apellidos_contratista"]." - ".$dataMan["oficio"].", \n";
}



?> 