<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_sede&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la sede seleccionada?"))
        {
          document.getElementById("cam_idtsede").value=id;
            document.getElementById("cam_estatus").value='0';
          document.form_sede.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la sede seleccionada?"))
        {
            document.getElementById("cam_idtsede").value=id;
            document.getElementById("cam_estatus").value='1';
            document.getElementById("cam_operacion").value='activar_sede';
            document.form_sede.submit();
        }
    }
</script>    
<h1 class="page-header">Sede</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las sedes del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_sede"><i class="fa fa-plus"></i> Registrar Sede</a>
<form role="form" class="form" action="../control/c_sede.php" method="POST" name="form_sede" role="form" class="form">
    <input type="hidden" value="eliminar_sede" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtsede" id="cam_idtsede"/>
    <input type="hidden"  name="estatus" id="cam_estatus"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Sede</th><th>Dirección</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_sede.php');
                $lobjSede=new claseSede;
                $laSede=$lobjSede->listar();
                for($i=0;$i<count($laSede);$i++)
                {
                    $estatus=($laSede[$i]['estatus']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laSede[$i]['idtsede'].'</td>';
                    echo '<td>'.$laSede[$i]['sede'].'</td>';
                    echo '<td>'.$laSede[$i]['direccionsede'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laSede[$i]['idtsede'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laSede[$i]['estatus']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laSede[$i]['idtsede'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laSede[$i]['estatus']=='0') OR ($laSede[$i]['estatus']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laSede[$i]['idtsede'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
