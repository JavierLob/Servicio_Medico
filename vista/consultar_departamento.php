<?php
    require_once("../modelo/m_departamento.php");
    $lobjDepartamento=new claseDepartamento;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjDepartamento->set_datos($id);
    $laDepartamento=$lobjDepartamento->consultar();
?>
<h1 class="page-header">Consultar departamento</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar un departamento en el sistema.
  </div>
<form role="form" class="form" action="../control/c_departamento.php" method="POST" name="form_departamento">
    <input type="hidden" value="editar_departamento" name="operacion" />
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento" value="<?php print($laDepartamento['iddepartamento']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Departamento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del departamento."></i></strong></label>
              <input type="text" name="departamento" class="form-control letras_latinas" id="cam_departamento" value="<?php print($laDepartamento['departamento']); ?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=departamento';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>