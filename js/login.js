



























if(document.querySelector("#formAdmins")){
    let form = document.querySelector("#formAdmins");
    form.onsubmit = function (event){
        event.preventDefault();
        validarDatos();
    }
    async function validarDatos(){
        let rutAdmin = document.querySelector("#rutA").value;
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