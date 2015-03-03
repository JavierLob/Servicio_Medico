<?php
    require_once("../modelo/m_centroasistencial.php");
    $lobjCentroasistencial=new claseCentroasistencial;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjCentroasistencial->set_datos($id,'','');
    $laCentroasistencial=$lobjCentroasistencial->consultar();
?>
<h1 class="page-header">Consultar centro asistencial</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar un centro asistencial en el sistema.
  </div>
<form role="form" class="form" action="../control/c_centroasistencial.php" method="POST" name="form_centroasistencial">
    <input type="hidden" value="editar_centroasistencial" name="operacion" />
    <input type="hidden"  name="idtcentroasistencial" id="cam_idtcentroasistencial" value="<?php echo $laCentroasistencial['idtcentroasistencial'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la centro asistencial."></i></strong></label>
              <input type="text" name="nombrecentroasistencial" class="form-control letras_latinas" id="cam_nombrecentroasistencial" value="<?php echo $laCentroasistencial['nombrecentroasistencial'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=centroasistencial';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>