<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_laboratorio&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la tipo referencia seleccionada?"))
        {
          document.getElementById("cam_idtlaboratorio").value=id;
          document.getElementById("cam_estatuslaboratorio").value='0';
          document.form_laboratorio.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la tipo referencia seleccionada?"))
        {
            document.getElementById("cam_idtlaboratorio").value=id;
            document.getElementById("cam_operacion").value='activar_laboratorio';
          document.getElementById("cam_estatuslaboratorio").value='1';

            document.form_laboratorio.submit();
        }
    }
</script>    
<h1 class="page-header">Laboratorio</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los laboratorios del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_laboratorio"><i class="fa fa-plus"></i> Registrar Laboratorio</a>
<form role="form" class="form" action="../control/c_laboratorio.php" method="POST" name="form_laboratorio">
    <input type="hidden" value="eliminar_laboratorio" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtlaboratorio" id="cam_idtlaboratorio"/>
    <input type="hidden"  name="estatuslaboratorio" id="cam_estatuslaboratorio"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Laboratorio</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_laboratorio.php');
                $lobjLaboratorio=new claseLaboratorio;
                $laLaboratorios=$lobjLaboratorio->listar();
                for($i=0;$i<count($laLaboratorios);$i++)
                {
                    $estatus=($laLaboratorios[$i]['estatuslaboratorio']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laLaboratorios[$i]['idtlaboratorio'].'</td>';
                    echo '<td>'.$laLaboratorios[$i]['laboratorio'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laLaboratorios[$i]['idtlaboratorio'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laLaboratorios[$i]['estatuslaboratorio']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laLaboratorios[$i]['idtlaboratorio'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($laLaboratorios[$i]['estatuslaboratorio']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laLaboratorios[$i]['idtlaboratorio'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
