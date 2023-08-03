
 <?php
 require_once('lib/config.php');
 require_once('lib/funciones.php');

 if(isset($_SESSION['uid'])){

 $sql    = "delete from Pac_lista_chequeo where usu_cc=".$_SESSION['uid'];
 $result = execute_sql($sql);

 $factor_recuperacion    = $_POST['rta1'];
 $factor_frecuencia      = $_POST['rta2'];
 $factor_postura_hombro  = $_POST['rta3'];
 $factor_postura_codo    = $_POST['rta4'];
 $factor_postura_munecas = $_POST['rta5'];
 $multiplicador_duracion = $_POST['rta6'];

 $respuesta=array($factor_recuperacion,$factor_frecuencia ,$factor_postura_hombro,$factor_postura_codo,$factor_postura_munecas,$multiplicador_duracion);


 $pre_id1 = $_POST['pre_id1'];
 $pre_id2 = $_POST['pre_id2'];
 $pre_id3 = $_POST['pre_id3'];
 $pre_id4 = $_POST['pre_id4'];
 $pre_id5 = $_POST['pre_id5'];
 $pre_id6 = $_POST['pre_id6'];
 
 $pre_id=array ($pre_id1,$pre_id2,$pre_id3,$pre_id4,$pre_id5,$pre_id6);
 $usu_cc=$_SESSION['uid'];
 $pre_id=array ($pre_id1,$pre_id2,$pre_id3,$pre_id4,$pre_id5,$pre_id6);


 foreach($respuesta as $keyrespuesta => $rowrespuesta){

  $sql  = "insert into Pac_lista_chequeo values (";
  $sql .= "" .$usu_cc.",                         ";
  $sql .= "'".$rowrespuesta.                  "',";
  $sql .= "null,                                 ";
  $sql .= "" .$pre_id[$keyrespuesta].          ")";
  $rs   = execute_sql($sql)                       ;
  
 }}

 $factor_postura=max($factor_postura_hombro,$factor_postura_codo,$factor_postura_munecas);

 $indice_check_list_OCRA=($factor_recuperacion+$factor_frecuencia+$factor_postura)* $multiplicador_duracion;
 ?>

 <br><br><br>

 <?php
 if($indice_check_list_OCRA<=5){
 ?>
 <center>
 <img src="css/img/nivel1.png"/>
 </center>

 <?php
 }
 if($indice_check_list_OCRA>5 and $indice_check_list_OCRA<=7.5){
 ?>
 <center>
 <img src="css/img/nivel2.png"/>
 </center>
 <?php
 }

 if($indice_check_list_OCRA>7.5 and $indice_check_list_OCRA<=11){
 ?>
 <center>
 <img src="css/img/nivel3.png"/>
 </center>
 <?php
 }
 if($indice_check_list_OCRA>11 and $indice_check_list_OCRA<=14){
 ?>
 <center>
 <img src="css/img/nivel4.png"/>
 </center>
 <?php
 }

 if($indice_check_list_OCRA>14 and $indice_check_list_OCRA<=22.5){
 ?>
 <center>
 <img src="css/img/nivel5.png"/> 
 </center>
 <?php
 }

 if($indice_check_list_OCRA>22.5){
 ?>
 <center><img src="css/img/nivel6.png" /></center>
 <?php
 }

 ?>
	
 <table>
 <thead>
 <tr><td>Resultados Indice_check_list_OCRA   </td><td>Puntos</td></tr>
 </thead>

 <tr><td>Factor de Recuperación              </td><td><?php  echo $factor_recuperacion;    ?></td></tr>
 <tr><td>Factor de Frecuencia                </td><td><?php  echo $factor_frecuencia;      ?></td></tr>
 <tr><td>Factor de Postura Hombro            </td><td><?php  echo $factor_postura_hombro;  ?></td></tr>
 <tr><td>Factor de Postura Codo              </td><td><?php  echo $factor_postura_codo;    ?></td></tr>
 <tr><td>Factor de Postura Muñecas           </td><td><?php  echo $factor_postura_munecas; ?></td></tr>
 <tr><td>Multiplicador de Duración           </td><td><?php  echo $multiplicador_duracion; ?></td></tr><br><br>
 <tr><td><h1>Indice Check_list_OCRA </h1>    </td><td><?php  echo $indice_check_list_OCRA; ?></td></tr>

 </table>


 <?php
  if($indice_check_list_OCRA>7.5){
  ?>
  <center>
  <ul id="menu1">
                 <li><a href="page.php?op=6">Presentar Nuevo Analisis</a></li>
  </ul></center>
 <?php }?>

















 


 



