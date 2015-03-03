<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_tipo_paciente&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el tipo de paciente seleccionado?"))
        {
          document.getElementById("cam_idttipopaciente").value=id;
            document.getElementById("cam_estatuspaciente").value='0';
          document.form_tipo_paciente.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el tipo de paciente seleccionado?"))
        {
            document.getElementById("cam_idttipopaciente").value=id;
            document.getElementById("cam_estatuspaciente").value='1';
            document.getElementById("cam_operacion").value='activar_tipo_paciente';
            document.form_tipo_paciente.submit();
        }
    }
</script>    
<h1 class="page-header">Tipo Paciente</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los tipos de paciente del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_tipo_paciente"><i class="fa fa-plus"></i> Registrar Tipo Paciente</a>
<form role="form" class="form" action="../control/c_tipo_paciente.php" method="POST" name="form_tipo_paciente" role="form" class="form">
    <input type="hidden" value="eliminar_tipo_paciente" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idttipopaciente" id="cam_idttipopaciente"/>
    <input type="hidden"  name="estatuspaciente" id="cam_estatuspaciente"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Tipo Paciente</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_tipo_paciente.php');
                $lobjTipoPaciente=new claseTipoPaciente;
                $laTipoPaciente=$lobjTipoPaciente->listar();
                for($i=0;$i<count($laTipoPaciente);$i++)
                {
                    $estatus=($laTipoPaciente[$i]['estatuspaciente']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laTipoPaciente[$i]['idttipopaciente'].'</td>';
                    echo '<td>'.$laTipoPaciente[$i]['tipopaciente'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laTipoPaciente[$i]['idttipopaciente'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laTipoPaciente[$i]['estatuspaciente']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laTipoPaciente[$i]['idttipopaciente'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laTipoPaciente[$i]['estatuspaciente']=='0') OR ($laTipoPaciente[$i]['estatuspaciente']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laTipoPaciente[$i]['idttipopaciente'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
