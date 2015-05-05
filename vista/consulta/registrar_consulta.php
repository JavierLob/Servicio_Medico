<h1 class="page-header">Registrar Consulta</h1>
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar las consultas en el sistema.
  </div>
<form role="form" class="form" action="../control/c_consulta.php" method="POST" name="form_consulta">
    <input type="hidden" value="registrar_consulta" name="operacion" />
    <input type="hidden"  name="idconsulta" id="cam_idconsulta"/>
    <input type="hidden"  name="idtdoctor" id="cam_idtdoctor" value="<?php echo $_SESSION['iddoctor'];?>"/>
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
                      echo '<option id="'.$lapacientes[$i]['embarazada'].'" value="'.$lapacientes[$i]['idpaciente'].'">'.$lapacientes[$i]['nacionalidad'].'-'.$lapacientes[$i]['cedulaopasaporte'].' / '.$lapacientes[$i]['primerapellido'].' '.$lapacientes[$i]['primernombre'].'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="cam_consulta">Fecha <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fecha de la consulta."></i></strong></label>
              <input type="text" name="fecha_consulta" class="form-control" id="cam_fecha_consulta" value="<?php echo date('d-m-Y');?>" required>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Pulso <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Pulso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="pulso" class="form-control" id="cam_pulso" minlength="2" maxlength="3" value="" >
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Peso <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <input type="text" name="peso" class="form-control" id="cam_peso" minlength="2" maxlength="3" value="" >
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
                <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
                <input type="text" name="fc" class="form-control" id="cam_fc" minlength="2" maxlength="3" value="" >
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Fr <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fr del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-stethoscope  "></i></span>
                <input type="text" name="fr" class="form-control" id="cam_fr" minlength="2" maxlength="3" value="" >

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Ta <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="TA del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
              <input type="text" name="ta" class="form-control" id="cam_ta" minlength="2" maxlength="3" value="">
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Temperatura <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Temperatura del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-magic"></i></span>
              <input type="text" name="temperatura" class="form-control"minlength="2" maxlength="2" id="cam_temperatura" value="">
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
                <input type="text" name="talla" class="form-control" id="cam_talla" minlength="2" maxlength="2" value="" >

              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_consulta">Altura <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Altura del paciente al momento de la consulta."></i></strong></label>
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
                <input type="text" name="altura" class="form-control" id="cam_altura" minlength="3" maxlength="3" value="" >

              </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <div class="form-group">
              <label for="cam_consulta">Observación <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Observación de la consulta."></i></strong></label>
              <textarea name="observacionconsulta" class="form-control" minlength="3" maxlength="300" id="cam_observacionconsulta" value=""></textarea>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <div class="form-group">
              <label for="cam_consulta">Motivo de la consulta <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Motivo de la consulta."></i></strong></label>
              <textarea name="motivocon" class="form-control" id="cam_motivocon" minlength="5" maxlength="500" value="" required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
         <label for="cam_consulta">¿Examen? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>

            <select class="form-control" id="cam_examen">
              <option value=""></option>
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>

      </div>
      <div class="col-md-6">
         <label for="cam_consulta">¿Referir? <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Peso del paciente al momento de la consulta."></i></strong></label>

            <select class="form-control" id="cam_referir">
              <option value=""></option>
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>

      </div>
    </div>
    <div class="row" id="examen" style="display:none">
      <div class="col-md-12">
        <h3>Examen</h3>
        <table class="table table-striped">
          <thead>
            <th>Examen</th>
            <th>Tipo Examen</th>
            <th>Laboratorio</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_examen()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_examen">
            
          </tbody>
        </table>
        <input type="hidden" id="cam_contador_examen" value="0">
      </div>
    </div>
    <div class="row" id="referir" style="display:none">
      <div class="col-md-12">
        <h3>Referir</h3>
        <table class="table table-striped">
          <thead>
            <th>Referir a</th>
            <th>Tipo Referencia</th>
            <th>Centro Asistencial</th>
            <th><button class="btn btn-success" type="button" onclick="agregar_referir()"><i class="fa fa-plus"></i></button></th>
          </thead>
          <tbody id="filas_referir">
            
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
        <button type="submit" class="btn btn-success center-block" onclick="return validar();" name="btn_enviar" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>
