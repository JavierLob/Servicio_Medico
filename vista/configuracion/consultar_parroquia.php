<?php
    require_once("../modelo/m_parroquia.php");
    $lobjParroquia=new claseParroquia;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjParroquia->set_datos($id,'','');
    $laParroquia=$lobjParroquia->consultar();
?>
<h1 class="page-header">Consultar parroquia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar un parroquia en el sistema.
  </div>
<form role="form" class="form" action="../control/c_parroquia.php" method="POST" name="form_parroquia">
    <input type="hidden" value="editar_parroquia" name="operacion" />
    <input type="hidden"  name="idtparroquia" id="cam_idtparroquia" value="<?php echo $laParroquia['idtparroquia'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la parroquia."></i></strong></label>
              <input type="text" name="parroquia" class="form-control letras_latinas" id="cam_parroquia" value="<?php echo $laParroquia['parroquia'];?>" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_parroquia">Municipio <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la parroquia."></i></strong></label>
              <select name="idestado" class="form-control" id="camidestado" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_municipio.php');
                    $lobjMunicipio= new claseMunicipio;
                    $laMunicipios=$lobjMunicipio->listar();
                    for ($i=0; $i <count($laMunicipios) ; $i++) { 
                      $selected=($laMunicipios[$i]['idtmunicipio']==$laParroquia['idtmunicipio'])?'selected':'';
                      echo '<option value="'.$laMunicipios[$i]['idestado'].'" '.$selected.'>'.$laMunicipios[$i]['estado'].'</option>';
                    }
                  ?>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/parroquia';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>