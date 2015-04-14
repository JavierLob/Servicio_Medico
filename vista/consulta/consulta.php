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
<h1 class="page-header">Consulta</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las consultas del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=consulta/registrar_consulta"><i class="fa fa-plus"></i> Registrar consulta</a>
<form role="form" class="form" action="../control/c_consulta.php" method="POST" name="form_consulta" role="form" class="form">
    <input type="hidden" value="eliminar_consulta" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idconsulta" id="cam_idconsulta"/>
    <input type="hidden"  name="estatusconsulta" id="cam_estatusconsulta"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Paciente</th><th>C.I. / P</th><th>Fecha</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_consulta.php');
                $lobjConsulta=new claseConsulta;
                $laconsulta=$lobjConsulta->listar();
                for($i=0;$i<count($laconsulta);$i++)
                {
                    $estatus=($laconsulta[$i]['estatusconsulta']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laconsulta[$i]['idconsulta'].'</td>';
                    echo '<td>'.$laconsulta[$i]['primerapellido'].' '.$laconsulta[$i]['primernombre'].'</td>';
                    echo '<td>'.$laconsulta[$i]['nacionalidad'].' '.$laconsulta[$i]['cedulaopasaporte'].'</td>';
                    echo '<td>'.$laconsulta[$i]['fecha_consulta'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laconsulta[$i]['idconsulta'].')"><i class="fa fa-search icon-white"></i></a>';
                        echo ' <a class="btn-sm btn-success" target="_blank" href="../reporte/consulta.php?id='.$laconsulta[$i]['idconsulta'].'"  ><i class="fa fa-file-text-o"></i></a>';
                        
                        if($laconsulta[$i]['estatusconsulta']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laconsulta[$i]['idconsulta'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laconsulta[$i]['estatusconsulta']=='0') OR ($laconsulta[$i]['estatusconsulta']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laconsulta[$i]['idconsulta'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
