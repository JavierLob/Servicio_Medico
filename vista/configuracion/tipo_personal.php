<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_tipo_personal&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el tipo de personal seleccionado?"))
        {
          document.getElementById("cam_idtipopersonal").value=id;
            document.getElementById("cam_estatuspersonal").value='0';
          document.form_tipo_personal.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el tipo de personal seleccionado?"))
        {
            document.getElementById("cam_idtipopersonal").value=id;
            document.getElementById("cam_estatuspersonal").value='1';
            document.getElementById("cam_operacion").value='activar_tipo_personal';
            document.form_tipo_personal.submit();
        }
    }
</script>    
<h1 class="page-header">Tipo personal</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los tipos de personal del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_tipo_personal"><i class="fa fa-plus"></i> Registrar Tipo personal</a>
<form role="form" class="form" action="../control/c_tipo_personal.php" method="POST" name="form_tipo_personal" role="form" class="form">
    <input type="hidden" value="eliminar_tipo_personal" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtipopersonal" id="cam_idtipopersonal"/>
    <input type="hidden"  name="estatuspersonal" id="cam_estatuspersonal"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Tipo personal</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_tipo_personal.php');
                $lobjTipopersonal=new claseTipopersonal;
                $laTipopersonal=$lobjTipopersonal->listar();
                for($i=0;$i<count($laTipopersonal);$i++)
                {
                    $estatus=($laTipopersonal[$i]['estatuspersonal']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laTipopersonal[$i]['idtipopersonal'].'</td>';
                    echo '<td>'.$laTipopersonal[$i]['tipopersonal'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laTipopersonal[$i]['idtipopersonal'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laTipopersonal[$i]['estatuspersonal']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laTipopersonal[$i]['idtipopersonal'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laTipopersonal[$i]['estatuspersonal']=='0') OR ($laTipopersonal[$i]['estatuspersonal']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laTipopersonal[$i]['idtipopersonal'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
