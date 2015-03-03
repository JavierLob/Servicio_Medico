<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_estado&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el estado seleccionada?"))
        {
          document.getElementById("cam_idestado").value=id;
          document.getElementById("cam_estatusestado").value='0';
          document.form_estado.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el estado seleccionada?"))
        {
            document.getElementById("cam_idestado").value=id;
            document.getElementById("cam_operacion").value='activar_estado';
          document.getElementById("cam_estatusestado").value='1';

            document.form_estado.submit();
        }
    }
</script>    
<h1 class="page-header">Estado</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los estados del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_estado"><i class="fa fa-plus"></i> Registrar estado</a>
<form role="form" class="form" action="../control/c_estado.php" method="POST" name="form_estado">
    <input type="hidden" value="eliminar_estado" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idestado" id="cam_idestado"/>
    <input type="hidden"  name="estatusestado" id="cam_estatusestado"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>estado</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_estado.php');
                $lobjEstado=new claseEstado;
                $laEstados=$lobjEstado->listar();
                for($i=0;$i<count($laEstados);$i++)
                {
                    $estatus=($laEstados[$i]['estatusestado']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laEstados[$i]['idestado'].'</td>';
                    echo '<td>'.$laEstados[$i]['estado'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laEstados[$i]['idestado'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laEstados[$i]['estatusestado']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laEstados[$i]['idestado'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($laEstados[$i]['estatusestado']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laEstados[$i]['idestado'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
