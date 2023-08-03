 <?php
 require_once('lib/config.php');
 require_once('lib/funciones.php');

 if(isset($_GET['usu_cc'])){

 $sql = "DELETE FROM Pac_usuarios WHERE usu_cc=".$_GET['usu_cc'];
 $result = execute_sql($sql);

 }
 header('location:page.php?op=2');
 ?>
