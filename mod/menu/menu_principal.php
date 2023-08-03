<?php

require_once('lib/config.php');
require_once('lib/funciones.php');

$op=$_SESSION['tusid'];


switch($op){
case 1:
include('mod/menu/menu_admin.php');
break;

case 2:
include('mod/menu/menu_usuarios.php');
break;

default:
echo "TENEMOS PROBLEMAS MENU APLIPAC"; 
break;
}



?>




 


       
 




