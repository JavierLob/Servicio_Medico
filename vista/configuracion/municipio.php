<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_municipio&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el municipio seleccionada?"))
        {
          document.getElementById("cam_idtmunicipio").value=id;
          document.getElementById("cam_statusmunicipio").value='0';
          document.form_municipio.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el municipio seleccionada?"))
        {
            document.getElementById("cam_idtmunicipio").value=id;
            document.getElementById("cam_operacion").value='activar_municipio';
          document.getElementById("cam_statusmunicipio").value='1';

            document.form_municipio.submit();
        }
    }
</script>    
<h1 class="page-header">municipio</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los municipios del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_municipio"><i class="fa fa-plus"></i> Registrar municipio</a>
<form role="form" class="form" action="../control/c_municipio.php" method="POST" name="form_municipio">
    <input type="hidden" value="eliminar_municipio" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtmunicipio" id="cam_idtmunicipio"/>
    <input type="hidden"  name="statusmunicipio" id="cam_statusmunicipio"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Municipio</th><th>Estado</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_municipio.php');
                $lobjmunicipio=new claseMunicipio;
                $lamunicipios=$lobjmunicipio->listar();
                for($i=0;$i<count($lamunicipios);$i++)
                {
                    $estatus=($lamunicipios[$i]['statusmunicipio']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$lamunicipios[$i]['idtmunicipio'].'</td>';
                    echo '<td>'.$lamunicipios[$i]['municipio'].'</td>';
                    echo '<td>'.$lamunicipios[$i]['estado'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$lamunicipios[$i]['idtmunicipio'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($lamunicipios[$i]['statusmunicipio']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$lamunicipios[$i]['idtmunicipio'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($lamunicipios[$i]['statusmunicipio']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$lamunicipios[$i]['idtmunicipio'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
