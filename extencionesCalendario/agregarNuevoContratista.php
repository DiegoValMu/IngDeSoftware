<?php

require("../conexion/config.php");
$idContratista           = $_REQUEST['idContratista'];
$idEvento                = $_REQUEST['idEvento'];




            $UpdateRealiza = ("INSERT INTO `realiza` (`cod_mantencion`, `id_contratista`) VALUES ('$idEvento', '$idContratista');");
            $resultRealiza = mysqli_query($con, $UpdateRealiza);
            echo true;





?>