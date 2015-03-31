<h1 class="page-header">Registrar Carrera</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las carreras en el sistema.
  </div>
<form role="form" class="form" action="../control/c_carrera.php" method="POST" name="form_carrera">
    <input type="hidden" value="registrar_carrera" name="operacion" />
    <input type="hidden"  name="idtcarrera" id="cam_idcarrera"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_carrera">Carrera <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la carrera."></i></strong></label>
              <input type="text" name="carrera" class="form-control letras_latinas" id="cam_carrera" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/carrera';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>