 <?php
  require_once('lib/config.php');
  require_once('lib/funciones.php');

  $sql = "select * from Pac_lista_chequeo";
  $result = execute_sql($sql);
  ?>

 <table>
   <thead>
     <tr>
       <td>cedula</td>
       <td>rta</td>
       <td>cod_lista</td>
       <td>cod pregunta</td>
   </thead>
   </tr>
   <?php

    while ($reg = get_result_array($result)) {

    ?>
     <tr>
       <td> <?php echo $reg['usu_cc'] . " ";     ?></td>


       <td> <?php echo $reg['lista_respuesta']; ?></td>


       <td> <?php echo $reg['lista_cod_lc'];   ?></td>


       <td> <?php echo $reg['pre_id'];         ?></td>


     </tr>
   <?php

    }

    ?>

 </table>