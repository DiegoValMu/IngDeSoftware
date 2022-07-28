            inputSearch =       document.getElementById("buscar");
            box_search =        document.getElementById("box-search");
 
            cargarEventsListeners();
            function cargarEventsListeners() {

                document.getElementById("buscar").addEventListener("keyup", buscador_interno);

                document.addEventListener("click", ocultarOpcion);


            }
            
            function ocultarOpcion(e){
                
                if(e.target.id != "buscar"){
                    box_search.style.display = "none";
                    inputSearch.value = "";
                }
            }
            

            function buscador_interno(){
                filter = inputSearch.value.toUpperCase();
            
                li = box_search.getElementsByTagName("li");

            //Recorriendo elementos a filtrar mediante los "li"
                for (i = 0; i < li.length; i++){

                    a = li[i].getElementsByTagName("a")[0];
                    textValue = a.textContent || a.innerText;

                    if(textValue.toUpperCase().indexOf(filter) > -1){

                        li[i].style.display = "";
                        box_search.style.display = "block";

                        if (inputSearch.value === ""){
                            box_search.style.display = "none";
                        }

                    }else{
                        li[i].style.display = "none";
                    }

                }
            }


           
           

        



            


           
           