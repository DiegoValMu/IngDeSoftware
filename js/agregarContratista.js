if(document.querySelector("#agregarNuevoContratista")){
    let form = document.querySelector("#agregarNuevoContratista");
    
    form.onsubmit = function (event){
        event.preventDefault();
        validarDatos();
    }
    async function validarDatos(){
        let idContratista = document.querySelector("#contratista").value;
        let evento = document.getElementById("idEvento").value;
        console.log(idContratista);
        console.log(evento);
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
                method: "GET",
                data: {idContratista:idContratista,idEvento:evento},
                success: function(data){
                    if(data == true){
                        Swal
                            .fire({
                              title:"Contratista agregado exitosamente",
                              icon: "success",
                              showConfirmButton: false,
                              showCancelButton: false,
                              timer: 1000
                            })
                    }else{
                        Swal
                            .fire({
                              title:"Error: no se pudo ingresar",
                              icon: "warning",
                              showConfirmButton: false,
                              showCancelButton: false,
                              timer: 1000
                            })

                    }
                }
            });
        }
    }
}