<h1 class="page-header">Registrar Laboratorio</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un laboratorio en el sistema.
  </div>
<form role="form" class="form" action="../control/c_laboratorio.php" method="POST" name="form_laboratorio">
    <input type="hidden" value="registrar_laboratorio" name="operacion" />
    <input type="hidden"  name="idtlaboratorio" id="cam_idtlaboratorio"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_laboratorio">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del laboratorio"></i></strong></label>
              <input type="text" name="laboratorio" class="form-control letras_latinas" id="cam_laboratorio" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/laboratorio';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script>
  function validar()
  {
    var valor = $("#cam_laboratorio").val();
   
        $.ajax({  
            type: "POST",  
            url: "../control/c_laboratorio.php",  
            data: {laboratorio:valor,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_laboratorio").val('');
                        alert('Ya existe una laboratorio con ese nombre.');                              
                    }
                    else
                    {
                      document.form_laboratorio.submit();
                    }
               
            }
        });
   }
</script>