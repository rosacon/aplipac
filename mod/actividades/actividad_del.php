  <?php

  require_once('lib/config.php');
  require_once('lib/funciones.php');

  if (isset($_GET['act_id'])) {

    $sql = "delete from Pac_actividades where act_id=" . $_GET['act_id'];
    $result = execute_sql($sql);
  }
  echo " actividad eliminada";
  header('location:page.php?op=16');
  ?>
