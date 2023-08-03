
 <?php 

 require_once('lib/config.php');
 require_once('lib/funciones.php');

 echo $_GET['usu_cc'];
 $sql = "select * FROM Pac_usuarios WHERE usu_cc=". $_GET['usu_cc'];
 $result = execute_sql($sql);

 while($row = get_result_array($result)){
 ?>

 <form action="page.php?op=5" method="post">
 <fieldset>
 <legend>Datos a actualizar</legend>
 
 <div class="edi1">
 <label>Cedula</label>
 <input  type="text"  class="edi" name="usu_cc"           value="<?php echo $row['usu_cc'];?>" /><br/></div>
 <input  type="text"  class="edi" hidden name="usu_ccold" value="<?php echo $row['usu_cc'];?>" /></label>
 
 <div class="edi1">
 <label>Nombre</label>
 <input type="text"   class="edi"  name="usu_nom"          value="<?php echo $row['usu_nom'];?>" /><br/></div>
 
 <div class="edi1">
 <label>apellido</label>
 <input type="text"    class="edi" name="usu_ape"          value="<?php echo $row['usu_ape'];?>" /><br/></div>
 
 <div class="edi1">
 <label>genero</label>
 <input type="text"  class="edi"  name="usu_gen"          value="<?php echo $row['usu_gen'];?>" /><br/></div>
 
 <div class="edi1">
 <label>fecha nacimiento</label>
 <input type="text" class="edi" name="usu_fechan"         value="<?php echo $row['usu_fechan'];?>" /><br/></div>
 
 <div class="edi1">
 <label>mano dominante</label>
 <input type="text" class="edi" name="usu_mano_d"         value="<?php echo $row['usu_mano_d'];?>" /><br/></div>
 
 <div class="edi1">
 <label>estatura</label>
 <input type="text" class="edi" name="usu_estatura"       value="<?php echo $row['usu_estatura'];?>" /><br/></div>
 
 <div class="edi1">
 <label>peso</label>
 <input type="text"  class="edi" name="usu_peso"          value="<?php echo $row['usu_peso'];?>" /><br/></div>
 
 <div class="edi1">
 <label>tipo usuario</label>
 <input type="text" class="edi" name="tus_id"             value="<?php echo $row['tus_id'];?>" /><br/></div><?}?>
 <input type="submit" class="edi2" name="enviar" value="Actualizar" />


 </form>
 </fieldset>

