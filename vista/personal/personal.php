<script>
    function buscar(id)
    {
        window.location.href="?vista=personal/consultar_personal&id="+id;
    }
    
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el/la personal seleccionado(a)?"))
        {
          document.getElementById("cam_idpersonal").value=id;
            document.getElementById("cam_estatuspersonal").value='0';
          document.form_personal.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el/la personal seleccionado(a)?"))
        {
            document.getElementById("cam_idpersonal").value=id;
            document.getElementById("cam_estatuspersonal").value='1';
            document.getElementById("cam_operacion").value='activar_personal';
            document.form_personal.submit();
        }
    }
</script>    
<h1 class="page-header">personal</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los personals del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=personal/registrar_personal"><i class="fa fa-plus"></i> Registrar personal</a>
<form role="form" class="form" action="../control/c_personal.php" method="POST" name="form_personal" role="form" class="form">
    <input type="hidden" value="eliminar_personal" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idpersonal" id="cam_idpersonal"/>
    <input type="hidden"  name="estatuspersonal" id="cam_estatuspersonal"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Nro. Historia</th><th>Cédula</th><th>Apellidos Nombres</th><th>Sexo</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_personal.php');
                $lobjpersonal=new clasepersonal;
                $lapersonal=$lobjpersonal->listar();
                for($i=0;$i<count($lapersonal);$i++)
                {
                    $estatus=($lapersonal[$i]['estatuspersonal']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$lapersonal[$i]['idpersonal'].'</td>';
                    echo '<td>'.$lapersonal[$i]['cedulaopasaporte'].'</td>';
                    echo '<td>'.$lapersonal[$i]['primernombre'].' '.$lapersonal[$i]['segundonombre'].' '.$lapersonal[$i]['primerapellido'].' '.$lapersonal[$i]['segundoapellido'].'</td>';
                    echo '<td>'.$lapersonal[$i]['sexo'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$lapersonal[$i]['idpersonal'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($lapersonal[$i]['estatuspersonal']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$lapersonal[$i]['idpersonal'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($lapersonal[$i]['estatuspersonal']=='0') OR ($lapersonal[$i]['estatuspersonal']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$lapersonal[$i]['idpersonal'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
