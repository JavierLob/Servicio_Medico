<h1 class="page-header">Registrar estado</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un estado en el sistema.
  </div>
<form role="form" class="form" action="../control/c_estado.php" method="POST" name="form_estado">
    <input type="hidden" value="registrar_estado" name="operacion" />
    <input type="hidden"  name="idestado" id="cam_idestado"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_estado">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del estado."></i></strong></label>
              <input type="text" name="estado" class="form-control letras_latinas" id="cam_estado" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/estado';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script>
  function validar()
  {
    var valor = $("#cam_estado").val();
   
        $.ajax({  
            type: "POST",  
            url: "../control/c_estado.php",  
            data: {estado:valor,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_estado").val('');
                        alert('Ya existe un estado con ese nombre.');                              
                    }
                    else
                    {
                      document.form_estado.submit();
                    }
               
            }
        });
   }
</script>
