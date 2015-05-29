 <?php
    require_once('../modelo/m_consulta.php');
    $lobjConsulta=new claseConsulta;
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
    <input type="hidden" value="registrar_consulta" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idconsulta" id="cam_idconsulta" value="<?php echo $id;?>"/>
    <input type="hidden"  name="idexamen" id="cam_idexamen"/>
    <input type="hidden"  name="idreferencia" id="cam_idreferencia"/>
    <input type="hidden"  name="estatus" id="cam_estatus"/>
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
              <input type="text" name="pulso" class="form-control" id="cam_pulso" value="<?php echo $laconsulta['pulso'];?>" required disabled>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Peso <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <input type="text" name="peso" class="form-control" id="cam_peso" value="<?php echo $laconsulta['peso'];?>" required disabled>
                <span class="input-group-addon">Kg</span>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Fc <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fc del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-stethoscope  "></i></span>
              <input type="text" name="fc" class="form-control" id="cam_fc" value="<?php echo $laconsulta['fc'];?>" required disabled>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Fr <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fr del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <input type="text" name="fr" class="form-control" id="cam_fr" value="<?php echo $laconsulta['fr'];?>" required disabled>
                <span class="input-group-addon">Kg</span>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Ta <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Ta del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="ta" class="form-control" id="cam_ta" value="<?php echo $laconsulta['ta'];?>" required disabled>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Temperatura <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Temperatura del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="temperatura" class="form-control" id="cam_temperatura" value="<?php echo $laconsulta['temperatura'];?>" required disabled>
              </div>
            </div>
        </div>
    </div>
    <div class="row">        
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Talla <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Talla del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

              <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                <input type="text" name="talla" class="form-control" id="cam_talla" value="<?php echo $laconsulta['talla'];?>" required disabled>

              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Altura <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Altura del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                <input type="text" name="altura" class="form-control" id="cam_altura" value="<?php echo $laconsulta['altura'];?>" disabled required>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <div class="form-group">
              <label for="cam_consulta">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Observación de la consulta."></i></strong></label>
              <textarea name="observacionconsulta" class="form-control" id="cam_observacionconsulta" disabled><?php echo $laconsulta['observacionconsulta'];?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <div class="form-group">
              <label for="cam_consulta">Motivo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Motivo de la consulta."></i></strong></label>
              <textarea name="motivocon" class="form-control" id="cam_motivocon" disabled><?php echo $laconsulta['motivocon'];?></textarea>
            </div>
        </div>
    </div>
    <div class="row" id="examen" style="display:<?php echo (count($laexamen)>=1)?'block':'none';?>">
      <div class="col-md-12">
        <h3>Examen</h3>
        <table class="table table-striped">
          <thead>
            <th>Examen</th>
            <th>Tipo Examen</th>
            <th>Laboratorio</th>
            <th>Estatus</th>
            <th>Operación</th>
          </thead>
          <tbody id="filas_examen">
           <?php 
          for($i=0;$i<count($laexamen);$i++)
          {

             if($laexamen[$i]['estatusexamen']=='1')
            {
              $estatus='Pendiente';
              $estatus_color='warning';
              $operacion='<button class="btn btn-sm btn-success" onclick="return cumplido_examen('.$laexamen[$i]['idtexamen'].')"><i class="fa fa-check"></i></button> <button class="btn btn-sm btn-danger" onclick="return incumplido_examen('.$laexamen[$i]['idtexamen'].')"><i class="fa fa-times"></i></button>';
                                    echo ' ';
            
            }
            elseif($laexamen[$i]['estatusexamen']=='2')
            {
              $estatus='Cumplido';
              $estatus_color='success';
              $operacion='';
            }
            elseif($laexamen[$i]['estatusexamen']=='3')
            {
              $estatus_color='danger';
              $estatus='Incumplido';
              $operacion='';
            }
          ?>
            <tr>
              <td><input type="text" name="examen" id="cam_examen<?php echo $i;?>"  class="form-control" value="<?php echo $laexamen[$i]['examen']?>" disabled/></td>
              <td><input type="text" name="tipoexamen" id="cam_tipoexamen<?php echo $i;?>"  class="form-control" value="<?php echo $laexamen[$i]['tipoexamen']?>" disabled/></td>
              <td><input type="text" name="laboratorio" id="cam_laboratorio<?php echo $i;?>"  class="form-control" value="<?php echo $laexamen[$i]['laboratorio']?>" disabled/></td>
              <td><label class="label label-<?php echo $estatus_color?>"><?php echo $estatus?></label></td>
              <td><a class="btn-sm btn-success" target="_blank" href="../reporte/examen.php?id=<?php echo $laexamen[$i]['idtexamen'];?>"  ><i class="fa fa-file-text-o"></i></a> <?php echo $operacion?></td>      

              
            </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_examen" value="0">
      </div>
    </div>
    <div class="row" id="referir" style="display:<?php echo (count($lareferencia)>=1)?'block':'none';?>">
      <div class="col-md-12">
        <h3>Referir</h3>
        <table class="table table-striped">
          <thead>
            <th>Referir a</th>
            <th>Tipo Referencia</th>
            <th>Centro Asistencial</th>
            <th>Estatus</th>
            <th>Operación</th>
          </thead>
          <tbody id="filas_referir">
          <?php 
          for($i=0;$i<count($lareferencia);$i++)
          {
            if($lareferencia[$i]['estatusreferencia']=='1')
            {
              $estatus='Pendiente';
              $estatus_color='warning';
              $operacion='<button class="btn btn-sm btn-success" onclick="return cumplido_referencia('.$lareferencia[$i]['idreferencia'].')"><i class="fa fa-check"></i></button> <button class="btn btn-sm btn-danger" onclick="return incumplido_referencia('.$lareferencia[$i]['idreferencia'].')"><i class="fa fa-times"></i></button>';
            }
            elseif($lareferencia[$i]['estatusreferencia']=='2')
            {
              $estatus='Cumplido';
              $estatus_color='success';
              $operacion='';

            }
            elseif($lareferencia[$i]['estatusreferencia']=='3')
            {
              $estatus_color='danger';
              $estatus='Incumplido';
              $operacion='';
            }
          ?>
            <tr>
              <td><input type="text" name="referidoa" id="cam_referira<?php echo $i;?>" class="form-control" value="<?php echo $lareferencia[$i]['referidoa']?>" disabled/></td>
              <td><input type="text" name="tiporeferencia" id="cam_tiporeferencia<?php echo $i;?>" class="form-control" value="<?php echo $lareferencia[$i]['tiporeferencia']?>" disabled/></td>
              <td><input type="text" name="nombrecentroasistencial" id="cam_centroasistencia<?php echo $i;?>" class="form-control" value="<?php echo $lareferencia[$i]['nombrecentroasistencial']?>" disabled/></td>      
              <td><label class="label label-<?php echo $estatus_color?>"><?php echo $estatus?></label></td>      
              <td><a class="btn-sm btn-success" target="_blank" href="../reporte/referencia.php?id=<?php echo $lareferencia[$i]['idreferencia'];?>"  ><i class="fa fa-file-text-o"></i></a> <?php echo $operacion?></td>      
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
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>
<script>

    function cumplido_examen(id)
    {
        if(confirm("¿Desea colocar como cumplido el examen seleccionado?"))
        {
            document.getElementById("cam_idexamen").value=id;
            document.getElementById("cam_estatus").value='2';
            document.getElementById("cam_operacion").value='cambiar_estatus_examen';
            document.form_consulta.submit();
        }
        else
        {
          return false;
        }
    }

    function incumplido_examen(id)
    {
        if(confirm("¿Desea colocar como cumplido el examen seleccionado?"))
        {
            document.getElementById("cam_idexamen").value=id;
            document.getElementById("cam_estatus").value='3';
            document.getElementById("cam_operacion").value='cambiar_estatus_examen';
            document.form_consulta.submit();
        }
        else
        {
          return false;
        }
    }

    function incumplido_referencia(id)
    {
        if(confirm("¿Desea colocar como cumplido la referencia seleccionada?"))
        {
            document.getElementById("cam_idreferencia").value=id;
            document.getElementById("cam_estatus").value='3';
            document.getElementById("cam_operacion").value='cambiar_estatus_referencia';
            document.form_consulta.submit();
        }
        else
        {
          return false;
        }
    }

     function cumplido_referencia(id)
    {
        if(confirm("¿Desea colocar como cumplido la referencia seleccionada?"))
        {
            document.getElementById("cam_idreferencia").value=id;
            document.getElementById("cam_estatus").value='2';
            document.getElementById("cam_operacion").value='cambiar_estatus_referencia';
            document.form_consulta.submit();
        }
        else
        {
          return false;
        }
    }
</script>