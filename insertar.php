	
<?php

require_once('lib/config.php');
require_once('lib/funciones.php');

$usu_cc =get_param('usu_cc');
$usu_nom =get_param('usu_nom');
$usu_ape=get_param('usu_ape');
$usu_gen=get_param('usu_gen');
$usu_fechan=get_param('usu_fechan');
$usu_mano_d=get_param('usu_mano_d');
$usu_estatura=get_param('usu_estatura');
$usu_peso =get_param('usu_peso');
$tus_id =get_param('tus_id');
$usu_login=get_param('usu_login');

$usu_clave=get_param('usu_clave');
$usu_clave_md5=md5($usu_clave);



  $sql = "insert into Pac_usuarios values (";
  $sql.= "".$usu_cc.",";
  $sql.= "'".$usu_nom."',";
  $sql.= "'".$usu_ape."',";
  $sql.= "'".$usu_gen."',";
  $sql.= "'".$usu_fechan."',";
  $sql.= "'".$usu_mano_d."',";
  $sql.= "'".$usu_estatura."',";
  $sql.= "'".$usu_peso."',";
  $sql.= "".$tus_id.",";
  $sql.= "'".$usu_login."',";
  $sql.= "'".$usu_clave_md5."')";
  $rs  = execute_sql($sql);
   
?>			


