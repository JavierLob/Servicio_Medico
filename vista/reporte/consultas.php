   
<h1 class="page-header">Listado de Consultas</h1>
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras emitir un reporte de una consulta del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<form role="form" class="form" action="../control/c_consulta.php" method="POST" name="form_consulta" role="form" class="form">
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
            <th>Id</th><th>consulta</th><th>Estatus</th><th>Operación</th>
        </thead>
        <tbody>
        <?php
                require_once('../modelo/m_consulta.php');
                $lobjConsulta=new claseConsulta;
                $laconsulta=$lobjConsulta->listar();
                for($i=0;$i<count($laconsulta);$i++)
                {
                    $estatus=($laconsulta[$i]['estatusconsulta']==1)?'Activo':'Inactivo';
                    echo '<tr>';
                    echo '<td>'.$laconsulta[$i]['idconsulta'].'</td>';
                    echo '<td>'.$laconsulta[$i]['fecha_consulta'].'</td>';
                    echo '<td>'.$estatus.'</td>';
                    echo '<td>';
                            echo ' <a class="btn-sm btn-success" target="_blank" href="../reporte/consulta.php?id='.$laconsulta[$i]['idconsulta'].'"  ><i class="fa fa-file-text-o"></i></a>';
                       
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
