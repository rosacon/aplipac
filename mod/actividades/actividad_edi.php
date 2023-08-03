 <?php 
 require_once('lib/config.php');
 require_once('lib/funciones.php');
 require_once('fckeditor/fckeditor.php');

 $act_id        = get_param('act_id');

 $sql           = "select * from Pac_actividades where act_id=".$act_id;
 $result        = execute_sql($sql);


 while($row     = get_result_array($result)){
 ?>

 <form action="page.php?op=18" method="post">
 <fieldset>
 <legend>Actividad a  actualizar</legend>
 
 <div class="edi1">
 <label>cod actividad</label>
 <input type="text"  class="edi"        name="act_id"    value="<?php echo $row['act_id'];?>"/>   <br/>          </div>
 <input type="text"  class="edi" hidden name="act_idold" value="<?php echo $row['act_id'];?>"/>          </label>
 
 <div class="edi1">
 <label>Titulo
 </label>
 
 <input type="text"  class="edi" name="act_titulo"       value="<?php echo $row['act_titulo'];?>"/><br/>         </div>
 <div class="edi1">
 <label>contenido</label>
 <?php 
   $oFCKeditor = new FCKeditor('act_contenido');
   $oFCKeditor->BasePath = 'fckeditor/';
   $oFCKeditor->ToolbarSet = htmlspecialchars('Basic');
   $oFCKeditor->Value=$row['act_contenido'];
   $oFCKeditor->Create();
 ?>
 <br/></div>

 <div class="edi1">
 <label>nivel
 </label>
 <input type="text"  class="edi" name="act_nivel"      value="<?php echo $row['act_nivel'];?>" /><br/></div>

 <div class="edi1">
 <label>parte_actua
 </label>
 <input type="text" class="edi" name="act_parte_actua" value="<?php echo $row['act_parte_actua'];?>" /><br/></div>

 <?php 
 }
 ?>
 <input type="submit" class="edi2" name="enviar" value="Actualizar" />


 </form>
 </fieldset>

