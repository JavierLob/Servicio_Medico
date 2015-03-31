<?php
    require_once("../modelo/m_tipoexamen.php");
    $lobjTipoexamen=new claseTipoexamen;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjTipoexamen->set_datos($id,'','');
    $laTipoexamen=$lobjTipoexamen->consultar();
?>
<h1 class="page-header">Consultar tipo de examen</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar un tipo de examen en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tipoexamen.php" method="POST" name="form_tipoexamen">
    <input type="hidden" value="editar_tipoexamen" name="operacion" />
    <input type="hidden"  name="idttipoexamen" id="cam_idttipoexamen" value="<?php echo $laTipoexamen['idttipoexamen'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del tipo de examen."></i></strong></label>
              <input type="text" name="tipoexamen" class="form-control letras_latinas" id="cam_tipoexamen" value="<?php echo $laTipoexamen['tipoexamen'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/tipoexamen';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>