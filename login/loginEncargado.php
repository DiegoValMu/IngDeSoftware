<?php

require("../conexion/config.php");
$RUT           = $_REQUEST['rutE'];
$DV            = $_REQUEST['DVE'];
$password      = $_REQUEST['passwordE'];

$password = trim($password);  


$SqlEventos   = ("SELECT * FROM encargado WHERE rut_encargado ='" .$RUT. "'");
$result = mysqli_query($con, $SqlEventos);


while ($data = mysqli_fetch_array($result)){ 
    if($data["contrasena_encargado"] == $password && $data["digito_verificador_encargado"] == $DV){
        session_start();
        $_SESSION["nombre_usuario"] = $data["nomb_encargado"];
        $_SESSION["idEncargado"] = $data["id_encargado"];
        $idEncargado = $_SESSION['idEncargado'];

        $SqlCondominio   = ("SELECT * FROM condominio WHERE id_encargado ='" .$idEncargado. "'");
        $resultCondominio = mysqli_query($con, $SqlCondominio);
        
        
        while ($dataCondominio = mysqli_fetch_array($resultCondominio)){
            $_SESSION['idCondominio'] = $dataCondominio["cod_condominio"]; 
            $_SESSION["nombre_condominio"] = $dataCondominio["nomb_condominio"];
          }
        echo true;
    }else{
        echo false;
    }
}




?>