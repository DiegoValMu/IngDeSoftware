<div class="modal" id="modalUpdateEvento"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar registro de mantención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEventoUpdate" id="formEventoUpdate" action="../calendarioAdm/UpdateEvento.php" method="POST" class="form-horizontal">
    <input type="hidden" class="form-control" name="idEvento" id="idEvento">
    <div class="form-group">
      <label for="evento" class="col-sm-12 control-label">Información mantención</label>
      <div class="col-sm-12 ">
				<input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre mantención" required/>
			</div>
	
      <label for="estado" class="col-sm-12 control-label ">Estado de la mantención:</label>
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



   
    <label for="observacion" class="col-sm-12  ">Observación en la mantención: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control area2" name="observacion" id="observacion" />
			
			</div>
		
		
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-12 ">
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio" maxlength="10"  required/>
      </div>
    
    
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha de término</label>
      <div class="col-sm-12 ">
        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final" maxlength="10"  required/>
      </div>
    </div>



    
     <div class="modal-footer">
        <button type="submit" class="btn guardar text-light" >Guardar Cambios</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
  </form>
      
    </div>
  </div>
</div>

<script>



</script>
