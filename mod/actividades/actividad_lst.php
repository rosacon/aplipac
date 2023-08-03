 <?php

       require_once('lib/config.php');
       require_once('lib/funciones.php');

       $sql = "select * from Pac_actividades";
       $result = execute_sql($sql);

       ?>
 <table>
        <thead>
               <tr>
                      <td><b>Titulo actividad </td>
                      <td><b>Contenido </td>
                      <td><b>Nivel </td>
                      <td><b>Lugar actua </td>
                      <td><b>Modificar actividad </td>
               </tr>
        </thead>
        <tbody>
               <?

                     while ($reg = get_result_array($result)) {


                     ?>
                      <tr>
                             <td>
                                    <?php echo $reg['act_titulo']; ?> </td>
                             <td>
                                    <?php echo $reg['act_contenido']; ?> </td>
                             <td>
                                    <?php echo $reg['act_nivel']; ?> </td>
                             <td>
                                    <?php echo $reg['act_parte_actua']; ?> </td>

                             <td>
                                    <ul id="menu2">

                                           <li><a href="page.php?op=14&act_id=<?php echo $reg['act_id']; ?>">
                                                         Eliminar </a></li>

                                           <li><a href="page.php?op=17&act_id=<?php echo $reg['act_id']; ?>">
                                                         Editar</a></li>
                                    </ul>
                             </td>
                      </tr>
               <?

                     }
                     ?>



 </table>