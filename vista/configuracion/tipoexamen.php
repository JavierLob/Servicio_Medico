<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_tipoexamen&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la tipo referencia seleccionada?"))
        {
          document.getElementById("cam_idttipoexamen").value=id;
          document.getElementById("cam_estatustipoexamen").value='0';
          document.form_tipoexamen.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la tipo referencia seleccionada?"))
        {
            document.getElementById("cam_idttipoexamen").value=id;
            document.getElementById("cam_operacion").value='activar_tipoexamen';
          document.getElementById("cam_estatustipoexamen").value='1';

            document.form_tipoexamen.submit();
        }
    }
</script>    
<h1 class="page-header">Tipo examen</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los Tipo de examen del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_tipoexamen"><i class="fa fa-plus"></i> Registrar tipo examen</a>
<form role="form" class="form" action="../control/c_tipoexamen.php" method="POST" name="form_tipoexamen">
    <input type="hidden" value="eliminar_tipoexamen" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idttipoexamen" id="cam_idttipoexamen"/>
    <input type="hidden"  name="estatustipoexamen" id="cam_estatustipoexamen"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Tipo examen</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_tipoexamen.php');
                $lobjtipoexamen=new clasetipoexamen;
                $latipoexamens=$lobjtipoexamen->listar();
                for($i=0;$i<count($latipoexamens);$i++)
                {
                    $estatus=($latipoexamens[$i]['estatustipoexamen']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$latipoexamens[$i]['idttipoexamen'].'</td>';
                    echo '<td>'.$latipoexamens[$i]['tipoexamen'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$latipoexamens[$i]['idttipoexamen'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($latipoexamens[$i]['estatustipoexamen']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$latipoexamens[$i]['idttipoexamen'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($latipoexamens[$i]['estatustipoexamen']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$latipoexamens[$i]['idttipoexamen'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
