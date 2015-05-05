<h1 class="page-header">Registrar Alergia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las alergias en el sistema.
  </div>
<form role="form" class="form" action="../control/c_alergia.php" method="POST" name="form_alergia">
    <input type="hidden" value="registrar_alergia" name="operacion" />
    <input type="hidden"  name="idalergia" id="cam_idalergia"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_alergia">alergia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la alergia."></i></strong></label>
              <input type="text" name="nombreale" class="form-control letras_latinas" id="cam_nombreale" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/alergia';"><i class="fa fa-chevron-left"></i> Regresar</button>
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
    var valor = $("#cam_nombreale").val();
    if(valor!='')
    {
        $.ajax({  
            type: "POST",  
            url: "../control/c_alergia.php",  
            data: {nombreale:valor,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_nombreale").val('');
                        alert('Ya existe una alergia con ese nombre.');                              
                    }
                    else
                    {
                      document.form_alergia.submit();
                    }
               
            }
        });
    }
    else
    {
      $("#cam_nombreale").focus();
      alert("Por favor ingrese una alergia.");
    }
   }
</script>