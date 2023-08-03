
 <?php

 require_once('lib/config.php');
 require_once('lib/funciones.php');

 if(isset($_GET['usu_cc'])){

 $sql = "delete from Pac_usuarios where usu_cc=".$_GET['usu_cc'];
 $result = execute_sql($sql);
 }

 header("Location: page.php?op=2");
 ?>
