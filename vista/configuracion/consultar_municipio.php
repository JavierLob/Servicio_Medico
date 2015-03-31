<?php
    require_once("../modelo/m_municipio.php");
    $lobjMunicipio=new claseMunicipio;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjMunicipio->set_datos($id,'','');
    $laMunicipio=$lobjMunicipio->consultar();
?>
<h1 class="page-header">Consultar municipio</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar/modificar un municipio en el sistema.
  </div>
<form role="form" class="form" action="../control/c_municipio.php" method="POST" name="form_municipio">
    <input type="hidden" value="editar_municipio" name="operacion" />
    <input type="hidden"  name="idtmunicipio" id="cam_idtmunicipio" value="<?php echo $laMunicipio['idtmunicipio'];?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_codigoasi">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del municipio."></i></strong></label>
              <input type="text" name="municipio" class="form-control letras_latinas" id="cam_municipio" value="<?php echo $laMunicipio['municipio'];?>" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_municipio">Estado <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Estado al cual pertenece el municipio."></i></strong></label>
              <select name="idestado" class="form-control" id="camidestado" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_estado.php');
                    $lobjEstado= new claseEstado;
                    $laEstados=$lobjEstado->listar();
                    for ($i=0; $i <count($laEstados) ; $i++) { 
                      $selected=($laEstados[$i]['idestado']==$laMunicipio['idestado'])?'selected':'';
                      echo '<option value="'.$laEstados[$i]['idestado'].'" '.$selected.'>'.$laEstados[$i]['estado'].'</option>';
                    }
                  ?>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/municipio';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
      </div>
    </div>
</form>