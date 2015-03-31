<h1 class="page-header">Registrar tipo de examen</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un tipo de examen en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tipoexamen.php" method="POST" name="form_tipoexamen">
    <input type="hidden" value="registrar_tipoexamen" name="operacion" />
    <input type="hidden"  name="idttipoexamen" id="cam_idttipoexamen"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_tipoexamen">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del tipo de examen."></i></strong></label>
              <input type="text" name="tipoexamen" class="form-control letras_latinas" id="cam_tipoexamen" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/tipoexamen';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
