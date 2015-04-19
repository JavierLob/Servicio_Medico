<h1 class="page-header">Registrar sede</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una sede en el sistema.
  </div>
<form role="form" class="form" action="../control/c_sede.php" method="POST" name="form_sede">
    <input type="hidden" value="registrar_sede" name="operacion" />
    <input type="hidden"  name="idtsede" id="cam_idtsede"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la sede."></i></strong></label>
              <input type="text" name="sede" class="form-control letras_latinas" id="cam_sede" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Dirección <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dirección de la sede."></i></strong></label>
              <input type="text" name="direccionsede" class="form-control letras_latinas" id="cam_direccionsede" required>
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
    var valor = $("#cam_sede").val();
   
        $.ajax({  
            type: "POST",  
            url: "../control/c_sede.php",  
            data: {sede:valor,operacion:"validar"},  
            success: function(msg){
                    if(msg=='1')
                    {
                        $("#cam_sede").val('');
                        alert('Ya existe una sede con ese nombre.');                              
                    }
                    else
                    {
                      document.form_sede.submit();
                    }
               
            }
        });
   }
</script>