	
 <?php

 require_once('lib/config.php');
 require_once('lib/funciones.php');

 $act_id =get_param('act_id');
 $act_titulo =get_param('act_titulo');
 $act_contenido=$_POST['contenido'];
 $act_nivel=get_param('act_nivel');
 $act_parte_actua  =get_param('act_parte_actua');


  $sql = "insert into Pac_actividades values (";
  $sql.= "" .$act_id.",";
  $sql.= "'".$act_titulo."',";
  $sql.= "'".$act_contenido."',";
  $sql.=  "".$act_nivel.",";
  $sql.= "'".$act_parte_actua."')";
  $rs  = execute_sql($sql);

 echo "actividad creada con exito";


 ?>			


