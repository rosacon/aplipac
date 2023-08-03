<?php
switch($op){
  case 2:
    include('mod/admin/admin_lst_usuarios.php');
  break;
  case 3:
    include('mod/usuarios/usuarios_del.php');
  break;
 case 4:
    include('mod/usuarios/usuarios_editar.php');
  break;
 case 5:
    include('mod/usuarios/usuarios_actualizar.php');
  break;
 case 6:
    include('mod/cuestionariome/cuestionariome_formucme.php');
  break;
 case 8:
    include('mod/listadechequeo/listadechequeo_formulc.php');
  break;
case 9:
    include('mod/listadechequeo/listadechequeo_rlc.php');
  break;
case 10:
    include('mod/cuestionariome/cuestionariome_rfcme.php');
  break;
case 11:
    include('mod/actividades/actividad_crear.php');
  break;
case 12:
    include('mod/admin/admin_lst_lc.php');
  break;
case 13:
    include('mod/admin/admin_lst_cme.php');
  break;
case 14:
    include('mod/actividades/actividad_del.php');
  break;
case 15:
    include('mod/actividades/actividad_rn.php');
  break;
case 16:
    include('mod/actividades/actividad_lst.php');
  break;
case 17:
    include('mod/actividades/actividad_edi.php');
  break;
case 18:
    include('mod/actividades/actividad_act.php');
  break;
case 21:
    include('mod/encriptar/encryptar.php');
  break;
case 22:
    include('insertar.php');
  break;
  default:
include('mod/html/aplipac.html');
     
  break;
}
?>
