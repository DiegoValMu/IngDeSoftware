<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../calendario/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div id="Content" class="fondo3">
        <section class="">
            <div class="barra">
                    
                      
                    
                   
            </div>
        </section>

        <section class="bg-light ubicacion" style="opacity: 0.7; margin-top:3%;" >
                    <div class="container">
                        
                            <div style="opacity: 1; padding: 10px;">
                                <h1 class="font-weight-bold mb-0" align="center" >Login sesion Encargado mantenciones</h1>
                            </div>
                            <!--
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
                            </div>
-->
                        
                    </div>
                </section>
        

        <section class="">
            <div class="contenedor" >
                    <form class="formulario" action="../inicio" method="POST">

                        <div class="form-group ">
                            
                                <input type="text" maxlength="8" autocomplete="off" class="form-control" name="rut" id="rut" placeholder="Rut" required/>
                                <p class="separador">-</p>
                                <select name="dVerificador" id="dVerificador" class="verificador form-control">
                                    <option value=""></option>    
                                    <option value="0">0</option>    
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="k">K</option>
                                </select>
			            
                        </div> 

                        <div class="form-group ">
                             
                                <input type="password" autocomplete="off" class="form-control" name="pass" id="pass" placeholder="Contraseña" required/>
			               
                        </div>

                        <div class="col-sm-12">
      	                    <button type="submit" class="boton">Iniciar Sesión</button>
                        </div>
                        

                    </form>
                     
                    
                   
            </div>
        </section>

    </div>
    <script src="../js/login.js"></script>
    
</body>
</html>