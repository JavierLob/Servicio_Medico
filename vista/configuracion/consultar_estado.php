<?php
    require_once("../modelo/m_estado.php");
    $lobjEstado=new claseEstado;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjEstado->set_datos($id,'','');
    $laEstado=$lobjEstado->consultar();
?>
<h1 class="page-header">Consultar estado</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar una estado en el sistema.
  </div>
<form role="form" class="form" action="../control/c_estado.php" method="POST" name="form_estado">
    <input type="hidden" value="editar_estado" name="operacion" />
    <input type="hidden"  name="idestado" id="cam_idestado" value="<?php echo $laEstado['idestado'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del estado."></i></strong></label>
              <input type="text" name="estado" class="form-control letras_latinas" id="cam_estado" value="<?php echo $laEstado['estado'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/estado';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>