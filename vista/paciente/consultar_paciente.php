<?php
    require_once("../modelo/m_paciente.php");
    $lobjPaciente=new clasePaciente;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjPaciente->set_datos($id);
    $laPaciente=$lobjPaciente->consultar();
    $laPacienteAlergia=$lobjPaciente->listar_alergia();
    $laPacienteDiscapacidad=$lobjPaciente->listar_discapacidad();
    $laPacienteEnfermedad=$lobjPaciente->listar_enfermedad();

    $alergico = ($laPacienteAlergia) ? 'SI' : 'NO';
    $discapacidad = ($laPacienteDiscapacidad) ? 'SI' : 'NO';
    $enfermedad = ($laPacienteEnfermedad) ? 'SI' : 'NO';
?>
<h1 class="page-header">Consultar paciente</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un paciente en el sistema.
  </div>
<form role="form" class="form" action="../control/c_paciente.php" method="POST" name="form_paciente">
    <input type="hidden" value="editar_paciente" name="operacion" />
    <input type="hidden"  name="idpaciente" id="cam_idpaciente" value="<?php print($laPaciente['idpaciente']); ?>"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_numerohistoria">Nro. Historia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
              <input readOnly value="00-000<?php print($laPaciente['idpaciente']); ?>" type="text" name="numerohistoria" maxlength="11" class="form-control solo-numeros" id="cam_numerohistoria" required>
            </div>
        </div>
        <div class="col-md-6">
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
              <label for="cam_documento">Documento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Documento presentado."></i></strong></label>
              <select name="documento" id="cam_documento" class="form-control">
                <option <?php $documento = ($laPaciente['documento']=='CEDULA') ? 'SELECTED' :""; print($documento); ?> value="CEDULA">Cédula</option>
                <option <?php $documento = ($laPaciente['documento']=='PASAPORTE') ? 'SELECTED' :""; print($documento); ?> value="PASAPORTE">Pasaporte</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_cedulaopasaporte">Cédula / Pasaporte <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nombre de la paciente."></i></strong></label>
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
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_modalidadpac">Modalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modalidad que estudia la paciente."></i></strong></label>
              <select name="modalidadpac" class="form-control" id="cam_modalidadpac" required>
                  <option value="">-</option>
                  <option value="TRIMESTRE">TRIMESTRE</option>
                  <option value="SEMESTRE">SEMESTRE</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_numeromodalidadpac">Nro. Modalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modalidad que estudia la paciente."></i></strong></label>
              <select name="numeromodalidadpac" class="form-control" id="cam_numeromodalidadpac" required>
                  <option value="">-</option>
                  <option  value="1" data-padre="TRIMESTRE">1</option>
                  <option  value="2" data-padre="TRIMESTRE">2</option>
                  <option  value="3" data-padre="TRIMESTRE">3</option>
                  <option  value="4" data-padre="TRIMESTRE">4</option>
                  <option  value="5" data-padre="TRIMESTRE">5</option>
                  <option  value="6" data-padre="TRIMESTRE">6</option>
                  <option  value="7" data-padre="TRIMESTRE">7</option>
                  <option  value="8" data-padre="TRIMESTRE">8</option>
                  <option  value="9" data-padre="TRIMESTRE">9</option>
                  <option  value="10" data-padre="TRIMESTRE">10</option>
                  <option  value="11" data-padre="TRIMESTRE">11</option>
                  <option  value="12" data-padre="TRIMESTRE">12</option>
                  <option value="1" data-padre="SEMESTRE">1</option>
                  <option value="2" data-padre="SEMESTRE">2</option>
                  <option value="3" data-padre="SEMESTRE">3</option>
                  <option value="4" data-padre="SEMESTRE">4</option>
                  <option value="5" data-padre="SEMESTRE">5</option>
                  <option value="6" data-padre="SEMESTRE">6</option>
                  <option value="7" data-padre="SEMESTRE">7</option>
                  <option value="8" data-padre="SEMESTRE">8</option>
              </select>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4">
         <label for="cam_alergico">¿Alergico? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione si es alergico o no."></i></strong></label>

            <select class="form-control" id="cam_alergico">
              <option value=""></option>
              <option <?php $selected = ($alergico=='NO') ? 'selected': ''; print($selected); ?> value="0">No</option>
              <option <?php $selected = ($alergico=='SI') ? 'selected': ''; print($selected); ?> value="1">Si</option>
            </select>

      </div>
      <div class="col-md-4">
         <label for="cam_consulta">¿Discapacidades? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione si padece de alguna discapacidad."></i></strong></label>

            <select class="form-control" id="cam_discapacidades">
              <option value=""></option>
              <option <?php $selected = ($discapacidad=='NO') ? 'selected': ''; print($selected); ?> value="0">No</option>
              <option <?php $selected = ($discapacidad=='SI') ? 'selected': ''; print($selected); ?> value="1">Si</option>
            </select>

      </div>
      <div class="col-md-4">
         <label for="cam_consulta">¿Enfermedad Crónica? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione si padece de alguna enfermedad cronica."></i></strong></label>

            <select class="form-control" id="cam_cronico">
              <option value=""></option>
              <option <?php $selected = ($enfermedad=='NO') ? 'selected': ''; print($selected); ?> value="0">No</option>
              <option <?php $selected = ($enfermedad=='SI') ? 'selected': ''; print($selected); ?> value="1">Si</option>
            </select>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3>Alergias</h3>
        <table class="table table-striped" id="alergia">
          <thead>
            <th>Seleccione</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_alergia()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_alergia">
          <?php
          require_once('../modelo/m_alergia.php');
          $lobAlergia=new claseAlergia;
          for($j=0;$j < count($laPacienteAlergia); $j++){
          ?>
            <tr>
              <td>
                <select class="form-control" name="idalergia[]" onchange="validar_repetido_alergia(this)" id="cam_idalergia<?php print($j);?>">
                  <option value=""></option>
                  <?php
                    $laalergias=$lobAlergia->listar();
                    for ($i=0;$i<count($laalergias);$i++) 
                    { 
                      $selected = ($laalergias[$i]['idalergia'] == $laPacienteAlergia[$j]['talergia_idalergia']) ? 'selected' : '';
                      echo '<option '.$selected.' value="'.$laalergias[$i]['idalergia'].'">'.$laalergias[$i]['nombreale'].'</option>';
                    }
                  ?>
                </select>
              </td>
              <td>
                <button class="btn btn-danger" type="button" onclick="quitar_alergia(this)"><i class="fa fa-minus"></i></button>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_alergia" value="<?php print(count($laPacienteAlergia));?>">
      </div>
      <div class="col-md-4">
        <h3>Discapacidades</h3>
        <table class="table table-striped" id="discapacidad">
          <thead>
            <th>Seleccione</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_discapacidad()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_discapacidad">
           <?php
            require_once('../modelo/m_discapacidad.php');
            $lobjDiscapacidad=new claseDiscapacidad;
            for($j=0;$j < count($laPacienteDiscapacidad); $j++){
            ?>
              <tr>
              <td>
                <select class="form-control" name="idtdiscapacidad[]" onchange="validar_repetido_discapacidad(this)" id="cam_discapacidad<?php print($j);?>">
                  <option value=""></option>
                  <?php
                    
                    $ladiscapacidad=$lobjDiscapacidad->listar();
                    for ($i=0;$i<count($ladiscapacidad);$i++) 
                    { 
                      $selected = ($ladiscapacidad[$i]['idtdiscapacidad'] == $laPacienteDiscapacidad[$j]['tdiscapacidad_idtdiscapacidad']) ? 'selected' : '';
                      echo '<option '.$selected.' value="'.$ladiscapacidad[$i]['idtdiscapacidad'].'">'.$ladiscapacidad[$i]['discapacidad'].'</option>';
                    }
                  ?>
                </select>
              </td>
              <td>
                <button class="btn btn-danger" type="button" onclick="quitar_discapacidad(this)"><i class="fa fa-minus"></i></button>
              </td>
            </tr>
          <?php } ?>
            
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_discapacidad" value="<?php print(count($laPacienteDiscapacidad));?>">
      </div>
      <div class="col-md-4">
        <h3>Enfermedades Cronicas</h3>
        <table class="table table-striped" id="enfermedad">
          <thead>
            <th>Seleccione</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_enfermedad()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_enfermedad">
          <?php
            require_once('../modelo/m_enfermedadescronicas.php');
            $lobjEnfermedad=new claseEnfermedadCronicas;
            for($j=0;$j < count($laPacienteEnfermedad); $j++){
            ?>
              <tr>
              <td>
                <select class="form-control" name="idtenfermedadescronicas[]" onchange="validar_repetido_enfermedad(this)" id="cam_enfermedad<?php print($j);?>">
                  <option value=""></option>
                  <?php
                    
                    $laenfermedadcronica=$lobjEnfermedad->listar();
                    for ($i=0;$i<count($laenfermedadcronica);$i++) 
                    { 
                      $selected = ($laenfermedadcronica[$i]['idtenfermedadescronicas'] == $laPacienteEnfermedad[$j]['tenfermedadescronicas_idtenfermedadescronicas']) ? 'selected' : '';
                      echo '<option '.$selected.' value="'.$laenfermedadcronica[$i]['idtenfermedadescronicas'].'">'.$laenfermedadcronica[$i]['enfermedadcronica'].'</option>';
                    }
                  ?>
                </select>
              </td>
              <td>
                <button class="btn btn-danger" type="button" onclick="quitar_enfermedad(this)"><i class="fa fa-minus"></i></button>
              </td>
            </tr>
          <?php } ?>
            
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_enfermedad" value="<?php print(count($laPacienteEnfermedad));?>">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=paciente/paciente';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>

<script>
    
$("#cam_alergico").change(function(){
    valor=$("#cam_alergico").val();
    if(valor=='1')
      $("#alergia").animate({ height: 'show', opacity: 'show' }, 'slow');
    if(valor=='0')
      $("#alergia").animate({ height: 'hide', opacity: 'hide' }, 'slow');
});
$("#cam_discapacidades").change(function(){
    valor=$("#cam_discapacidades").val();
    if(valor=='1')
      $("#discapacidad").animate({ height: 'show', opacity: 'show' }, 'slow');
    if(valor=='0')
      $("#discapacidad").animate({ height: 'hide', opacity: 'hide' }, 'slow');
});
$("#cam_cronico").change(function(){
    valor=$("#cam_cronico").val();
    if(valor=='1')
      $("#enfermedad").animate({ height: 'show', opacity: 'show' }, 'slow');
    if(valor=='0')
      $("#enfermedad").animate({ height: 'hide', opacity: 'hide' }, 'slow');
});
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

$("#cam_modalidadpac").val('<?php print($laPaciente["modalidadpac"]);?>');

$("#cam_numeromodalidadpac").val('');


$("#cam_modalidadpac").change(function(){
   seleccionar();
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

seleccionar = function()
{
  var modalidad = $("#cam_modalidadpac").val();
    $("#cam_numeromodalidadpac option").each(function(indice, elemento){
        if($(elemento).attr('data-padre') == modalidad)
            $(elemento).show();
        else
            $(elemento).hide();

        if(($(elemento).attr('data-padre') == modalidad) && ($(elemento).attr('value') == '<?php print($laPaciente["numeromodalidadpac"]);?>'))
            $(elemento).attr('selected', 'selected');
    });
}

seleccionar();


function agregar_alergia()
{
    cam_contador=document.getElementById("cam_contador_alergia");
    filas_alergia=document.getElementById("filas_alergia");
    contador=cam_contador.value;
    contador++;

    tr=document.createElement('tr');
    col1=document.createElement('td');
    col2=document.createElement('td');
    var select= document.createElement('select');
     var select2= document.createElement('select');
    select.setAttribute('class','form-control');
    select.setAttribute('onchange','validar_repetido_alergia(this)');
    select.setAttribute('name','idalergia[]');
    select.setAttribute('id','cam_idalergia'+contador);
      var url="../control/c_alergia.php";
     $.ajax({   
          type: "POST",
          url:url,
          data:{operacion:'consultar_alergia'},
          success: function(datos){
              select.innerHTML=datos;   
           }
      });
    col2.innerHTML='<button class="btn btn-danger" onclick="quitar_alergia(this)"><i class="fa fa-minus"></i></button>';

      col1.appendChild(select);
      tr.appendChild(col1);
      tr.appendChild(col2);
      filas_alergia.appendChild(tr);
      cam_contador.value=contador;

}
function quitar_alergia(e)
{

    var filas = document.getElementById("filas_alergia");          
    var td = e.parentNode;
    var tr = td.parentNode;
    filas.removeChild(tr);
}


function agregar_discapacidad()
{
    cam_contador=document.getElementById("cam_contador_discapacidad");
    filas_discapacidad=document.getElementById("filas_discapacidad");
    contador=cam_contador.value;
    contador++;

    tr=document.createElement('tr');
    col1=document.createElement('td');
    col2=document.createElement('td');
    var select= document.createElement('select');
     var select2= document.createElement('select');
    select.setAttribute('class','form-control');
    select.setAttribute('onchange','validar_repetido_discapacidad(this)');
    select.setAttribute('name','idtdiscapacidad[]');
    select.setAttribute('id','cam_discapacidad'+contador);
      var url="../control/c_discapacidad.php";
     $.ajax({   
          type: "POST",
          url:url,
          data:{operacion:'consultar_discapacidad'},
          success: function(datos){
              select.innerHTML=datos;   
           }
      });
    col2.innerHTML='<button class="btn btn-danger" onclick="quitar_discapacidad(this)"><i class="fa fa-minus"></i></button>';

      col1.appendChild(select);
      tr.appendChild(col1);
      tr.appendChild(col2);
      filas_discapacidad.appendChild(tr);
      cam_contador.value=contador;

}
function quitar_discapacidad(e)
{

    var filas = document.getElementById("filas_discapacidad");          
    var td = e.parentNode;
    var tr = td.parentNode;
    filas.removeChild(tr);
}


function agregar_enfermedad()
{
    cam_contador=document.getElementById("cam_contador_enfermedad");
    filas_enfermedad=document.getElementById("filas_enfermedad");
    contador=cam_contador.value;
    contador++;

    tr=document.createElement('tr');
    col1=document.createElement('td');
    col2=document.createElement('td');
    var select= document.createElement('select');
     var select2= document.createElement('select');
    select.setAttribute('class','form-control');
    select.setAttribute('onchange','validar_repetido_enfermedad(this)');
    select.setAttribute('name','idtenfermedadescronicas[]');
    select.setAttribute('id','cam_idtenfermedadescronicas'+contador);
      var url="../control/c_enfermedadescronicas.php";
     $.ajax({   
          type: "POST",
          url:url,
          data:{operacion:'consultar_enfermedadescronicas'},
          success: function(datos){
              select.innerHTML=datos;   
           }
      });
    col2.innerHTML='<button class="btn btn-danger" onclick="quitar_enfermedad(this)"><i class="fa fa-minus"></i></button>';

      col1.appendChild(select);
      tr.appendChild(col1);
      tr.appendChild(col2);
      filas_enfermedad.appendChild(tr);
      cam_contador.value=contador;

}
function quitar_enfermedad(e)
{

    var filas = document.getElementById("filas_enfermedad");          
    var td = e.parentNode;
    var tr = td.parentNode;
    filas.removeChild(tr);
}


function validar_repetido_alergia(e)
{
  alergia=document.getElementsByName('idalergia[]');
  repetido=0;
  for(i=0;i<alergia.length;i++)
  {
    if(e.value==alergia[i].value)
      repetido++

    if(repetido==2)
    {
      alert("Ya ha sido seleccionada esta alergia, por favor seleccione otra");
      e.value='';
      e.focus();
      break;
    }

  }
}

function validar_repetido_discapacidad(e)
{
  discapacidad=document.getElementsByName('idtdiscapacidad[]');
  repetido=0;
  for(i=0;i<discapacidad.length;i++)
  {
    if(e.value==discapacidad[i].value)
      repetido++

    if(repetido==2)
    {
      alert("Ya ha sido seleccionado esta discapacidad, por favor seleccione otra");
      e.value='';
      e.focus();
      break;
    }

  }
}

function validar_repetido_enfermedad(e)
{
  enfermedad=document.getElementsByName('idtenfermedadescronicas[]');
  repetido=0;
  for(i=0;i<enfermedad.length;i++)
  {
    if(e.value==enfermedad[i].value)
      repetido++

    if(repetido==2)
    {
      alert("Ya ha sido seleccionado esta enfermedad cronica, por favor seleccione otra");
      e.value='';
      e.focus();
      break;
    }

  }
}
</script>