<script>
    function buscar(id)
    {
        window.location.href="?vista=consulta/consultar_consulta&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la consulta seleccionada?"))
        {
          document.getElementById("cam_idtconsulta").value=id;
            document.getElementById("cam_estatusconsulta").value='0';
          document.form_consulta.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la consulta seleccionada?"))
        {
            document.getElementById("cam_idtconsulta").value=id;
            document.getElementById("cam_estatusconsulta").value='1';
            document.getElementById("cam_operacion").value='activar_consulta';
            document.form_consulta.submit();
        }
    }
</script>    
<h1 class="page-header">Reporte Consultas</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras ver las consultas diarias realizadas, y generar un archivo pdf con dicha información.
</div>
<form role="form" class="form" action="../control/c_consulta.php" method="POST" name="form_consulta">
    <input type="hidden" value="eliminar_consulta" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idconsulta" id="cam_idconsulta"/>
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="cam_consulta">Fecha <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Fecha de la consulta."></i></strong></label>
              <input type="text" name="fecha_consulta" class="form-control" id="cam_fecha_consulta" value="<?php echo date('d-m-Y');?>" required>
            </div>
        </div>
    </div>
</form>
