<?php
    $operacion=(isset($_POST['operacion']))?$_POST['operacion']:'';
    $idpaciente=(isset($_POST['tpaciente_idpaciente']))?$_POST['tpaciente_idpaciente']:'';
    $fecha_consulta=(isset($_POST['fecha_consulta']))?$_POST['fecha_consulta']:'';

    if($operacion=='examen')
    {
        $titulo='Examen';
        $col1='Examen';
        $col2='Tipo Examen';
        $col3='Laboratorio';
    }
    elseif($operacion=='referencia')
    {
        $titulo='Referencia';
        $col1='Referido a';
        $col2='Tipo Referencia';
        $col3='Centro asistencial';
    }

?>
<h1 class="page-header">Consultar Examen/Referencia</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras generar un archivo pdf con los examenes o referencias registrados en una consulta.
</div>
<form role="form" class="form" action="?vista=reporte/examen_referencia" method="POST" name="form_consulta">
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Paciente <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Paciente al cual se le realizará la consulta."></i></strong></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select name="tpaciente_idpaciente" class="form-control" id="cam_tpaciente_idpaciente" required>
                  <option></option>
                  <?php
                    require_once('../modelo/m_paciente.php');
                    $lobjPaciente=new clasePaciente;
                    $lapacientes=$lobjPaciente->listar();
                    for($i=0;$i<count($lapacientes);$i++)
                    {
                        $selected=($lapacientes[$i]['idpaciente']==$idpaciente)?'selected':'';
                      echo '<option value="'.$lapacientes[$i]['idpaciente'].'" '.$selected.'>'.$lapacientes[$i]['nacionalidad'].'-'.$lapacientes[$i]['cedulaopasaporte'].' / '.$lapacientes[$i]['primerapellido'].' '.$lapacientes[$i]['primernombre'].'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            
        </div>
        <div class="col-md-3">
          <div class="form-group">
              <label for="cam_consulta">Fecha <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fecha de la consulta."></i></strong></label>
              <input type="date" name="fecha_consulta" value="<?php echo $fecha_consulta;?>" class="form-control" id="cam_fecha_consulta" >
            </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
                <label for="cam_consulta">Examen/Referencia <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Seleccione el tipo de registro que desea buscar."></i></strong></label>
                <select name="operacion" id="cam_operacion"  class="form-control">
                    <option value="examen" <?php echo ($operacion=='examen')?'selected':'';?>>Examen</option>
                    <option value="referencia" <?php echo ($operacion=='referencia')?'selected':'';?>>Referencia</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row" id="consultas" >
        <h3><?php echo $operacion;?></h3>
        <div class="col-md-12">
            <table class="cell-border compact hover stripe" id="filtro">
                <thead>
                    <th>Id</th><th>Paciente</th><th>C.I. / P</th><th>Fecha</th><th><?php echo $col1;?></th><th><?php echo $col2;?></th><th><?php echo $col3;?></th><th>Estatus</th><th>Operación</th>
                </thead>
                <tbody>
                <?php
                        require_once('../modelo/m_consulta.php');
                        $lobjConsulta=new claseConsulta;
                        if($operacion=='examen')
                            $laconsulta=$lobjConsulta->consultar_examenes($idpaciente,$fecha_consulta);
                        elseif($operacion=='referencia')
                            $laconsulta=$lobjConsulta->consultar_referencias($idpaciente,$fecha_consulta);

                        for($i=0;$i<count($laconsulta);$i++)
                        {
                            $estatus=($laconsulta[$i]['estatusconsulta']==1)?'Activo':'Inactivo';
                            echo '<tr>';
                            echo '<td>'.$laconsulta[$i]['idconsulta'].'</td>';
                            echo '<td>'.$laconsulta[$i]['primerapellido'].' '.$laconsulta[$i]['primernombre'].'</td>';
                            echo '<td>'.$laconsulta[$i]['nacionalidad'].' '.$laconsulta[$i]['cedulaopasaporte'].'</td>';
                            echo '<td>'.$laconsulta[$i]['fecha_consulta'].'</td>';
                            echo '<td>'.$laconsulta[$i]['col1'].'</td>';
                            echo '<td>'.$laconsulta[$i]['col2'].'</td>';
                            echo '<td>'.$laconsulta[$i]['col3'].'</td>';
                            echo '<td>'.$estatus.'</td>';
                            echo '<td>';
                                    echo ' <a class="btn-sm btn-success" target="_blank" href="../reporte/'.$operacion.'.php?id='.$laconsulta[$i]['col4'].'"  ><i class="fa fa-file-text-o"></i></a>';
                               
                            echo "</td>";
                            echo '</tr>';
                        }
                    ?>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success" ><i class="fa fa-file-text-o"></i>Consultar</button>
        </div>
    </div>
</form>
