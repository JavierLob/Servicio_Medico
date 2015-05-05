<h1 class="page-header">Registrar Carrera</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las carreras en el sistema.
  </div>
<form role="form" class="form" action="../control/c_consulta.php" method="POST" name="form_carrera">
    <input type="hidden" value="nuevo_semestre" name="operacion" />
    <div class="row" style="min-height: 120px;">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_carrera">Comenzar nuevo semestre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Al hacer clic en el botón aceptar podrá comenzar un nuevo semetre, lo cual le permitirá reestablecer la cantidad de examenes y referencias permitidas por paciente, y activar a los pacientes suspendidos."></i></strong></label>
                <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/carrera';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>
<script>
  function validar()
  {
    if(confirm("¿Esta seguro que desea comenzar un nuevo semestre?"))
    {
      return true;
    }
    else
    {
      return false;
    }
   }
</script>