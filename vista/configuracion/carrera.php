<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_carrera&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la carrera seleccionada?"))
        {
          document.getElementById("cam_idtcarrera").value=id;
            document.getElementById("cam_estatuscarrera").value='0';
          document.form_carrera.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la carrera seleccionada?"))
        {
            document.getElementById("cam_idtcarrera").value=id;
            document.getElementById("cam_estatuscarrera").value='1';
            document.getElementById("cam_operacion").value='activar_carrera';
            document.form_carrera.submit();
        }
    }
</script>    
<h1 class="page-header">Carrera</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las carreras del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_carrera"><i class="fa fa-plus"></i> Registrar carrera</a>
<form role="form" class="form" action="../control/c_carrera.php" method="POST" name="form_carrera" role="form" class="form">
    <input type="hidden" value="eliminar_carrera" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtcarrera" id="cam_idtcarrera"/>
    <input type="hidden"  name="estatuscarrera" id="cam_estatuscarrera"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Carrera</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_carrera.php');
                $lobjCarrera=new claseCarrera;
                $laCarrera=$lobjCarrera->listar();
                for($i=0;$i<count($laCarrera);$i++)
                {
                    $estatus=($laCarrera[$i]['estatuscarrera']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laCarrera[$i]['idtcarrera'].'</td>';
                    echo '<td>'.$laCarrera[$i]['carrera'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laCarrera[$i]['idtcarrera'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laCarrera[$i]['estatuscarrera']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laCarrera[$i]['idtcarrera'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laCarrera[$i]['estatuscarrera']=='0') OR ($laCarrera[$i]['estatuscarrera']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laCarrera[$i]['idtcarrera'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
