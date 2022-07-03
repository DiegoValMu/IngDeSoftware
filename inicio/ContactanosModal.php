<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Escribenos un correo</h5>
        <button type="button" class="btn-close" style="border:none;background-color:#fff;" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-circle"></i></button>
      </div>
      <div class="modal-body">
      <form action="mailto:example@example.com" method="post" enctype="text/plain">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Tu correo:</label>
            <input type="mail" class="form-control" id="recipient-name" placeholder="Example@example.com" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Mensaje:</label>
            <textarea class="form-control" id="message-text" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>