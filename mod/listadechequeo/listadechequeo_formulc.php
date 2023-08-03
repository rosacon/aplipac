 <?php
 require_once('lib/config.php');
 require_once('lib/funciones.php');
 ?>

 <form method="post" action="page.php?op=9" id="chequeo">

 <h1><center>LISTA DE CHEQUEO
     </center>
 
 </h1>
  
 <section id="listaA">A continuación encontrará una serie de preguntas las cuales debe responder 
 teniendo en cuenta que:
 <br>
 1.Las preguntas estan clasificadas por grupos en donde solo puede escoger una opción por grupo.
 <br>
 2.Los grupos de preguntas estan clasificados así: grupo1(2-6),grupo2(7-13),grupo3(14-18), grupo4(19-21), grupo5(22-24), grupo6(25-32).
 </section>
 <br>
 <table>
 <thead>
 <tr>
 <td>c</td>
 <td>Chequeo para observar estado actual de salud. </td>
 <td>opcion</td>
 <td>N°pregunta</td>
 </tr>
 </thead>
 <tbody>

 <?php 

 $registro = "select * from Pac_pregunta";
 $result1 = execute_sql($registro);
 
 while($reg = get_result_array($result1))
 {
 if($reg['pre_tipo']==1){
 ?>
 
 <tr>
    <td>                                          <?php  echo $reg['pre_id'] ."<br><br>";?>       </td>
    <td>                                          <?php  echo $reg['pre_nom']."<br><br>";?>       </td>
    <td><input type="radio" name="rta1"    value="<?php echo $reg['pre_valor']          ;?>"/>    </td>
    <td><input type="radio" name="pre_id1" value="<?php echo $reg['pre_id']             ;?>"/>    </td>

 </tr>

 <?php
 } 

 if($reg['pre_tipo']==2){

 ?>
          
 <tr>
 <td>                                            <?php  echo $reg['pre_id']. "<br><br>";?>       </td>
 <td>                                            <?php  echo $reg['pre_nom']."<br><br>";?>       </td>
 <td><input type="radio" name="rta2"      value="<?php  echo $reg['pre_valor']         ;?>"/>    </td>
 <td><input type="radio" name="pre_id2"   value="<?php  echo $reg['pre_id']            ;?>"/>    </td>

 </tr>
 <?php
 }

 if($reg['pre_tipo']==3){
 ?>

 <tr>
 <td>                                            <?php  echo $reg['pre_id'].  "<br><br>";?>       </td>
 <td>                                            <?php  echo $reg['pre_nom']. "<br><br>";?>       </td>
 <td><input type="radio" name="rta3"      value="<?php  echo $reg['pre_valor']          ;?>"/>    </td>
 <td><input  type="radio" name="pre_id3"  value="<?php  echo $reg['pre_id']             ;?>"/>    </td>

 </tr>
 <?php
 }
 if($reg['pre_tipo']==4){
 ?>
  
 <tr>
 <td>                                           <?php  echo $reg['pre_id'].    "<br><br>";?>       </td>
 <td>                                           <?php  echo $reg['pre_nom'].   "<br><br>";?>       </td>
 <td><input type="radio" name="rta4"     value="<?php  echo $reg['pre_valor']            ;?>"/>    </td>
 <td><input  type="radio" name="pre_id4" value="<?php  echo $reg['pre_id']               ;?>"/>    </td>

 </tr>
 <?php
 }
 if($reg['pre_tipo']==5){
 ?>
      
 <tr>
 <td>                                          <?php  echo $reg['pre_id'].    "<br><br>";?>       </td>
 <td>                                          <?php  echo $reg['pre_nom'].   "<br><br>";?>       </td>
 <td><input type="radio" name="rta5"    value="<?php  echo $reg['pre_valor']            ;?>"/>    </td>
 <td><input type="radio" name="pre_id5" value="<?php  echo $reg['pre_id']               ;?>"/>    </td> 

 </tr>
 <?php
 }


 
 if($reg['pre_tipo']==6){
 ?>
      
 <tr>
 <td>                                          <?php echo $reg['pre_id'].     "<br><br>";?>       </td>
 <td>                                          <?php echo $reg['pre_nom'].    "<br><br>";?>       </td>
 <td><input type="radio" name="rta6"    value="<?php echo $reg['pre_valor']             ;?>"/>    </td>
 <td><input type="radio" name="pre_id6" value="<?php echo $reg['pre_id']                ;?>"/>    </td>

 </tr>
 <?php
 }}
 ?>

 </table>
 <input class="lista2" type="submit" value="Enviar"/>
 </form>
