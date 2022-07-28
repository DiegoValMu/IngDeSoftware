<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar nueva mantención</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


  <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">
		<div class="form-group">
			<label for="evento" class="col-sm-12 control-label ">Registro de mantención:</label>
			<div class="col-sm-12 ">
				<input type="text" class="form-control" name="evento" id="evento" placeholder="Nombre mantención" required/>
			</div>
	
      <label for="estado" class="col-sm-12 control-label ">Estado de la mantencion:</label>
    <div class="col-sm-12">
      <select type="text" name="estado" id="estado" class="form-control" required >
        <option value="">Seleccione...</option>
        <option value="1">Realizada</option>
        <option value="2">En curso</option>
        <option value="3">En espera</option>
        <option value="4">Cancelada</option>

     </select>
		</div>

   
    <label for="observacion" class="col-sm-12  ">Observacion en la mantencion: <br></label>
      <div class="col-sm-12 ">
        <input type="text" class="form-control area" name="observacion" id="observacion" />
		
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

  <div class="col-md-12" id="grupoRadio">
  
  

  <input type="radio" name="color_evento" id="red" value="#dc3545" required>
  <label for="red" class="circu" style="background-color: #dc3545;" > </label>

  <input type="radio" name="color_evento" id="orange" value="#fd7e14"  >
  <label for="orange" class="circu" style="background-color: #fd7e14;"> </label>

  <input type="radio" name="color_evento" id="amber" value="#FFC107">  
  <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

  <input type="radio" name="color_evento" id="lime" value="#8BC34A">  
  <label for="lime" class="circu" style="background-color: #8BC34A;"> </label>

  <input type="radio" name="color_evento" id="teal" value="#009688">  
  <label for="teal" class="circu" style="background-color: #009688;"> </label>

  <input type="radio" name="color_evento" id="blue" value="#2196F3">  
  <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

  <input type="radio" name="color_evento" id="dark-blue" value="#111B54">  
  <label for="dark-blue" class="circu" style="background-color: #111B54;"> </label>

  <input type="radio" name="color_evento" id="indigo" value="#9c27b0">  
  <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label>

  <input type="radio" name="color_evento" id="pink" value="#e83e8c">  
  <label for="pink" class="circu" style="background-color: #e83e8c;"> </label>

</div>
		
	   <div class="modal-footer">
      	<button type="submit" class="btn guardar text-light">Guardar registro</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
    	</div>
	</form>
      
    </div>
  </div>
</div> 

