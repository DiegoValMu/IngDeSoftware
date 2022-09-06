if(document.querySelector("#agregarNuevoContratista")){
    let form = document.querySelector("#agregarNuevoContratista");
    form.onsubmit = function (event){
        event.preventDefault();
        validarDatos();
    }
    async function validarDatos(){
        let idContratista = document.querySelector("#contratista").value;
        console.log(idContratista)
        if(idContratista == ""){
            Swal
              .fire({
                title:"Error, faltan campos por completar",
                icon: "warning",
                showConfirmButton: true,
                showCancelButton: false
              })
        }else{
            $.ajax({
                url: "../extencionesCalendario/agregarNuevoContratista.php",
                method: "POST",
                data: "idContratista="+idContratista,
                success: function(data){
                    if(data == true){
                        Swal
                            .fire({
                              title:"Contratista agregado exitosamente",
                              icon: "success",
                              showConfirmButton: true,
                              showCancelButton: false
                            })
                    }else{
                        Swal
                            .fire({
                              title:"Error: no se pudo ingresar",
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