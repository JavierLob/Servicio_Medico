<?php
    require_once("../modelo/m_paciente.php");
    $lobjPaciente=new clasePaciente;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjPaciente->set_datos($id);
    $laPaciente=$lobjPaciente->consultar();
?>
<h1 class="page-header">Consultar paciente</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un paciente en el sistema.
  </div>
<form role="form" class="form" action="../control/c_paciente.php" method="POST" name="form_paciente">
    <input type="hidden" value="editar_paciente" name="operacion" />
    <input type="hidden"  name="idpaciente" id="cam_idpaciente" value="<?php print($laPaciente['idpaciente']); ?>"/>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
              <label for="cam_numerohistoria">Nro. Historia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input readOnly value="00-000<?php print($laPaciente['idpaciente']); ?>" type="text" name="numerohistoria" maxlength="11" class="form-control solo-numeros" id="cam_numerohistoria" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_nacionalidad">Nacionalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <select name="nacionalidad" id="cam_nacionalidad" class="form-control">
                <option <?php $nacionalidad = ($laPaciente['nacionalidad']=='V') ? 'SELECTED' :""; print($nacionalidad); ?> value="V">Venezolano</option>
                <option <?php $nacionalidad = ($laPaciente['nacionalidad']=='E') ? 'SELECTED' :""; print($nacionalidad); ?>  value="E">Extranjero</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_cedulaopasaporte">Cédula <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="cedulaopasaporte" maxlength="11" value="<?php print($laPaciente['cedulaopasaporte']); ?>" class="form-control solo-numeros" id="cam_cedulaopasaporte" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primernombre">Primer Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="primernombre" maxlength="455" value="<?php print($laPaciente['primernombre']); ?>" class="form-control letras_latinas" id="cam_primernombre" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundonombre">Segundo Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="segundonombre" maxlength="45" value="<?php print($laPaciente['segundonombre']); ?>" class="form-control letras_latinas" id="cam_segundonombre" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primerapellido">Primer Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="primerapellido" maxlength="45" value="<?php print($laPaciente['primerapellido']); ?>" class="form-control letras_latinas" id="cam_primerapellido" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundoapellido">Segundo Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="segundoapellido" maxlength="45" value="<?php print($laPaciente['segundoapellido']); ?>" class="form-control letras_latinas" id="cam_segundoapellido" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_direccion">Dirección <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <textarea name="direccion" maxlength="1000" class="form-control letras_numeros" id="cam_direccion" required><?php print($laPaciente['direccion']); ?></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_sexo">Sexo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <select name="sexo" id="cam_sexo" class="form-control">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_telefono">Teléfono Fijo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="telefono" maxlength="15" value="<?php print($laPaciente['telefono']); ?>" class="form-control solo-numeros" id="cam_telefono" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
              <label for="cam_celular">Teléfono Movil <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input type="text" name="celular" maxlength="15" value="<?php print($laPaciente['celular']); ?>" class="form-control solo-numeros" id="cam_celular" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_antecedentepersonal">Antecedentes Personales <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <textarea name="antecedentepersonal" maxlength="1000"  class="form-control letras_numeros" id="cam_antecedentepersonal" required><?php print($laPaciente['antecedentepersonal']); ?></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_antecedentefamiliar">Antecedentes Familiares <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <textarea name="antecedentefamiliar" maxlength="1000" class="form-control letras_numeros" id="cam_antecedentefamiliar" required><?php print($laPaciente['antecedentefamiliar']); ?></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_alergia">Alergias <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <textarea name="alergia" maxlength="1000" class="form-control letras_numeros" id="cam_alergia" required><?php print($laPaciente['alergia']); ?></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_observacion">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <textarea name="observacion" maxlength="1000" class="form-control letras_numeros" id="cam_observacion" required><?php print($laPaciente['observacion']); ?></textarea>
            </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label>Estado <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
                <select name="estado" id="cam_estado" class="form-control">
                    <option value="">-</option>
                    <?php
                    require_once('../modelo/m_estado.php');
                    $lobjEstado=new claseEstado;
                    $row_estado=$lobjEstado->listar();
                    for ($i=0; $i <count($row_estado); $i++) 
                    {
                        $selected = ($laPaciente['idestado']==$row_estado[$i]['idestado']) ? 'SELECTED' :"";
                        echo '<option '.$selected.' value="'.$row_estado[$i]['idestado'].'">'.utf8_encode($row_estado[$i]['estado']).'</option>';
                    }
                   ?>
                </select>
                <div style="float:right" id="status_es"></div>
              </div>
        </div>
        <div class="col-lg-6">
              <div class="form-group">
                <label>Municipio <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
                <select name="municipio" id="cam_municipio" class="form-control">
                    <option value="">-</option>
                    <?php
                        require_once('../modelo/m_municipio.php');
                        $lobjMunicipio=new claseMunicipio;
                        $row_municipio=$lobjMunicipio->listar();
                        for ($i=0; $i <count($row_municipio); $i++) 
                        {
                            $selected = ($laPaciente['idtmunicipio']==$row_municipio[$i]['idtmunicipio']) ? 'SELECTED' :"";
                            echo '<option '.$selected.' value="'.$row_municipio[$i]['idtmunicipio'].'">'.$row_municipio[$i]['municipio'].'</option>';
                        }
                   ?>
                </select>
                <div style="float:right" id="status_mun"></div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idparroquia">Parroquia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
              <select name="idparroquia" class="form-control" id="cam_idparroquia" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_parroquia.php');
                    $lobjParroquia= new claseparroquia;
                    $laParroquias=$lobjParroquia->listar();
                    for ($i=0; $i <count($laParroquias) ; $i++) { 
                      $selected = ($laPaciente['idparroquia']==$laParroquias[$i]['idparroquia']) ? 'SELECTED' :"";
                      echo '<option '.$selected.' value="'.$laParroquias[$i]['idparroquia'].'">'.$laParroquias[$i]['parroquia'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idtsede">Sede <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
              <select name="idtsede" class="form-control" id="cam_idtsede" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_sede.php');
                    $lobjSede= new claseSede;
                    $lasedes=$lobjSede->listar();
                    for ($i=0; $i <count($lasedes) ; $i++) { 
                      $selected = ($laPaciente['idtsede']==$lasedes[$i]['idtsede']) ? 'SELECTED' :"";
                      echo '<option '.$selected.' value="'.$lasedes[$i]['idtsede'].'">'.$lasedes[$i]['sede'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idtetnia">Etnia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
              <select name="idtetnia" class="form-control" id="cam_idtetnia" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_etnia.php');
                    $lobjEtnia= new claseEtnia;
                    $laEtnia=$lobjEtnia->listar();
                    for ($i=0; $i <count($laEtnia) ; $i++) { 
                      $selected = ($laPaciente['idtetnia']==$laEtnia[$i]['idtetnia']) ? 'SELECTED' :"";
                      echo '<option '.$selected.' value="'.$laEtnia[$i]['idtetnia'].'">'.$laEtnia[$i]['etnia'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idttipopaciente">Tipo Paciente <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
              <select name="idttipopaciente" class="form-control" id="cam_idttipopaciente" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_tipo_paciente.php');
                    $lobjTipoPaciente= new claseTipoPaciente;
                    $laTipoPaciente=$lobjTipoPaciente->listar();
                    for ($i=0; $i <count($laTipoPaciente) ; $i++) { 
                      $selected = ($laPaciente['idttipopaciente']==$laTipoPaciente[$i]['idttipopaciente']) ? 'SELECTED' :"";
                      echo '<option '.$selected.' value="'.$laTipoPaciente[$i]['idttipopaciente'].'">'.$laTipoPaciente[$i]['tipopaciente'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_tcarrera_idtcarrera">Carrera <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
              <select name="tcarrera_idtcarrera" class="form-control" id="cam_tcarrera_idtcarrera" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_carrera.php');
                    $lobjCarrera= new claseCarrera;
                    $laCarrera=$lobjCarrera->listar();
                    for ($i=0; $i <count($laCarrera) ; $i++) { 
                      $selected = ($laPaciente['tcarrera_idtcarrera']==$laCarrera[$i]['idtcarrera']) ? 'SELECTED' :"";
                      echo '<option '.$selected.' value="'.$laCarrera[$i]['idtcarrera'].'">'.$laCarrera[$i]['carrera'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_tdepartamento_iddepartamento">Departamento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece la paciente."></i></strong></label>
              <select name="tdepartamento_iddepartamento" class="form-control" id="cam_tdepartamento_iddepartamento" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_departamento.php');
                    $lobjDepartamento= new claseDepartamento;
                    $laDepartamento=$lobjDepartamento->listar();
                    for ($i=0; $i <count($laDepartamento) ; $i++) { 
                      $selected = ($laPaciente['tdepartamento_iddepartamento']==$laDepartamento[$i]['iddepartamento']) ? 'SELECTED' :"";
                      echo '<option '.$selected.' value="'.$laDepartamento[$i]['iddepartamento'].'">'.$laDepartamento[$i]['departamento'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=configuracion/paciente';"><i class="fa fa-chevron-left"></i> Regresar</button>
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