</form>
<script type="text/javascript"  src="../js/validacion.js"></script>
<script>
  $("#cam_examen").change(function(){
    valor=$("#cam_examen").val();
    if(valor=='1')
      $("#examen").animate({ height: 'show', opacity: 'show' }, 'slow');
    if(valor=='0')
      $("#examen").animate({ height: 'hide', opacity: 'hide' }, 'slow');
  });

   $("#cam_referir").change(function(){
    valor=$("#cam_referir").val();
    if(valor=='1')
      $("#referir").animate({ height: 'show', opacity: 'show' }, 'slow');
    if(valor=='0')
      $("#referir").animate({ height: 'hide', opacity: 'hide' }, 'slow');
  });



  function agregar_examen()
  {
    cam_contador=document.getElementById("cam_contador_examen");
    filas_examen=document.getElementById("filas_examen");
    contador=cam_contador.value;
    contador++;

    tr=document.createElement('tr');
    col1=document.createElement('td');
    col2=document.createElement('td');
    col3=document.createElement('td');
    col4=document.createElement('td');
    var select= document.createElement('select');
     var select2= document.createElement('select');
    select.setAttribute('class','form-control');
    select2.setAttribute('class','form-control');
    select.setAttribute('onchange','validar_repetido_examen(this)');
    select.setAttribute('name','idttipoexamen[]');
    select2.setAttribute('name','idtlaboratorio[]');
    select.setAttribute('id','cam_idttipoexamen'+contador);
    select2.setAttribute('id','cam_idtlaboratorio'+contador);
      var url="../control/c_tipoexamen.php";
     $.ajax({   
          type: "POST",
          url:url,
          data:{operacion:'consultar_tipoexamen'},
          success: function(datos){
              select.innerHTML=datos;   
           }
      });

      var url2="../control/c_laboratorio.php";
     $.ajax({   
          type: "POST",
          url:url2,
          data:{operacion:'consultar_laboratorio'},
          success: function(datos){

              select2.innerHTML=datos;   
           }
      });
    col1.innerHTML='<input type="text" name="examen[]" id="cam_examen'+contador+'" class="form-control" />';
    col4.innerHTML='<button class="btn btn-danger" onclick="quitar_examen(this)"><i class="fa fa-minus"></i></button>';

      col2.appendChild(select);
      col3.appendChild(select2);
      tr.appendChild(col1);
      tr.appendChild(col2);
      tr.appendChild(col3);
      tr.appendChild(col4);
      filas_examen.appendChild(tr);
      cam_contador.value=contador;

  }

  function agregar_referir()
  {
    cam_contador=document.getElementById("cam_contador_referir");
    filas_referir=document.getElementById("filas_referir");
    contador=cam_contador.value;
    contador++;

    tr=document.createElement('tr');
    col1=document.createElement('td');
    col2=document.createElement('td');
    col3=document.createElement('td');
    col4=document.createElement('td');
    var select= document.createElement('select');
     var select2= document.createElement('select');
    select.setAttribute('class','form-control');
    select.setAttribute('onchange','validar_repetido_referencia(this)');
    select2.setAttribute('class','form-control');
    select.setAttribute('name','idtiporeferencia[]');
    select2.setAttribute('name','idtcentroasistencial[]');
    select.setAttribute('id','cam_idtiporeferencia'+contador);
    select2.setAttribute('id','cam_idtcentroasistencial'+contador);
      var url="../control/c_tiporeferencia.php";
     $.ajax({   
          type: "POST",
          url:url,
          data:{operacion:'consultar_tiporeferencia'},
          success: function(datos){
              select.innerHTML=datos;   
           }
      });

      var url2="../control/c_centroasistencial.php";
     $.ajax({   
          type: "POST",
          url:url2,
          data:{operacion:'consultar_centroasistencial'},
          success: function(datos){

              select2.innerHTML=datos;   
           }
      });
    col1.innerHTML='<input type="text" name="referira[]" id="cam_referira'+contador+'" class="form-control" />';
    col4.innerHTML='<button class="btn btn-danger" onclick="quitar_referir(this)"><i class="fa fa-minus"></i></button>';

      col2.appendChild(select);
      col3.appendChild(select2);
      tr.appendChild(col1);
      tr.appendChild(col2);
      tr.appendChild(col3);
      tr.appendChild(col4);
      filas_referir.appendChild(tr);
      cam_contador.value=contador;

  }
