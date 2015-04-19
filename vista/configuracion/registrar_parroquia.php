<h1 class="page-header">Registrar parroquia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una parroquia en el sistema.
  </div>
<form role="form" class="form" action="../control/c_parroquia.php" method="POST" name="form_parroquia">
    <input type="hidden" value="registrar_parroquia" name="operacion" />
    <input type="hidden"  name="idparroquia" id="cam_idparroquia"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_parroquia">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la parroquia."></i></strong></label>
              <input type="text" name="parroquia" class="form-control letras_latinas" id="cam_parroquia" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_parroquia">Municipio <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la parroquia."></i></strong></label>
              <select name="idtmunicipio" class="form-control" id="cam_idtmunicipio" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_municipio.php');
                    $lobjMunicipio= new claseMunicipio;
                    $laMunicipios=$lobjMunicipio->listar();
                    for ($i=0; $i <count($laMunicipios) ; $i++) { 
                      echo '<option value="'.$laMunicipios[$i]['idtmunicipio'].'">'.$laMunicipios[$i]['municipio'].'</option>';                    
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
        <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script>
  function validar()
  {
    var valor = $("#cam_parroquia").val();
    var idtmunicipio = $("#cam_idtmunicipio").val();
   
        $.ajax({  
            type: "POST",  
            url: "../control/c_municipio.php",  
            data: {parroquia:valor,idtmunicipio:idtmunicipio,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_idtmunicipio").val('');
                        alert('Ya existe un municipio con ese nombre para el estado seleccionado.');                              
                    }
                    else
                    {
                      document.form_municipio.submit();
                    }
               
            }
        });
   }
</script>