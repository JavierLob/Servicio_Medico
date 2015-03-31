<script>
    function buscar(id)
    {
        window.location.href="?vista=configuracion/consultar_parroquia&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar la parroquia seleccionada?"))
        {
          document.getElementById("cam_idparroquia").value=id;
          document.getElementById("cam_estatusparroquia").value='0';
          document.form_parroquia.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar el parroquia seleccionada?"))
        {
            document.getElementById("cam_idparroquia").value=id;
            document.getElementById("cam_operacion").value='activar_parroquia';
          document.getElementById("cam_estatusparroquia").value='1';

            document.form_parroquia.submit();
        }
    }
</script>    
<h1 class="page-header">parroquia</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las parroquias del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<a class="btn btn-success" id="btn_registrar" href="?vista=configuracion/registrar_parroquia"><i class="fa fa-plus"></i> Registrar parroquia</a>
<form role="form" class="form" action="../control/c_parroquia.php" method="POST" name="form_parroquia">
    <input type="hidden" value="eliminar_parroquia" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idparroquia" id="cam_idparroquia"/>
    <input type="hidden"  name="estatusparroquia" id="cam_estatusparroquia"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>Parroquia</th><th>Municipio</th><th>Estado</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_parroquia.php');
                $lobjParroquia=new claseParroquia;
                $laParroquias=$lobjParroquia->listar();
                for($i=0;$i<count($laParroquias);$i++)
                {
                    $estatus=($laParroquias[$i]['estatusparroquia']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laParroquias[$i]['idparroquia'].'</td>';
                    echo '<td>'.$laParroquias[$i]['parroquia'].'</td>';
                    echo '<td>'.$laParroquias[$i]['municipio'].'</td>';
                    echo '<td>'.$laParroquias[$i]['estado'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                        echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laParroquias[$i]['idparroquia'].')"><i class="fa fa-search icon-white"></i></a>';
                        if($laParroquias[$i]['estatusparroquia']=='1')
                        {
                            echo ' <a class="btn-sm btn-danger" href="#" onclick="desactivar('.$laParroquias[$i]['idparroquia'].')" ><i class="fa fa-remove icon-white"></i></a>';

                        }
                        elseif ($laParroquias[$i]['estatusparroquia']=='0') 
                        {
                            echo ' <a class="btn-sm btn-warning" title="Restaurar" href="#" onclick="activar('.$laParroquias[$i]['idparroquia'].')" ><i class="fa fa-refresh icon-white"></i></a>';
                        }
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
