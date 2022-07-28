<!-- Modal -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
	  <h3 class="text-center" style="color:#6F2968;"><i class="bi bi-chevron-right"></i>Contactanos para mayor informacion</h3>
      </div>
      <div class="modal-body">

    <div class="container">
        <div class="row d-flex" style="justify-content:space-evenly!important;" align="center">
       
        <form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
			<div class="row">
				<div id="msgContactSubmit" class="hidden"></div>
				
				<div class="form-group col-sm-6">
					<div class="help-block with-errors"></div>
					<input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre"> 
					<div class="input-group-icon"><i class="fa fa-user"></i></div>
				</div><!-- end form-group -->
				<div class="form-group col-sm-6">
					<div class="help-block with-errors"></div>
					<input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" autocomplete="off" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
					<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
				</div><!-- end form-group -->
				<div class="form-group col-sm-6">
					<div class="help-block with-errors"></div>
					<input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
					<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
				</div><!-- end form-group -->
				<div class="form-group col-sm-6">
					<div class="help-block with-errors"></div>
					<input name="subject" id="subject" placeholder="Asunto*" class="form-control" type="text" required data-error="Por favor ingresa el asunto">
					<div class="input-group-icon"><i class="fa fa-book"></i></div> 
				</div><!-- end form-group -->
				<div class="form-group col-sm-12">
					<div class="help-block with-errors"></div>
					<textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
					<div class="textarea input-group-icon" ><i class="bi bi-pencil"></i></div>
				</div><!-- end form-group -->
				
				<div class="form-group last col-sm-12">
					<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
				</div><!-- end form-group -->	
		
				<span class="sub-text">* Campos requeridos</span>
				<div class="clearfix"></div>
			</div><!-- end row -->
		</form>

    </div>

	</div>



      </div>
      <div class="modal-footer">
       
      
      </div>
    </div>
  </div>
</div>