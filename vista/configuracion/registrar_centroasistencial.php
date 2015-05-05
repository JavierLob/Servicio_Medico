<h1 class="page-header">Registrar centro asistencial</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una centro asistencial en el sistema.
  </div>
<form role="form" class="form" action="../control/c_centroasistencial.php" method="POST" name="form_centroasistencial">
    <input type="hidden" value="registrar_centroasistencial" name="operacion" />
    <input type="hidden"  name="idcentroasistencial" id="cam_idtcentroasistencial"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_centroasistencial">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre del centro asistencial."></i></strong></label>
              <input type="text" name="nombrecentroasistencial" class="form-control letras_latinas" id="cam_centroasistencial" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/centroasistencial';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar" onclick="return validar();"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script>
  function validar()
  {
    var valor = $("#cam_centroasistencial").val();
    if(valor!='')
    {
        $.ajax({  
            type: "POST",  
            url: "../control/c_centroasistencial.php",  
            data: {nombrecentroasistencial:valor,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_centroasistencial").val('');
                        alert('Ya existe un centro asistencial con ese nombre');                              
                    }
                    else
                    {
                      document.form_centroasistencial.submit();
                    }
               
            }
        });
       }
    else
    {
      $("#cam_centroasistencial").focus();
      alert("Por favor ingrese un centro asistencial.");
    }
   }
</script>
