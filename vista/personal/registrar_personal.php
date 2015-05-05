<h1 class="page-header">Registrar personal</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un personal en el sistema.
  </div>
<form role="form" class="form" action="../control/c_personal.php" method="POST" name="form_personal">
    <input type="hidden" value="registrar_personal" name="operacion" />
    <input type="hidden"  name="idpersonal" id="cam_idpersonal"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_nacionalidad">Nacionalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nacionalidad de la persona."></i></strong></label>
              <select name="nacionalidad" id="cam_nacionalidad" class="form-control">
                <option value="V">Venezolano</option>
                <option value="E">Extranjero</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_cedulaopasaporte">Cédula <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Cédula de la persona."></i></strong></label>
              <input type="text" name="cedulaopasaporte" maxlength="11" class="form-control solo-numeros" id="cam_cedulaopasaporte" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primernombre">Primer Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Primer Nombre de la persona."></i></strong></label>
              <input type="text" name="primernombre" maxlength="455" class="form-control letras_latinas" id="cam_primernombre" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundonombre">Segundo Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Segundo Nombre de la persona."></i></strong></label>
              <input type="text" name="segundonombre" maxlength="45" class="form-control letras_latinas" id="cam_segundonombre" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primerapellido">Primer Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Primer Apellido de la persona."></i></strong></label>
              <input type="text" name="primerapellido" maxlength="45" class="form-control letras_latinas" id="cam_primerapellido" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundoapellido">Segundo Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Segundo Apellido de la persona."></i></strong></label>
              <input type="text" name="segundoapellido" maxlength="45" class="form-control letras_latinas" id="cam_segundoapellido" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_direccion">Dirección <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dirección de la persona."></i></strong></label>
              <textarea name="direccion" maxlength="1000" class="form-control letras_numeros" id="cam_direccion" ></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_sexo">Sexo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Sexo de la persona."></i></strong></label>
              <select name="sexo" id="cam_sexo" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_telefono">Teléfono Fijo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Teléfono Fijo de la persona."></i></strong></label>
              <input type="text" name="telefono" maxlength="15" class="form-control solo-numeros" id="cam_telefono" >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_celular">Teléfono Movil <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Teléfono Movil de la persona."></i></strong></label>
              <input type="text" name="celular" maxlength="15" class="form-control solo-numeros" id="cam_celular" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_observacion">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Observación de la persona."></i></strong></label>
              <textarea name="observacion" maxlength="1000" class="form-control letras_numeros" id="cam_observacion" ></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idttipopersonal">Tipo personal <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo personal."></i></strong></label>
              <select name="idttipopersonal" class="form-control" id="cam_idttipopersonal" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_tipo_personal.php');
                    $lobjTipopersonal= new claseTipopersonal;
                    $laTipopersonal=$lobjTipopersonal->listar();
                    for ($i=0; $i <count($laTipopersonal) ; $i++) { 
                      echo '<option value="'.$laTipopersonal[$i]['idtipopersonal'].'">'.$laTipopersonal[$i]['tipopersonal'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idttipopersonal">Rol <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Rol de la persona en el sistema."></i></strong></label>
              <select name="idrol" class="form-control" id="cam_idrol" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_rol.php');
                    $lobjRol= new clsRol;
                    $laRol=$lobjRol->consultar_roles();
                    for ($i=0; $i <count($laRol) ; $i++) { 
                      echo '<option value="'.$laRol[$i][0].'">'.$laRol[$i][1].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=personal/personal';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>

<script>
    
$("#cam_estado").change(function() { 

    var valor = $("#cam_estado").val();

    $.ajax({  
        type: "POST",  
        url: "../control/c_municipio.php",  
        data: {idestado:valor,operacion:"consultar_municipios"},  
        success: function(msg){
            $("#cam_municipio").html(msg);                       
        }
    });
});

$("#cam_municipio").change(function() { 

    var valor = $("#cam_municipio").val();

    $.ajax({  
        type: "POST",  
        url: "../control/c_parroquia.php",  
        data: {idtmunicipio:valor,operacion:"consultar_parroquias"},  
        success: function(msg){
                    $("#status_mun").hide();
                    $("#btn_enviar").prop( "disabled", false );
                    $("#cam_idparroquia").html(msg);                       
        }
    });
});
</script>