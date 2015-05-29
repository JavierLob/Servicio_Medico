<h1 class="page-header">Registrar paciente</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar un paciente en el sistema.
  </div>
<form role="form" class="form" action="../control/c_paciente.php" method="POST" name="form_paciente">
    <input type="hidden" value="registrar_paciente" name="operacion" />
    <input type="hidden"  name="idpaciente" id="cam_idpaciente"/>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
              <label for="cam_documento">Documento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Documento presentado."></i></strong></label>
              <select name="documento" id="cam_documento" class="form-control">
                <option value="CEDULA">Cédula</option>
                <option value="PASAPORTE">Pasaporte</option>
              </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
              <label for="cam_nacionalidad">Nacionalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Nacionalidad del paciente."></i></strong></label>
              <select name="nacionalidad" id="cam_nacionalidad" class="form-control">
                <option value="V">Venezolano</option>
                <option value="E">Extranjero</option>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_cedulaopasaporte">Cédula / Pasaporte <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Cédula o Pasaporte del paciente."></i></strong></label>
              <input type="text" name="cedulaopasaporte" maxlength="9" class="form-control" id="cam_cedulaopasaporte" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primernombre">Primer Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Primer nombre del paciente."></i></strong></label>
              <input type="text" name="primernombre" maxlength="455" class="form-control letras_latinas" id="cam_primernombre" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundonombre">Segundo Nombre <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Segundo nombre del paciente."></i></strong></label>
              <input type="text" name="segundonombre" maxlength="45" class="form-control letras_latinas" id="cam_segundonombre" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_primerapellido">Primer Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Primer apellido del paciente."></i></strong></label>
              <input type="text" name="primerapellido" maxlength="45" class="form-control letras_latinas" id="cam_primerapellido" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_segundoapellido">Segundo Apellido <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Segundo apellido del paciente."></i></strong></label>
              <input type="text" name="segundoapellido" maxlength="45" class="form-control letras_latinas" id="cam_segundoapellido" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_direccion">Dirección <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Dirección del paciente."></i></strong></label>
              <textarea name="direccion" maxlength="1000" class="form-control letras_numeros" id="cam_direccion" ></textarea>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
              <label for="cam_sexo">Sexo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Sexo del paciente."></i></strong></label>
              <select name="sexo" id="cam_sexo" class="form-control" onchange="activar_emabarazada(this);">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
        </div>
        <div class="col-md-2" id="embarazada" style="display:none">
            <div class="form-group">
              <label for="cam_sexo">Embarazada <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Indica sí la paciente está embarazada."></i></strong></label>
              <select name="embarazada" id="cam_embarazada" class="form-control">
                <option value="0">No</option>
                <option value="1">Si</option>
              </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
              <label for="cam_telefono">Teléfono Fijo<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Teléfono fijo del paciente."></i></strong></label>
              <input type="text" name="telefono" maxlength="11" class="form-control solo-numeros" id="cam_telefono" >
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
              <label for="cam_celular">Teléfono Movil <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Teléfono movil del paciente."></i></strong></label>
              <input type="text" name="celular" maxlength="11" class="form-control solo-numeros" id="cam_celular" >
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="cam_celular">Fecha nacimiento<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fecha de nacimiento del paciente."></i></strong></label>
                <input type="text" name="fechanacimiento" class="form-control datepicker" id="cam_fechanacimiento" >
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
              <label for="cam_celular">Edad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Edad del paciente."></i></strong></label>
                <input type="text" name="edad" class="form-control" id="cam_edad" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_antecedentepersonal">Antecedentes Personales <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Indique los antecedentes personales del paciente."></i></strong></label>
              <textarea name="antecedentepersonal" maxlength="1000" class="form-control letras_numeros" id="cam_antecedentepersonal" ></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
              <label for="cam_antecedentefamiliar">Antecedentes Familiares <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Indique los antecedentes familiares del paciente."></i></strong></label>
              <textarea name="antecedentefamiliar" maxlength="1000" class="form-control letras_numeros" id="cam_antecedentefamiliar" ></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label>Estado <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Estado al cual pertenece el paciente."></i></strong></label>
              <select name="estado" id="cam_estado" class="form-control" required>
                  <option value="">-</option>
                  <?php
                  require_once('../modelo/m_estado.php');
                  $lobjEstado=new claseEstado;
                  $row_estado=$lobjEstado->listar();
                  for ($i=0; $i <count($row_estado); $i++) 
                  {
                      echo '<option value="'.$row_estado[$i]['idestado'].'">'.utf8_encode($row_estado[$i]['estado']).'</option>';
                  }
                 ?>
              </select>
              <div style="float:right" id="status_es"></div>
            </div>
      </div>
      <div class="col-lg-6">
            <div class="form-group">
              <label>Municipio <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Municipio al cual pertenece el paciente."></i></strong></label>
              <select name="municipio" id="cam_municipio" class="form-control" required>
                  <option value="">-</option>
                  <?php
                      require_once('../modelo/m_municipio.php');
                      $lobjMunicipio=new claseMunicipio;
                      $row_municipio=$lobjMunicipio->listar();
                      for ($i=0; $i <count($row_municipio); $i++) 
                      {
                          echo '<option value="'.$row_municipio[$i]['idtmunicipio'].'">'.$row_municipio[$i]['municipio'].'</option>';
                      }
                 ?>
              </select>
              <div style="float:right" id="status_mun"></div>
            </div>
      </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idparroquia">Parroquia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Parroquia al cual pertenece el paciente."></i></strong></label>
              <select name="idparroquia" class="form-control" id="cam_idparroquia" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_parroquia.php');
                    $lobjParroquia= new claseparroquia;
                    $laParroquias=$lobjParroquia->listar();
                    for ($i=0; $i <count($laParroquias) ; $i++) { 
                      echo '<option value="'.$laParroquias[$i]['idparroquia'].'">'.$laParroquias[$i]['parroquia'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idtsede">Sede <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Sede al cual pertenece el paciente."></i></strong></label>
              <select name="idtsede" class="form-control" id="cam_idtsede" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_sede.php');
                    $lobjSede= new claseSede;
                    $lasedes=$lobjSede->listar();
                    for ($i=0; $i <count($lasedes) ; $i++) { 
                      echo '<option value="'.$lasedes[$i]['idtsede'].'">'.$lasedes[$i]['sede'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idtetnia">Etnia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Indique la etnia a la cual pertenece el paciente."></i></strong></label>
              <select name="idtetnia" class="form-control" id="cam_idtetnia" >
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_etnia.php');
                    $lobjEtnia= new claseEtnia;
                    $laEtnia=$lobjEtnia->listar();
                    for ($i=0; $i <count($laEtnia) ; $i++) { 
                      echo '<option value="'.$laEtnia[$i]['idtetnia'].'">'.$laEtnia[$i]['etnia'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idttipopaciente">Tipo Paciente <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione Tipo de paciente."></i></strong></label>
              <select name="idttipopaciente" class="form-control" id="cam_idttipopaciente" onchange="activar_tipo_paciente(this)" required>
                  <option value="">-</option>
                  <?php
                    require_once('../modelo/m_tipo_paciente.php');
                    $lobjTipoPaciente= new claseTipoPaciente;
                    $laTipoPaciente=$lobjTipoPaciente->listar();
                    for ($i=0; $i <count($laTipoPaciente) ; $i++) { 
                      echo '<option value="'.$laTipoPaciente[$i]['idttipopaciente'].'">'.$laTipoPaciente[$i]['tipopaciente'].'</option>';                    
                    }
                  ?>
              </select>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6" id="carrera"  style="display:none">
              <div class="form-group">
                <label for="cam_tcarrera_idtcarrera">Carrera <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Carrera al cual pertenece el paciente."></i></strong></label>
                <select name="tcarrera_idtcarrera" class="form-control" id="cam_tcarrera_idtcarrera">
                    <option value="">-</option>
                    <?php
                      require_once('../modelo/m_carrera.php');
                      $lobjCarrera= new claseCarrera;
                      $laCarrera=$lobjCarrera->listar();
                      for ($i=0; $i <count($laCarrera) ; $i++) { 
                        echo '<option value="'.$laCarrera[$i]['idtcarrera'].'">'.$laCarrera[$i]['carrera'].'</option>';                    
                      }
                    ?>
                </select>
              </div>
          </div>
          <div class="col-md-6" id="departamento" style="display:none">
              <div class="form-group">
                <label for="cam_tdepartamento_iddepartamento">Departamento <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Departamento al cual pertenece el paciente."></i></strong></label>
                <select name="tdepartamento_iddepartamento" class="form-control" id="cam_tdepartamento_iddepartamento" >
                    <option value="">-</option>
                    <?php
                      require_once('../modelo/m_departamento.php');
                      $lobjDepartamento= new claseDepartamento;
                      $laDepartamento=$lobjDepartamento->listar();
                      for ($i=0; $i <count($laDepartamento) ; $i++) { 
                        echo '<option value="'.$laDepartamento[$i]['iddepartamento'].'">'.$laDepartamento[$i]['departamento'].'</option>';                    
                      }
                    ?>
                </select>
              </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6" id="modalidad" style="display:none">
            <div class="form-group">
              <label for="cam_modalidadpac">Modalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modalidad que estudia el paciente."></i></strong></label>
              <select name="modalidadpac" class="form-control" id="cam_modalidadpac">
                  <option value="">-</option>
                  <option value="TRIMESTRE">TRIMESTRE</option>
                  <option value="SEMESTRE">SEMESTRE</option>
              </select>
            </div>
        </div>
        <div class="col-md-6" id="nro_modalidad" style="display:none">
            <div class="form-group">
              <label for="cam_numeromodalidadpac">Nro. Modalidad <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Número de la Modalidad que estudia el paciente."></i></strong></label>
              <select name="numeromodalidadpac" class="form-control" id="cam_numeromodalidadpac">
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
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>

      </div>
      <div class="col-md-4">
         <label for="cam_consulta">¿Discapacidades? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione si padece de alguna discapacidad."></i></strong></label>
            <select class="form-control" id="cam_discapacidades">
              <option value=""></option>
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>
      </div>
      <div class="col-md-4">
         <label for="cam_consulta">¿Enfermedad Crónica? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione si padece de alguna enfermedad cronica."></i></strong></label>
            <select class="form-control" id="cam_cronico">
              <option value=""></option>
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3>Alergias</h3>
        <table class="table table-striped" id="alergia" style="display:none">
          <thead>
            <th>Seleccione</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_alergia()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_alergia">
            <tr>
              <td>
                <select class="form-control" name="idalergia[]" onchange="validar_repetido_alergia(this)" id="cam_idalergia0">
                  <option value=""></option>
                  <?php
                    require_once('../modelo/m_alergia.php');
                    $lobAlergia=new claseAlergia;
                    $laalergias=$lobAlergia->listar();
                    for ($i=0;$i<count($laalergias);$i++) 
                    { 
                      echo '<option value="'.$laalergias[$i]['idalergia'].'">'.$laalergias[$i]['nombreale'].'</option>';
                    }
                  ?>
                </select>
              </td>
              <td>
                <button class="btn btn-danger" type="button" onclick="quitar_alergia(this)"><i class="fa fa-minus"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_alergia" value="0">
      </div>
      <div class="col-md-4">
        <h3>Discapacidades</h3>
        <table class="table table-striped" id="discapacidad" style="display:none">
          <thead>
            <th>Seleccione</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_discapacidad()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_discapacidad">
            <tr>
              <td>
                <select class="form-control" name="idtdiscapacidad[]" onchange="validar_repetido_discapacidad(this)" id="cam_discapacidad0">
                  <option value=""></option>
                  <?php
                    require_once('../modelo/m_discapacidad.php');
                    $lobjDiscapacidad=new claseDiscapacidad;
                    $ladiscapacidad=$lobjDiscapacidad->listar();
                    for ($i=0;$i<count($ladiscapacidad);$i++) 
                    { 
                      echo '<option value="'.$ladiscapacidad[$i]['idtdiscapacidad'].'">'.$ladiscapacidad[$i]['discapacidad'].'</option>';
                    }
                  ?>
                </select>
              </td>
              <td>
                <button class="btn btn-danger" type="button" onclick="quitar_discapacidad(this)"><i class="fa fa-minus"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_discapacidad" value="0">
      </div>
      <div class="col-md-4">
        <h3>Enfermedades Cronicas</h3>
        <table class="table table-striped" id="enfermedad" style="display:none">
          <thead>
            <th>Seleccione</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_enfermedad()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_enfermedad">
            <tr>
              <td>
                <select class="form-control" name="idtenfermedadescronicas[]" onchange="validar_repetido_enfermedad(this)" id="cam_enfermedad0">
                  <option value=""></option>
                  <?php
                    require_once('../modelo/m_enfermedadescronicas.php');
                    $lobjEnfermedad=new claseEnfermedadCronicas;
                    $laenfermedadcronica=$lobjEnfermedad->listar();
                    for ($i=0;$i<count($laenfermedadcronica);$i++) 
                    { 
                      echo '<option value="'.$laenfermedadcronica[$i]['idtenfermedadescronicas'].'">'.$laenfermedadcronica[$i]['enfermedadcronica'].'</option>';
                    }
                  ?>
                </select>
              </td>
              <td>
                <button class="btn btn-danger" type="button" onclick="quitar_enfermedad(this)"><i class="fa fa-minus"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_enfermedad" value="0">
      </div>
      <div class="col-md-12">
          <div class="form-group">
            <label for="cam_observacion">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Indique una observación en el caso de que sea necesaria."></i></strong></label>
            <textarea name="observacion" maxlength="1000" class="form-control letras_numeros" id="cam_observacion"></textarea>
          </div>
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
<?php
$fecha = date('d-m-Y');
$nuevafecha = strtotime ( '-15 year' , strtotime ( $fecha ) ) ;
$nuevafecha_ini = strtotime ( '-80 year' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'd-m-Y' , $nuevafecha );
$fecha_inicio = date ( 'd-m-Y' , $nuevafecha_ini );
?>
$(document).ready(function(){
    $('.datepicker').datepicker({
        startView:2,
        format:'dd-mm-yyyy',
        startDate: "<?php echo $fecha_inicio;?>",
        endDate: "<?php echo $nuevafecha;?>  "        
    });
    $("#cam_fechanacimiento").change(function(){
        var fecha = $(this).val();
        var dividir = fecha.split('-');
        var fecha = dividir[2]+'-'+dividir[1]+'-'+dividir[0];
        var anos = calcularEdad(fecha);
        $("#cam_edad").val(anos+' Años');
    });

    $("#cam_cedulaopasaporte").change(function(){
        var valor = $(this).val();
        if((valor.length < 7) || (valor.length > 8))
        {
            $("#btn_enviar").attr('disabled', true);
            $(this).focus();
            alert("La Cédula o pasaporte debe ser mayor a 7 digitos y menor o igual a 8");
        }
        else
        {
            $("#btn_enviar").attr('disabled', false);
        }
       
        $.ajax({  
            type: "POST",  
            url: "../control/c_paciente.php",  
            data: {cedulaopasaporte:valor, nacionalidad: $("#cam_nacionalidad").val(),operacion:"validar"},  
            success: function(msg){
                if(msg=='1')
                {
                    $("#cam_cedulaopasaporte").val('');
                    alert('Ya existe un paciente con esa cédula');                              
                }
            }
        });
    });
    $("#cam_cedulaopasaporte").keypress(function(){
        if(!$(this).val().match(numeros))
        {
            var valor = (this.value + '').replace(numeros, '');
            $(this).val(valor);
            alert('Debe ingresar solo números');
            $(".btn-success").attr('disabled', true);
        }
        else
        {
            $(".btn-success").attr('disabled', false);
        }
    });
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

    $("#cam_modalidadpac").change(function(){
        var modalidad = $(this).val();
        $("#cam_numeromodalidadpac").val('');
        $("#cam_numeromodalidadpac option").each(function(indice, elemento){
            if($(elemento).attr('data-padre') == modalidad)
                $(elemento).show();
            else
                $(elemento).hide();
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
                        //$("#btn_enviar").prop( "disabled", false );
                        $("#cam_idparroquia").html(msg);                       
            }
        });
    });
});

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

function activar_emabarazada(e)
{
  embarazada=document.getElementById("embarazada");
  if(e.value=='F')
  {
    embarazada.style.display="block";
  }
  else if(e.value=='M')
  {
    embarazada.style.display="none";

  }
}
function activar_tipo_paciente(e)
{
  carrera=document.getElementById("carrera");
  departamento=document.getElementById("departamento");
  modalidad=document.getElementById("modalidad");
  nro_modalidad=document.getElementById("nro_modalidad");

  if(e.value=='1')
  {
    carrera.style.display="block";
    modalidad.style.display="block";
    nro_modalidad.style.display="block";
    departamento.style.display="none";
  }
  else if(e.value=='2')
  {
    departamento.style.display="block";
    carrera.style.display="none";
    modalidad.style.display="none";
    nro_modalidad.style.display="none";

  }
}


function calcularEdad(fecha_user)
{
    var fecha = fecha_user;
    // Si la fecha es correcta, calculamos la edad
    var values=fecha.split("-");
    var dia = values[2];
    var mes = values[1];
    var ano = values[0];

    // cogemos los valores actuales
    var fecha_hoy = new Date();
    var ahora_ano = fecha_hoy.getYear();
    var ahora_mes = fecha_hoy.getMonth()+1;
    var ahora_dia = fecha_hoy.getDate();

    // realizamos el calculo
    var edad = (ahora_ano + 1900) - ano;
    if ( ahora_mes < mes )
    {
        edad--;
    }
    if ((mes == ahora_mes) && (ahora_dia < dia))
    {
        edad--;
    }
    if (edad > 1900)
    {
        edad -= 1900;
    }

    // calculamos los meses
    var meses=0;
    if(ahora_mes>mes)
        meses=ahora_mes-mes;
    if(ahora_mes<mes)
        meses=12-(mes-ahora_mes);
    if(ahora_mes==mes && dia>ahora_dia)
        meses=11;

    // calculamos los dias
    var dias=0;
    if(ahora_dia>dia)
        dias=ahora_dia-dia;
    if(ahora_dia<dia)
    {
        ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
        dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
    }
 
    return edad;
}
</script>