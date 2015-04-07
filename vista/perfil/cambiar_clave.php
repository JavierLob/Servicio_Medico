<form role="form" class="form" action="../control/c_personal.php" method="POST" name="form_cambiar_clave">
    <input type="hidden" value="cambiar_clave" name="operacion" />
    <input type="hidden"  name="usuario" id="cam_idpersonal" value="<?php print($_SESSION['usuario']); ?>"/>
    <div class="row">
      <h3>Cambiar clave</h3>
      <div class="alert alert-info" role="alert">
        <strong><i class="fa fa-info-circle"></i></strong> Aquí podrá cambiar su clave sí lo desea.
      </div>
      <div class="row">
        <div class="col-md-6">
              <div class="form-group">
                <label for="cam_clave_actual">Clave actual <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Ingrese la clave actual."></i></strong></label>
                <input type="password" name="clave_actual" minlength="6" maxlength="25" class="form-control" id="cam_clave_actual">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label for="cam_clave_nueva">Clave Nueva <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Ingrese la clave nueva."></i></strong></label>
                <input type="password" name="clave_nueva" minlength="6" maxlength="25" class="form-control password_completa" id="cam_clave_nueva">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                <label for="cam_repita_clave_nueva">Repetir Clave nueva <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Repita la clave nueva."></i></strong></label>
                <input type="password" name="repita_clave_nueva" minlength="6" maxlength="25" class="form-control password_completa" id="cam_repita_clave_nueva">
              </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return enviar();"><i class="fa fa-check" ></i> Cambiar Clave</button>
      </div>
    </div>
</form>

<script>
function enviar()
{

    var clave_anterior =  <?php print($_SESSION['clave']);?>;
    var clave_actual = document.getElementById('cam_clave_actual').value;
    var clave_nueva = document.getElementById('cam_clave_nueva').value;
    var clave_nueva_repetir = document.getElementById('cam_repita_clave_nueva').value;

    if(clave_actual!=clave_anterior)
    {
        alert('La clave actual no coincide con su clave.');
        return false;
    }
    else if(clave_nueva!=clave_nueva_repetir)
    {
        alert('La nueva clave no coincide con su repetición');
        return false;
    }
    else
    {
        return true;
    }
}
</script>
</script>