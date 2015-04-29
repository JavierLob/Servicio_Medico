<!--
* Asignación de módulo = vista ; Permite asignar a los modulos a los roles.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<script type="text/javascript">
    function buscar_modulo(idrol)
    {
        window.location.href="intranet.php?vista=seguridad/asignar_modulo&id="+idrol;
    }
</script>
<h1 class="page-header">Asignar módulo</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras asignar los módulos  al rol que seleccione.
</div>
<form class="form" role="form" action="../control/c_rol.php" method="POST" name="form_servicio">
    <input type="hidden" value="asignar_modulo" name="operacion" />
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="cam_idrol">Rol <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Rol al cual se le asignarán los módulos."></i></strong></label>
              <select type="text" name="idrol" class="form-control" id="cam_idrol" onchange="buscar_modulo(this.value);" required>
                    <option value="">Seleccione un rol</option>
                    <?php
                        require_once('../modelo/m_rol.php');
                        $lobjRol=new clsrol;
                        $laroles=$lobjRol->consultar_roles();
                        for($i=0;$i<count($laroles);$i++)
                        {
                            if($laroles[$i][0]==$_GET['id'])
                            {
                                echo '<option value="'.$laroles[$i][0].'" selected>'.$laroles[$i][1].'</option>';
                            }
                            else
                            {
                                echo '<option value="'.$laroles[$i][0].'">'.$laroles[$i][1].'</option>';
                            }
                        }
                    ?>
              </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_iconomod">Posición <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Posición del módulo en el menú."><i class="fa fa-question" ></i></span></label>
                
            </div>
        </div>
    </div>
    <h3>Módulos</h3>
    <div class="row">
        <div class="col-md-6">

        <?php
            require_once('../modelo/m_modulo.php');
            $lobjModulo=new clsModulo;
            $laModulos=$lobjModulo->consultar_modulos();

            $lobjRol->set_Rol($_GET['id']);
            $laModulos_Rol=$lobjRol->consultar_modulos();
            for($i=0;$i<count($laModulos);$i++)
            {
                $cheked='';
                for($j=0;$j<count($laModulos_Rol);$j++)
                {
                    if($laModulos_Rol[$j][0]==$laModulos[$i][0])
                    {
                        $posicion=$laModulos_Rol[$j][3];
                        $cheked='checked';  
                        break;
                    }
                }
                
                echo '<div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>
                            <input type="checkbox" name="idmodulo[]" value="'.$laModulos[$i][0].'" '.$cheked.'>'.$laModulos[$i][1].'
                            </label>
                        </div>
                    </div>';                        
                    echo '<div class="col-md-3">
                            <div class="form-group">
                                <input class="form-control" type="number" min="1" max="'.count($laModulos).'" name="posicion[]" id="cam_posicion" value="'.$posicion.'" required/>
                            </div>
                        </div>
                    </div>';
            }
        ?>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=seguridad/asignacion';"><i class="fa fa-chevron-left"></i> Regresar</button>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-danger center-block" name="btn_enviar" onclick="return validar();" id="btn_enviar"><i class="fa fa-check" ></i> Aceptar</button>
      </div>
    </div>        
</form>
<script>
    function validar()
    {
        posicion=document.getElementsByName("posicion[]");
        for(i=0;i<posicion.length;i++)
        {
             if(posicion[i].value=='')
            {
                posicion[i].focus();
                alert("Por favor seleccione una posición para el módulo.");
                return false;
            }
            cont=0;
            for(j=0;j<posicion.length;j++)
            {
                if((posicion[i].value==posicion[j].value)&&(posicion[i].value!=''))
                    cont++;

                if(cont>=2)
                {
                    posicion[j].focus();
                    alert("La posición "+posicion[j].value+" ya está asignada, por favor seleccione una posición que no esté asignada.");
                    return false;                    
                }

            }

        }


        return true;      
    }
</script>
