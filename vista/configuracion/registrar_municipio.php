<h1 class="page-header">Registrar municipio</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un municipio en el sistema.
  </div>
<form role="form" class="form" action="../control/c_municipio.php" method="POST" name="form_municipio">
    <input type="hidden" value="registrar_municipio" name="operacion" />
    <input type="hidden"  name="idtmunicipio" id="cam_idtmunicipio"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_municipio">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del municipio."></i></strong></label>
              <input type="text" name="municipio" class="form-control letras_latinas" id="cam_municipio" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_municipio">Estado <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Estado al cual pertenece el municipio."></i></strong></label>
              <select name="idestado" class="form-control" id="cam_idestado" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_estado.php');
                    $lobjEstado= new claseEstado;
                    $laEstados=$lobjEstado->listar();
                    for ($i=0; $i <count($laEstados) ; $i++) { 
                      echo '<option value="'.$laEstados[$i]['idestado'].'">'.$laEstados[$i]['estado'].'</option>';                    
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
        <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script>
  function validar()
  {
    var valor = $("#cam_municipio").val();
    var estado = $("#cam_idestado").val();
   
        $.ajax({  
            type: "POST",  
            url: "../control/c_municipio.php",  
            data: {municipio:valor,idestado:estado,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_idestado").val('');
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
