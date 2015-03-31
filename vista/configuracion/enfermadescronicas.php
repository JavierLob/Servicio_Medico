<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_enfermedadescronicas&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar las enfermedades cronicas seleccionadas?"))
        {
          document.getElementById("cam_idtenfermedadescronicas").value=id;
            document.getElementById("cam_estatusenfermedad").value='0';
          document.form_enfermedadescronicas.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el enfermedades cronicas seleccionado?"))
        {
            document.getElementById("cam_idtenfermedadescronicas").value=id;
            document.getElementById("cam_estatusenfermedad").value='1';
            document.getElementById("cam_operacion").value='activar_enfermedadescronicas';
            document.form_enfermedadescronicas.submit();
        }
    }
</script>    
<h1 class="page-header">Enfermedades</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las enfermedades cronicas del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_enfermedadescronicas"><i class="fa fa-plus"></i> Registrar enfermedad cronica</a>
<form role="form" class="form" action="../control/c_enfermedadescronicas.php" method="POST" name="form_enfermedadescronicas" role="form" class="form">
    <input type="hidden" value="eliminar_enfermedadescronicas" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtenfermedadescronicas" id="cam_idtenfermedadescronicas"/>
    <input type="hidden"  name="estatusenfermedadescronicas" id="cam_estatusenfermedadescronicas"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Enfermedades</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_enfermedadescronicas.php');
                $lobjEnfermedadescronicas=new claseEnfermedadesCronicas;
                $laEnfermedadesCronicas=$lobjEnfermedadescronicas->listar();
                for($i=0;$i<count($laEnfermedadesCronicas);$i++)
                {
                    $estatus=($laEnfermedadesCronicas[$i]['estatusenfermedadescronicas']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laEnfermedadesCronicas[$i]['idtenfermedadescronicas'].'</td>';
                    echo '<td>'.$laEnfermedadesCronicas[$i]['enfermedacronica'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laEnfermedadesCronicas[$i]['idtenfermedadescronicas'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laEnfermedadesCronicas[$i]['estatusenfermedad']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laEnfermedadesCronicas[$i]['idtenfermedadescronicas'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif (($laEnfermedadesCronicas[$i]['estatusenfermedad']=='0') OR ($laEnfermedadesCronicas[$i]['estatusenfermedad']==0) )
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laEnfermedadesCronicas[$i]['idtenfermedadescronicas'].')" ><i class="fa fa-refresh fa-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
