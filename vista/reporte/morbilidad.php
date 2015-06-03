<h1 class="page-header">Registro de morbilidad mensual</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras generar un archivo pdf con el registro de morbilidad de cada mes por doctor.
</div>
<form role="form" class="form" target="_blank" action="../reporte/morbilidad.php" method="GET" name="form_consulta">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                <label for="cam_consulta">Mes <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Mes de las consulta."></i></strong></label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input type="text" name="fecha" class="form-control datepicker" id="cam_fecha" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Doctor <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Doctor."></i></strong></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                <select name="idpersonal" class="form-control" id="cam_idpersonal" required>
                  <option></option>
                  <?php
                    require_once('../modelo/m_personal.php');
                    $lobjpersonal=new clasepersonal;
                    $ladoctor=$lobjpersonal->listar_doctor();
                    for($i=0;$i<count($ladoctor);$i++)
                    {
                      echo '<option value="'.$ladoctor[$i]['idpersonal'].'">'.$ladoctor[$i]['nacionalidad'].'-'.$ladoctor[$i]['cedulaopasaporte'].' / '.$ladoctor[$i]['primerapellido'].' '.$ladoctor[$i]['primernombre'].'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success"><i class="fa fa-file-text-o"></i>Generar</button>
        </div>
    </div>
</form>
<script>
$(document).ready(function(){
    $('.datepicker').datepicker({
        startView: 1,
        minViewMode: 1,
        format:'m-yyyy',
        endDate: "<?php echo date('d-m-Y');?>  "        
    });
});
</script>
