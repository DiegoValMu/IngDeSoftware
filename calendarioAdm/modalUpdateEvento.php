<div class="modal" id="modalUpdateEvento"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar registro de mantención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventoUpdate" id="formEventoUpdate" action="UpdateEvento.php" class="form-horizontal" method="POST">
    <input type="hidden" class="form-control" name="idEvento" id="idEvento">
    <div class="form-group">
      <label for="evento" class="col-sm-12 control-label">Información mantención</label>
      <div class="col-sm-12 ">
				<input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre mantención" required/>
			</div>
	
      <label for="estado" class="col-sm-12 control-label ">Estado de la mantencion:</label>
    <div class="col-sm-12">
      <select type="text" name="estado" id="estado" class="form-control" >
        <option value="1">Realizada</option>
        <option value="2">En curso</option>
        <option value="3">En espera</option>
        <option value="4">Cancelada</option>

     </select>
		</div>
    
    
    <label name="labelContratista" for="contratista" class="col-sm-12 control-label d-none">Contratista:</label>
    <div class="col-sm-12">
      <select type="text" name="contratista" id="contratista" class="form-control d-none" >
      
        <option disabled selected>Seleccione...</option>
        <?php while($dataContratista = mysqli_fetch_array($resulContratista)){ ?>
        <option value="<?php echo $dataContratista["id_contratista"]; ?>"><?php echo $dataContratista["nomb_contratista"]." ".$dataContratista["apellidos_contratista"]." - ".$dataContratista["oficio"]; ?></option>
        <?php } ?>

     </select>
		</div>


    <script>
      /*
        function desplegarContratistas() {
          const valorEstado = $("#estado").val();
          const valueContratista = document.getElementById("contratista");
          console.log(valueContratista);
          
          if(valueContratista == null ){
            if(valorEstado == 1 || valorEstado == 2 ){
            const entrada = document.createElement("select");
            entrada.type ="text";
            entrada.id   ="contratista";
            entrada.name = "contratista";
            entrada.classList = "form-control";

            const label = document.createElement("label");

            label.for = "contratista";
            label.classList = "control-label col-sm-12";
            label.textContent = "Contratista:";

            const contenedorCon = document.getElementById("contenedorContratista");

            contenedorCon.insertAdjacentElement("afterbegin", entrada);
            contenedorCon.insertAdjacentElement("beforebegin", label);

            }
          }
          
        }
*/
    </script>

   
    <label for="observacion" class="col-sm-12  ">Observacion en la mantencion: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control area2" name="observacion" id="observacion" />
			
			</div>
		
		
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio" required/>
      </div>
    
    
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha de termino</label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final" required/>
      </div>
    </div>

    <div class="col-md-12 activado" id="activado">
 
    <input type="radio" name="color_evento" id="redUpd" value="#dc3545" required>
  <label for="redUpd" class="circu" style="background-color: #dc3545;"> </label>

  <input type="radio" name="color_evento" id="orangeUpd" value="#fd7e14"  >
  <label for="orangeUpd" class="circu" style="background-color: #fd7e14;"> </label>

  <input type="radio" name="color_evento" id="amberUpd" value="#FFC107">  
  <label for="amberUpd" class="circu" style="background-color: #FFC107;"> </label>

  <input type="radio" name="color_evento" id="limeUpd" value="#8BC34A" >  
  <label for="limeUpd" class="circu" style="background-color: #8BC34A;"> </label>

  <input type="radio" name="color_evento" id="tealUpd" value="#009688">  
  <label for="tealUpd" class="circu" style="background-color: #009688;"> </label>

  <input type="radio" name="color_evento" id="blueUpd" value="#2196F3">  
  <label for="blueUpd" class="circu" style="background-color: #2196F3;"> </label>

  <input type="radio" name="color_evento" id="dark-blueUpd" value="#111B54">  
  <label for="dark-blueUpd" class="circu" style="background-color: #111B54;"> </label>

  <input type="radio" name="color_evento" id="indigoUpd" value="#9c27b0">  
  <label for="indigoUpd" class="circu" style="background-color: #9c27b0;"> </label>

  <input type="radio" name="color_evento" id="pinkUpd" value="#e83e8c">  
  <label for="pinkUpd" class="circu" style="background-color: #e83e8c;"> </label>

    </div>

    
     <div class="modal-footer">
        <button type="submit" class="btn guardar text-light">Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
  </form>
      
    </div>
  </div>
</div>
