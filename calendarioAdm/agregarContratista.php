
<div class="modal fade" id="myModalAgregar"  tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
	  <h3 class="text-center" style="color:#6F2968;"><i class="bi bi-chevron-right"></i>Agregar nuevo contratista</h3>
      </div>
      <div class="modal-body">

    <form id="agregarNuevoContratista">
    
    <div class="col-sm-12">
      <select type="text" name="contratista" id="contratista" class="form-control" >
      
            <option disabled selected>Seleccione...</option>
            <?php while($dataContratista = mysqli_fetch_array($resulContratista)){ ?>
            <option value="<?php echo $dataContratista["id_contratista"]; ?>"><?php echo $dataContratista["nomb_contratista"]." ".$dataContratista["apellidos_contratista"]." - ".$dataContratista["oficio"]; ?></option>
            <?php } ?>

        </select>
	</div>


      </div>
      <div class="modal-footer">
      <button type="submit" class="btn guardar text-light" >Agregar</button>
      <button type="button" id="cerrar" class="btn btn-secondary" >Salir</button>
    </form>
      </div>
    </div>
  </div>
</div>