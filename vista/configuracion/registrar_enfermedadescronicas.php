<h1 class="page-header">Registrar Enfermedad Cronica</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las enfermedades cronicas en el sistema.
  </div>
<form role="form" class="form" action="../control/c_enfermedadescronicas.php" method="POST" name="form_enfermedadescronicas">
    <input type="hidden" value="registrar_enfermedadescronicas" name="operacion" />
    <input type="hidden"  name="idtenfermedadescronicas" id="cam_idtenfermedadescronicas"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_enfermedadcronica">Enfermedad Cronica <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la enfermedad cronica."></i></strong></label>
              <input type="text" name="enfermedadescronicas" class="form-control letras_latinas" id="cam_enfermedadcronica" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/enfermedadescronicas';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>