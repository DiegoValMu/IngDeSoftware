

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
    
    <div class="d-inline-flex p-2">
      <label name="labelContratista" for="contratista" class="col-sm-12 control-label d-none my-0 px-0 py-2">Contratista/s asociados/s:</label>
      <button id="agregarContratista" name="agregarContratista" class="btn btn-success" 
      style="font-size:12px;height: fit-content; padding: 2px 5px !important;line-height: 1.5 !important;margin-top:auto;margin-bottom:auto;"
      data-bs-toggle="modal" data-bs-target="#myModalAgregar" >Agregar</button>
    </div>
    
    <div class="col-12 mb-1">
      
    
    
    <!-- <input type="text" class="form-control" name="contratista" id="contratista" readonly="readonly" /> -->
 
    <textarea class="w-100" name="contratista" id="contratista" style="height: 5rem;"></textarea>    

    
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



$('#agregarContratista').click(function(event){
  event.preventDefault();

  let Modal = document.getElementById('myModalAgregar');

 console.log(Modal);
  Modal.classList.add('show');
  Modal.classList.add('d-block');
  Modal.setAttribute('style','z-index:999999!important;')

})

$('#cerrar').click(function(e){
  e.preventDefault();

  let Modal = document.getElementById('myModalAgregar');

  Modal.classList.remove('show');
  Modal.classList.remove('d-block');


});







</script>
