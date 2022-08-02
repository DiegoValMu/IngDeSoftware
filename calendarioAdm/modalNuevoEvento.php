<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar nueva mantención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


  <form name="formEvento" id="formEvento" action="../calendarioAdm/nuevoEvento.php" class="form-horizontal" method="POST">
		<div class="form-group">
			<label for="evento" class="col-sm-12 control-label ">Registro de mantención:</label>
			<div class="col-sm-12 ">
				<input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre mantención" required/>
			</div>
      <input type="hidden" name="idEncargado" value="<?php echo $_SESSION["idEncargado"]; ?>">
	
      <input type="hidden" name="estado" value="3">

   
    <label for="observacion" class="col-sm-12  ">Observación en la mantención: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control area" name="observacion" id="observacion" />
		
			</div>
		
		
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha Inicio</label>
      <div class="col-sm-12 ">
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha Inicio" required/>
      </div>
    
    
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha de término</label>
      <div class="col-sm-12 ">
        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" placeholder="Fecha Final" required/>
      </div>
    </div>
 

      <input type="hidden" name="color_evento" id="red" value="#6c757d" required>


		
	   <div class="modal-footer">
      	<button type="submit" class="btn guardar text-light">Guardar registro</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
    	</div>
	</form>
      
    </div>
  </div>
</div> 

