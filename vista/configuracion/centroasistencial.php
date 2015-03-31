<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_centroasistencial&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la tipo referencia seleccionada?"))
        {
          document.getElementById("cam_idtcentroasistencial").value=id;
          document.getElementById("cam_estatuscentroasistencial").value='0';
          document.form_centroasistencial.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la tipo referencia seleccionada?"))
        {
            document.getElementById("cam_idtcentroasistencial").value=id;
            document.getElementById("cam_operacion").value='activar_centroasistencial';
          document.getElementById("cam_estatuscentroasistencial").value='1';

            document.form_centroasistencial.submit();
        }
    }
</script>    
<h1 class="page-header">Centro Asistencial</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los Centros asistenciales del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_centroasistencial"><i class="fa fa-plus"></i> Registrar centro asistencial</a>
<form role="form" class="form" action="../control/c_centroasistencial.php" method="POST" name="form_centroasistencial">
    <input type="hidden" value="eliminar_centroasistencial" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtcentroasistencial" id="cam_idtcentroasistencial"/>
    <input type="hidden"  name="estatuscentroasistencial" id="cam_estatuscentroasistencial"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Centro asistencial</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_centroasistencial.php');
                $lobjCentroasistencial=new claseCentroasistencial;
                $laCentroasistenciales=$lobjCentroasistencial->listar();
                for($i=0;$i<count($laCentroasistenciales);$i++)
                {
                    $estatus=($laCentroasistenciales[$i]['estatuscentroasistencial']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laCentroasistenciales[$i]['idtcentroasistencial'].'</td>';
                    echo '<td>'.$laCentroasistenciales[$i]['nombrecentroasistencial'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laCentroasistenciales[$i]['idtcentroasistencial'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laCentroasistenciales[$i]['estatuscentroasistencial']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laCentroasistenciales[$i]['idtcentroasistencial'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($laCentroasistenciales[$i]['estatuscentroasistencial']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laCentroasistenciales[$i]['idtcentroasistencial'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
