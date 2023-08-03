<?php
session_start();

require_once('lib/config.php');
require_once('lib/funciones.php');

$nick = get_param('usu_login');

$clave = get_param('usu_clave');
$clave_md5=md5($clave);

$sql = "select * from Pac_usuarios where usu_login='".$nick."' AND usu_clave='".$clave_md5."'";
$result = execute_sql($sql);

$row = get_result_array($result);

if( count_records($result) == 1 ) {

$_SESSION['sid'] = session_id();
$_SESSION['uid'] = $row['usu_cc']; 
$_SESSION['tusid'] = $row['tus_id']; 
$_SESSION['uname'] =$row['usu_nom']." ".$row['usu_ape']; 

header('location:page.php');
       
} 

else {
 
header('location:index.php');
}

?>





