<h1 class="page-header">Registrar tipo paciente</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un tipo de paciente en el sistema.
  </div>
<form role="form" class="form" action="../control/c_tipo_paciente.php" method="POST" name="form_tipo_paciente">
    <input type="hidden" value="registrar_tipo_paciente" name="operacion" />
    <input type="hidden"  name="idttipopaciente" id="cam_idttipopaciente"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Tipo Paciente <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del tipo de paciente."></i></strong></label>
              <input type="text" name="tipopaciente" class="form-control letras_latinas" id="cam_tipopaciente" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/sede';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>
<script>
  function validar()
  {
    var valor = $("#cam_tipopaciente").val();
   
        $.ajax({  
            type: "POST",  
            url: "../control/c_tipo_paciente.php",  
            data: {nombreale:valor,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_tipopaciente").val('');
                        alert('Ya existe una tipo paciente con ese nombre.');                              
                    }
                    else
                    {
                      document.form_tipo_paciente.submit();
                    }
               
            }
        });
   }
</script>