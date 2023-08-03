 <?php
  $sql = "select * from Pac_usuarios";
  $result = execute_sql($sql);
  ?>

 <table>
   <thead>
     <tr>
       <td>Nombre/ apellido </td>
       <td>Cedula C.C </td>
       <td>Genero </td>
       <td>Fecha nacimiento </td>
       <td>Modificar usuario </td>
   </thead>
   <tbody>
     <?php
      while ($reg = get_result_array($result)) {
      ?>
       <tr>
         <td><?php echo $reg['usu_nom'] . " "; ?><?php echo " " . $reg['usu_ape']; ?></td>
         <td><?php echo $reg['usu_cc']; ?> </td>
         <td><?php echo $reg['usu_gen']; ?> </td>
         <td><?php echo $reg['usu_fechan']; ?> </td>
         <td>
           <ul id="menu2">
             <li><a href="page.php?op=3&usu_cc=<?php echo $reg['usu_cc']; ?>">Eliminar </a></li>
             <li><a href="page.php?op=4&usu_cc=<?php echo $reg['usu_cc']; ?>">Editar </a></li>
           </ul>
         </td>
       </tr>
     <?php } ?>
   </tbody>
 </table>