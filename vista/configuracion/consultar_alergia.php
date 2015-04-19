<?php
    require_once("../modelo/m_alergia.php");
    $lobjAlergia=new claseAlergia;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjAlergia->set_datos($id);
    $laAlergia=$lobjAlergia->consultar();
?>
<h1 class="page-header">Consultar Alergia</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar un alergia en el sistema.
  </div>
<form role="form" class="form" action="../control/c_alergia.php" method="POST" name="form_alergia">
    <input type="hidden" value="editar_alergia" name="operacion" />
    <input type="hidden"  name="idalergia" id="cam_idalergia" value="<?php print($laAlergia['idalergia']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_etnia">Alergia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la alergia."></i></strong></label>
              <input type="text" name="nombreale" class="form-control letras_latinas" id="cam_nombreale" value="<?php print($laAlergia['alergia']); ?>" required>
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
</script>