<?php
    require_once("../modelo/m_laboratorio.php");
    $lobjLaboratorio=new claseLaboratorio;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjLaboratorio->set_datos($id,'','');
    $laLaboratorio=$lobjLaboratorio->consultar();
?>
<h1 class="page-header">Consultar laboratorio</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar un tipo de examen en el sistema.
  </div>
<form role="form" class="form" action="../control/c_laboratorio.php" method="POST" name="form_laboratorio">
    <input type="hidden" value="editar_laboratorio" name="operacion" />
    <input type="hidden"  name="idtlaboratorio" id="cam_idtlaboratorio" value="<?php echo $laLaboratorio['idtlaboratorio'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del laboratorio."></i></strong></label>
              <input type="text" name="laboratorio" class="form-control letras_latinas" id="cam_laboratorio" value="<?php echo $laLaboratorio['laboratorio'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=laboratorio';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>