function quitar_examen(e)
{

    var filas = document.getElementById("filas_examen");          
    var td = e.parentNode;
    var tr = td.parentNode;
    filas.removeChild(tr);
}



  
function quitar_referir(e)
{

    var filas = document.getElementById("filas_referir");          
    var td = e.parentNode;
    var tr = td.parentNode;
    filas.removeChild(tr);
}

function validar_repetido_examen(e)
{
  tipo_examen=document.getElementsByName('idttipoexamen[]');
  repetido=0;
  for(i=0;i<tipo_examen.length;i++)
  {
    if(e.value==tipo_examen[i].value)
      repetido++

    if(repetido==2)
    {
      alert("Ya ha sido seleccionado este tipo de examen, por favor seleccione otro");
      e.value='';
      e.focus();
      break;
    }

  }
}

function validar_repetido_referencia(e)
{
  tipo_referencia=document.getElementsByName('idtiporeferencia[]');
  repetido=0;
  for(i=0;i<tipo_referencia.length;i++)
  {
    if(e.value==tipo_referencia[i].value)
      repetido++

    if(repetido==2)
    {
      alert("Ya ha sido seleccionado este tipo de referencia, por favor seleccione otro");
      e.value='';
      e.focus();
      break;
    }

  }
}

function validar()
{
  var url="../control/c_consulta.php";
  examen=document.getElementsByName("examen[]");
  tpaciente_idpaciente=document.getElementById("cam_tpaciente_idpaciente");
  paciente=tpaciente_idpaciente.value;
  referira=document.getElementsByName("referira[]");
  cantidad_examen=examen.length;
  cantidad_referencia=referira.length;
  x=tpaciente_idpaciente.selectedIndex;
  embarazada = tpaciente_idpaciente.options[x].id;

   if(paciente!='')
    {
      if(embarazada=='0')
      {
        if(cantidad_examen>0)
        {
         $.ajax({   
              type: "POST",
              url:url,
              data:{tpaciente_idpaciente:paciente,operacion:'validar_examen'},
              success: function(datos){
                posibles_examenes=(3-datos);
                  if(datos==3)
                  {
                    alert("Este paciente ya cumplió con el limite de 3 examenes semestrales, no puede realizar otro.");
                    return false;
                  } 
                  else if(cantidad_examen>posibles_examenes)
                  {
                    alert("Este paciente puede realizar :"+posibles_examenes+" examenes.");
                    return false;
                  } 
                  else if(cantidad_examen<=posibles_examenes)
                  {
                    return true;
                  }
               }
          });
        }
        if(cantidad_referencia>0)
        {
         $.ajax({   
              type: "POST",
              url:url,
              data:{tpaciente_idpaciente:paciente,operacion:'validar_referencia'},
              success: function(datos){
                   posibles_referencias=(3-datos);
                  if(datos==3)
                  {
                    alert("Este paciente ya cumplió con el limite de 3 examenes semestrales, no puede realizar otro.");
                    return false;
                  } 
                  else if(cantidad_referencia>posibles_referencias)
                  {
                    alert("Este paciente puede realizar :"+posibles_referencias+" referencias.");
                    return false;
                  } 
                  else if(cantidad_referencia<=posibles_referencias)
                  {
                    return true;
                  }
               }
          });
        }
      }
      else
      {
        return true;
      }
    }
    else
    {
      alert("Por favor seleccione un paciente.");
      tpaciente_idpaciente.focus();

    }
}
</script>