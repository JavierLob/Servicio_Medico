<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_alergia&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la alergia seleccionada?"))
        {
          document.getElementById("cam_idalergia").value=id;
            document.getElementById("cam_estatusale").value='0';
          document.form_alergia.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la alergia seleccionada?"))
        {
            document.getElementById("cam_idalergia").value=id;
            document.getElementById("cam_estatusale").value='1';
            document.getElementById("cam_operacion").value='activar_alergia';
            document.form_alergia.submit();
        }
    }
</script>    
<h1 class="page-header">alergia</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las alergias del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_alergia"><i class="fa fa-plus"></i> Registrar alergia</a>
<form role="form" class="form" action="../control/c_alergia.php" method="POST" name="form_alergia" role="form" class="form">
    <input type="hidden" value="eliminar_alergia" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idalergia" id="cam_idalergia"/>
    <input type="hidden"  name="estatusale" id="cam_estatusale"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>alergia</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_alergia.php');
                $lobjAlergia=new claseAlergia;
                $laAlergia=$lobjAlergia->listar();
                for($i=0;$i<count($laAlergia);$i++)
                {
                    $estatus=($laAlergia[$i]['estatusale']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laAlergia[$i]['idalergia'].'</td>';
                    echo '<td>'.$laAlergia[$i]['nombreale'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laAlergia[$i]['idalergia'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laAlergia[$i]['estatusale']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laAlergia[$i]['idalergia'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laAlergia[$i]['estatusale']=='0') OR ($laAlergia[$i]['estatusale']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laAlergia[$i]['idalergia'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
