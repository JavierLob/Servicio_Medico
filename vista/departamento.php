<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_departamento&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el departamento seleccionado?"))
        {
          document.getElementById("cam_iddepartamento").value=id;
            document.getElementById("cam_estatusdepartamento").value='0';
          document.form_departamento.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el departamento seleccionado?"))
        {
            document.getElementById("cam_iddepartamento").value=id;
            document.getElementById("cam_estatusdepartamento").value='1';
            document.getElementById("cam_operacion").value='activar_departamento';
            document.form_departamento.submit();
        }
    }
</script>    
<h1 class="page-header">Departamento</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los Departamentos del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_departamento"><i class="fa fa-plus"></i> Registrar Departamento</a>
<form role="form" class="form" action="../control/c_departamento.php" method="POST" name="form_departamento" role="form" class="form">
    <input type="hidden" value="eliminar_departamento" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento"/>
    <input type="hidden"  name="estatusdepartamento" id="cam_estatusdepartamento"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Departamento</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_departamento.php');
                $lobjDepartamento=new claseDepartamento;
                $laDepartamento=$lobjDepartamento->listar();
                for($i=0;$i<count($laDepartamento);$i++)
                {
                    $estatus=($laDepartamento[$i]['estatusdepartamento']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laDepartamento[$i]['iddepartamento'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['departamento'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laDepartamento[$i]['iddepartamento'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laDepartamento[$i]['estatusdepartamento']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laDepartamento[$i]['iddepartamento'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laDepartamento[$i]['estatusdepartamento']=='0') OR ($laDepartamento[$i]['estatusdepartamento']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laDepartamento[$i]['iddepartamento'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
