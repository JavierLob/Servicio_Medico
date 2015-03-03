<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_tiporeferencia&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la tipo referencia seleccionada?"))
        {
          document.getElementById("cam_idtiporeferencia").value=id;
          document.getElementById("cam_estatusreferencia").value='0';
          document.form_tiporeferencia.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la tipo referencia seleccionada?"))
        {
            document.getElementById("cam_idtiporeferencia").value=id;
            document.getElementById("cam_operacion").value='activar_tiporeferencia';
          document.getElementById("cam_estatusreferencia").value='1';

            document.form_tiporeferencia.submit();
        }
    }
</script>    
<h1 class="page-header">Tipo referencia</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las Tipo referencias del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_tiporeferencia"><i class="fa fa-plus"></i> Registrar tiporeferencia</a>
<form role="form" class="form" action="../control/c_tiporeferencia.php" method="POST" name="form_tiporeferencia">
    <input type="hidden" value="eliminar_tiporeferencia" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtiporeferencia" id="cam_idtiporeferencia"/>
    <input type="hidden"  name="estatusreferencia" id="cam_estatusreferencia"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Tipo referencia</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_tiporeferencia.php');
                $lobjTiporeferencia=new claseTiporeferencia;
                $laTiporeferencias=$lobjTiporeferencia->listar();
                for($i=0;$i<count($laTiporeferencias);$i++)
                {
                    $estatus=($laTiporeferencias[$i]['estatusreferencia']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laTiporeferencias[$i]['idtiporeferencia'].'</td>';
                    echo '<td>'.$laTiporeferencias[$i]['tiporeferencia'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laTiporeferencias[$i]['idtiporeferencia'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laTiporeferencias[$i]['estatusreferencia']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laTiporeferencias[$i]['idtiporeferencia'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($laTiporeferencias[$i]['estatusreferencia']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laTiporeferencias[$i]['idtiporeferencia'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
