<?php
    require_once("../modelo/m_personal.php");
    $lobjpersonal=new clasepersonal;
    
    $id=(isset($_SESSION['idpersonal']))?$_SESSION['idpersonal']:"";

    $lobjpersonal->set_datos($id);
    $lapersonal=$lobjpersonal->consultar();
?>
<h1 class="page-header">Mi Perfil</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podrá ver los datos de su perfil y modificar algunos sí lo desea.
  </div>
<form role="form" class="form" action="../control/c_personal.php" method="POST" name="form_personal">
    <input type="hidden" value="editar_personal" name="operacion" />
    <input type="hidden"  name="idpersonal" id="cam_idpersonal" value="<?php print($lapersonal['idpersonal']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_nacionalidad">Nacionalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nacionalidad de la persona."></i></strong></label>
              <select name="nacionalidad" id="cam_nacionalidad" class="form-control">
                <option <?php $nacionalidad = ($lapersonal['nacionalidad']=='V') ? 'SELECTED' :""; print($nacionalidad); ?> value="V">Venezolano</option>
                <option <?php $nacionalidad = ($lapersonal['nacionalidad']=='E') ? 'SELECTED' :""; print($nacionalidad); ?>  value="E">Extranjero</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_cedulaopasaporte">Cédula <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Cédula de la persona."></i></strong></label>
              <input type="text" name="cedulaopasaporte" maxlength="11" value="<?php print($lapersonal['cedulaopasaporte']); ?>" class="form-control solo-numeros" id="cam_cedulaopasaporte" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primernombre">Primer Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Primer Nombre de la persona."></i></strong></label>
              <input type="text" name="primernombre" maxlength="455" value="<?php print($lapersonal['primernombre']); ?>" class="form-control letras_latinas" id="cam_primernombre" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundonombre">Segundo Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Segundo Nombre de la persona."></i></strong></label>
              <input type="text" name="segundonombre" maxlength="45" value="<?php print($lapersonal['segundonombre']); ?>" class="form-control letras_latinas" id="cam_segundonombre" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primerapellido">Primer Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Primer Apellido de la persona."></i></strong></label>
              <input type="text" name="primerapellido" maxlength="45" value="<?php print($lapersonal['primerapellido']); ?>" class="form-control letras_latinas" id="cam_primerapellido" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundoapellido">Segundo Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Segundo Apellido de la persona."></i></strong></label>
              <input type="text" name="segundoapellido" maxlength="45" value="<?php print($lapersonal['segundoapellido']); ?>" class="form-control letras_latinas" id="cam_segundoapellido" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_direccion">Dirección <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dirección de la persona."></i></strong></label>
              <textarea name="direccion" maxlength="1000" class="form-control letras_numeros" id="cam_direccion" ><?php print($lapersonal['direccion']); ?></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_sexo">Sexo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Sexo de la persona."></i></strong></label>
              <select name="sexo" id="cam_sexo" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_telefono">Teléfono Fijo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Teléfono Fijo de la persona."></i></strong></label>
              <input type="text" name="telefono" maxlength="15" value="<?php print($lapersonal['telefono']); ?>" class="form-control solo-numeros" id="cam_telefono" >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_celular">Teléfono Movil <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Teléfono Movil de la persona."></i></strong></label>
              <input type="text" name="celular" maxlength="15" value="<?php print($lapersonal['celular']); ?>" class="form-control solo-numeros" id="cam_celular" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_observacion">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Observación de la persona."></i></strong></label>
              <textarea name="observacion" maxlength="1000" class="form-control letras_numeros" id="cam_observacion" ><?php print($lapersonal['observacion']); ?></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idttipopersonal">Tipo personal <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo personal."></i></strong></label>
              <input type="hidden" name="idttipopersonal" value="<?php echo $lapersonal['ttipopersonal_idtipo_personal'];?>">
              <input type="text" value="<?php print($lapersonal['tipopersonal']); ?>" class="form-control" disabled>         
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idttipopersonal">Rol <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Rol de la persona en el sistema."></i></strong></label>
              <input type="hidden" name="idrol" value="<?php echo $lapersonal['trol_idrol'];?>">
              <input type="text" value="<?php print($lapersonal['nombrerol']); ?>" class="form-control" disabled>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/personal';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
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