 <?php
    require_once('../modelo/m_consulta.php');
    $lobjConsulta=new claseConsulta;
    $lobjConsulta->consultar();
    $id=(isset($_GET['id']))?$_GET['id']:'';
    $lobjConsulta->set_Consulta($id);
    $laconsulta=$lobjConsulta->consultar();
    $laexamen=$lobjConsulta->consultar_examen();
    $lareferencia=$lobjConsulta->consultar_referir();
  ?>
<h1 class="page-header">Consultar Consulta</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las consultas en el sistema.
  </div>
<form role="form" class="form" action="../control/c_consulta.php" method="POST" name="form_consulta">
    <input type="hidden" value="registrar_consulta" name="operacion" />
    <input type="hidden"  name="idconsulta" id="cam_idconsulta"/>
    <input type="hidden"  name="idtdoctor" id="cam_idtdoctor" value="1"/>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Paciente <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Paciente al cual se le realizará la consulta."></i></strong></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select name="tpaciente_idpaciente" class="form-control" id="cam_tpaciente_idpaciente" required disabled>
                  <option></option>
                  <?php
                    require_once('../modelo/m_paciente.php');
                    $lobjPaciente=new clasePaciente;
                    $lapacientes=$lobjPaciente->listar();
                    for($i=0;$i<count($lapacientes);$i++)
                    {
                      $selected=($laconsulta['tpaciente_idpaciente']==$lapacientes[$i]['idpaciente'])?'selected':'';
                      echo '<option value="'.$lapacientes[$i]['idpaciente'].'" '.$selected.'>'.$lapacientes[$i]['nacionalidad'].'-'.$lapacientes[$i]['cedulaopasaporte'].' / '.$lapacientes[$i]['primerapellido'].' '.$lapacientes[$i]['primernombre'].'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="cam_consulta">Fecha <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fecha de la consulta."></i></strong></label>
              <input type="text" name="fecha_consulta" class="form-control" id="cam_fecha_consulta" disabled value="<?php echo $laconsulta['fecha_consulta'];?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Pulso <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pulso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="pulso" class="form-control" id="cam_pulso" value="<?php echo $laconsulta['pulso'];?>" required>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Peso <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <input type="text" name="peso" class="form-control" id="cam_peso" value="<?php echo $laconsulta['peso'];?>" required>
                <span class="input-group-addon">Kg</span>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Fc <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pulso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-stethoscope  "></i></span>
              <input type="text" name="fc" class="form-control" id="cam_fc" value="<?php echo $laconsulta['fc'];?>" required>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Fr <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <input type="text" name="fr" class="form-control" id="cam_fr" value="<?php echo $laconsulta['fr'];?>" required>
                <span class="input-group-addon">Kg</span>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Ta <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pulso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="ta" class="form-control" id="cam_ta" value="<?php echo $laconsulta['ta'];?>" required>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Temperatura <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pulso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="temperatura" class="form-control" id="cam_temperatura" value="<?php echo $laconsulta['temperatura'];?>" required>
              </div>
            </div>
        </div>
    </div>
    <div class="row">        
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Talla <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                <input type="text" name="talla" class="form-control" id="cam_talla" value="<?php echo $laconsulta['talla'];?>" required>

              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Altura <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                <input type="text" name="altura" class="form-control" id="cam_altura" value="<?php echo $laconsulta['altura'];?>" required>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <div class="form-group">
              <label for="cam_consulta">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pulso del paciente al momento de la consulta."></i></strong></label>
              <textarea name="observacionconsulta" class="form-control" id="cam_observacionconsulta" ><?php echo $laconsulta['observacionconsulta'];?></textarea>
            </div>
        </div>
    </div>
    <div class="row" id="examen">
      <div class="col-md-12">
        <h3>Examen</h3>
        <table class="table table-striped">
          <thead>
            <th>Examen</th>
            <th>Tipo Examen</th>
            <th>Laboratorio</th>
          </thead>
          <tbody id="filas_examen">
           <?php 
          for($i=0;$i<count($laexamen);$i++)
          {
          ?>
            <tr>
              <td><input type="text" name="examen" id="cam_examen<?php echo $i;?>"  class="form-control" value="<?php echo $laexamen[$i]['examen']?>" disabled/></td>
              <td><input type="text" name="tipoexamen" id="cam_tipoexamen<?php echo $i;?>"  class="form-control" value="<?php echo $laexamen[$i]['tipoexamen']?>" disabled/></td>
              <td><input type="text" name="laboratorio" id="cam_laboratorio<?php echo $i;?>"  class="form-control" value="<?php echo $laexamen[$i]['laboratorio']?>" disabled/></td>
              
            </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_examen" value="0">
      </div>
    </div>
    <div class="row" id="referir">
      <div class="col-md-12">
        <h3>Referir</h3>
        <table class="table table-striped">
          <thead>
            <th>Referir a</th>
            <th>Tipo Referencia</th>
            <th>Centro Asistencial</th>
          </thead>
          <tbody id="filas_referir">
          <?php 
          for($i=0;$i<count($lareferencia);$i++)
          {
          ?>
            <tr>
              <td><input type="text" name="referidoa" id="cam_referira<?php echo $i;?>" class="form-control" value="<?php echo $lareferencia[$i]['referidoa']?>" disabled/></td>
              <td><input type="text" name="tiporeferencia" id="cam_tiporeferencia<?php echo $i;?>" class="form-control" value="<?php echo $lareferencia[$i]['tiporeferencia']?>" disabled/></td>
              <td><input type="text" name="nombrecentroasistencial" id="cam_centroasistencia<?php echo $i;?>" class="form-control" value="<?php echo $lareferencia[$i]['nombrecentroasistencial']?>" disabled/></td>      
            </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_referir" value="0">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=consulta/consulta';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>
<script>
  $("#cam_pulso").mask("999");
  $("#cam_peso").mask("999");
</script>