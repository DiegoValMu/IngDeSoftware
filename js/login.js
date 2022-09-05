

if(document.querySelector("#formAdmins")){
    let form = document.querySelector("#formAdmins");
    form.onsubmit = function (event){
        event.preventDefault();
        validarDatos();
    }
    async function validarDatos(){
        let rutAdmin = document.querySelector("#rutA").value;
        rutAdmin = rutAdmin.split(".");
        rutAdmin = rutAdmin.join('');
        let digito_verificador_admin = document.querySelector("#DVA").value;
        let passAdmin = document.querySelector("#passwordA").value;

        if(rutAdmin == "" || digito_verificador_admin == "DV" || passAdmin == ""){
            Swal
              .fire({
                title:"Error, faltan campos por completar",
                icon: "warning",
                showConfirmButton: true,
                showCancelButton: false
              })
        }else{
            $.ajax({
                url: "../login/loginAdmin.php",
                method: "POST",
                data: "rutAdmin="+rutAdmin+"&dvA="+digito_verificador_admin+"&passAdmin="+passAdmin,
                success: function(data){
                    if(data == true){
                        location.href = "../inicio"
                    }else{
                        Swal
                            .fire({
                              title:"Error: los datos ingresados no son validos",
                              icon: "warning",
                              showConfirmButton: true,
                              showCancelButton: false
                            })

                    }
                }
            });
        }
    }
}


if(document.querySelector("#formEncargado")){
    let form2 = document.querySelector("#formEncargado");
    form2.onsubmit = function (event){
        event.preventDefault();
        validarDatosE();
    }
    async function validarDatosE(){
        let rutEnc = document.querySelector("#rutE").value;
        rutEnc = rutEnc.split(".");
        rutEnc = rutEnc.join('');
        let digito_verificador_encargado = document.querySelector("#DVE").value;
        let passEnc = document.querySelector("#passwordE").value;

        if(rutEnc == "" || digito_verificador_encargado == "DV" || passEnc == ""){
            Swal
              .fire({
                title:"Error, faltan campos por completar",
                icon: "warning",
                showConfirmButton: true,
                showCancelButton: false
              })
        }else{
            $.ajax({
                url: "../login/loginEncargado.php",
                method: "POST",
                data: "rutE="+rutEnc+"&DVE="+digito_verificador_encargado+"&passwordE="+passEnc,
                success: function(data){
                    if(data == true){
                        location.href = "../mantencion/menuEncargado.php"
                    }else{
                        Swal
                            .fire({
                              title:"Error: los datos ingresados no son validos",
                              icon: "warning",
                              showConfirmButton: true,
                              showCancelButton: false
                            })

                    }
                }
            });
        }
    }
}