<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_discapacidad&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la discapacidad seleccionada?"))
        {
          document.getElementById("cam_idtdiscapacidad").value=id;
            document.getElementById("cam_estatusdiscapacidad").value='0';
          document.form_discapacidad.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la discapacidad seleccionada?"))
        {
            document.getElementById("cam_idtdiscapacidad").value=id;
            document.getElementById("cam_estatusdiscapacidad").value='1';
            document.getElementById("cam_operacion").value='activar_discapacidad';
            document.form_discapacidad.submit();
        }
    }
</script>    
<h1 class="page-header">Discapacidad</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las discapacidades del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_discapacidad"><i class="fa fa-plus"></i> Registrar discapacidad</a>
<form role="form" class="form" action="../control/c_discapacidad.php" method="POST" name="form_discapacidad" role="form" class="form">
    <input type="hidden" value="eliminar_discapacidad" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtdiscapacidad" id="cam_idtdiscapacidad"/>
    <input type="hidden"  name="estatusdiscapacidad" id="cam_estatusdiscapacidad"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Discapacidad</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_discapacidad.php');
                $lobDiscapacidad=new claseDiscapacidad;
                $laDiscapacidad=$lobDiscapacidad->listar();
                for($i=0;$i<count($laDiscapacidad);$i++)
                {
                    $estatus=($laDiscapacidad[$i]['estatusdiscapacidad']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laDiscapacidad[$i]['idtdiscapacidad'].'</td>';
                    echo '<td>'.$laDiscapacidad[$i]['discapacidad'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laDiscapacidad[$i]['idtdiscapacidad'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laDiscapacidad[$i]['estatusdiscapacidad']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laDiscapacidad[$i]['idtdiscapacidad'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laDiscapacidad[$i]['estatusdiscapacidad']=='0') OR ($laDiscapacidad[$i]['estatusdiscapacidad']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laDiscapacidad[$i]['idtdiscapacidad'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
