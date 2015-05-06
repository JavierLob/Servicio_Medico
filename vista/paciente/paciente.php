<script>
    function buscar(id)
    {
        window.location.href="?vista=paciente/consultar_paciente&id="+id;
    }
    
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el/la paciente seleccionado(a)?"))
        {
          document.getElementById("cam_idpaciente").value=id;
            document.getElementById("cam_estatuspaciente").value='0';
          document.form_paciente.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el/la paciente seleccionado(a)?"))
        {
            document.getElementById("cam_idpaciente").value=id;
            document.getElementById("cam_estatuspaciente").value='1';
            document.getElementById("cam_operacion").value='activar_paciente';
            document.form_paciente.submit();
        }
    }
</script>    
<h1 class="page-header">Paciente</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los pacientes del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=paciente/registrar_paciente"><i class="fa fa-plus"></i> Registrar Paciente</a>
<form role="form" class="form" action="../control/c_paciente.php" method="POST" name="form_paciente" role="form" class="form">
    <input type="hidden" value="eliminar_paciente" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idpaciente" id="cam_idpaciente"/>
    <input type="hidden"  name="estatuspaciente" id="cam_estatuspaciente"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Nro. Historia</th><th>Cédula / Pasaporte</th><th>Apellidos Nombres</th><th>Sexo</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_paciente.php');
                $lobjpaciente=new clasePaciente;
                $lapaciente=$lobjpaciente->listar();
                for($i=0;$i<count($lapaciente);$i++)
                {
                    $estatus=($lapaciente[$i]['estatuspaciente']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$lapaciente[$i]['inicial'].$lapaciente[$i]['idpaciente'].'</td>';
                    echo '<td>'.$lapaciente[$i]['cedulaopasaporte'].'</td>';
                    echo '<td>'.$lapaciente[$i]['primernombre'].' '.$lapaciente[$i]['segundonombre'].' '.$lapaciente[$i]['primerapellido'].' '.$lapaciente[$i]['segundoapellido'].'</td>';
                    echo '<td>'.$lapaciente[$i]['sexo'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$lapaciente[$i]['idpaciente'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($lapaciente[$i]['estatuspaciente']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$lapaciente[$i]['idpaciente'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($lapaciente[$i]['estatuspaciente']=='0') OR ($lapaciente[$i]['estatuspaciente']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$lapaciente[$i]['idpaciente'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
