<h1 class="page-header">Registrar tipo de referencia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una tipo de referencia en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tiporeferencia.php" method="POST" name="form_tiporeferencia">
    <input type="hidden" value="registrar_tiporeferencia" name="operacion" />
    <input type="hidden"  name="idtiporeferencia" id="cam_idtiporeferencia"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_tiporeferencia">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la tipo de referencia."></i></strong></label>
              <input type="text" name="tiporeferencia" class="form-control letras_latinas" id="cam_tiporeferencia" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=tiporeferencia';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
