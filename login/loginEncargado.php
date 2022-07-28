<?php

require("../calendarioEncargado/config.php");
$RUT           = $_REQUEST['rutE'];
$DV            = $_REQUEST['DVE'];
$password      = $_REQUEST['passwordE'];

$password = trim($password);  


$SqlEventos   = ("SELECT * FROM encargado WHERE rut_encargado ='" .$RUT. "'");
$result = mysqli_query($con, $SqlEventos);


while ($data = mysqli_fetch_array($result)){ 
    if($data["contrasena_encargado"] == $password){
        session_start();
        $_SESSION["nombre_usuario"] = $data["nomb_encargado"];
        $_SESSION["id_usuario"] = $data["id_encargado"];
        $condominio = $_SESSION['id_usuario'];

        $SqlEventos   = ("SELECT * FROM condominio WHERE id_encargado ='" .$condominio. "'");
        $result = mysqli_query($con, $SqlEventos);
        
        
        while ($data = mysqli_fetch_array($result)){ 
              $_SESSION["nombre_condominio"] = $data["nomb_condominio"];
          }
        echo true;
    }else{
        echo false;
    }
}




?>