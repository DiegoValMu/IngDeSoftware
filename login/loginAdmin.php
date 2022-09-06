<?php
session_start();
require("../conexion/config.php");
$RUT           = $_REQUEST['rutAdmin'];
$DV            = $_REQUEST['DVA'];
$password      = $_REQUEST['passAdmin'];

$password = trim($password);  


$SqlEventos   = ("SELECT * FROM administrador WHERE rut_adm ='" .$RUT. "'");
$result = mysqli_query($con, $SqlEventos);


while ($data = mysqli_fetch_array($result)){ 
    if($data["contrasena_adm"] == $password && $data["digito_verificador_admin"] == $DV){
        
        $_SESSION["nombre_usuario"] = $data["nomb_admin"];
        $_SESSION["apellidos_usuario"] = $data["apellidos_adm"];
        $_SESSION["id_usuario"] = $data["id_admin"];
        mysqli_close($con); 
        echo true;
    }else{
        session_destroy();
        echo false;
       
    }
}





?>