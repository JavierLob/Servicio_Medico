<script>
    function buscar(id)
    {
        window.location.href="?vista=consultar_etnia&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la etnia seleccionada?"))
        {
          document.getElementById("cam_idtetnia").value=id;
          document.getElementById("cam_estatusetnia").value='0';
          document.form_etnia.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la etnia seleccionada?"))
        {
            document.getElementById("cam_idtetnia").value=id;
            document.getElementById("cam_operacion").value='activar_etnia';
          document.getElementById("cam_estatusetnia").value='1';

            document.form_etnia.submit();
        }
    }
</script>    
<h1 class="page-header">Etnia</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las etnias del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=registrar_etnia"><i class="fa fa-plus"></i> Registrar Etnia</a>
<form role="form" class="form" action="../control/c_etnia.php" method="POST" name="form_etnia">
    <input type="hidden" value="eliminar_etnia" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtetnia" id="cam_idtetnia"/>
    <input type="hidden"  name="estatusetnia" id="cam_estatusetnia"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Etnia</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_etnia.php');
                $lobjEtnia=new claseEtnia;
                $laEtnias=$lobjEtnia->listar();
                for($i=0;$i<count($laEtnias);$i++)
                {
                    $estatus=($laEtnias[$i]['estatusetnia']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laEtnias[$i]['idtetnia'].'</td>';
                    echo '<td>'.$laEtnias[$i]['etnia'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laEtnias[$i]['idtetnia'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laEtnias[$i]['estatusetnia']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laEtnias[$i]['idtetnia'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($laEtnias[$i]['estatusetnia']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laEtnias[$i]['idtetnia'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
