<?php


require_once('lib/config.php');
require_once('lib/funciones.php');

$nick = 'ana';

$clave = 'luna';
$clave_md5 = md5($clave);


/*

$sql = "select * from Pac_usuarios where usu_login='".$nick."' AND usu_clave='".$clave."'";
$clave = crypt_blowfish_bycarluys('usu_clave');
$result = execute_sql($sql);

$row = get_result_array($result);
*/
?>

<form action="page.php?op=22" method="post">
    <fieldset>
        <legend>Datos a insertar</legend>
        <div class="edi1">
            <label>Cedula</label>
            <input type="text" class="edi" name="usu_cc" value="" /><br />
        </div>

        <div class="edi1">
            <label>Nombre</label>
            <input type="text" class="edi" name="usu_nom" value="" /><br />
        </div>

        <div class="edi1">
            <label>apellido</label>
            <input type="text" class="edi" name="usu_ape" value="" /><br />
        </div>

        <div class="edi1">
            <label>genero</label>
            <input type="text" class="edi" name="usu_gen" value="" /><br />
        </div>

        <div class="edi1">
            <label>fecha nacimiento</label>
            <input type="text" class="edi" name="usu_fechan" value="" /><br />
        </div>

        <div class="edi1">
            <label>mano dominante</label>
            <input type="text" class="edi" name="usu_mano_d" value="" /><br />
        </div>

        <div class="edi1">
            <label>estatura</label>
            <input type="text" class="edi" name="usu_estatura" value="" /><br />
        </div>

        <div class="edi1">
            <label>peso</label>
            <input type="text" class="edi" name="usu_peso" value="" /><br />
        </div>

        <div class="edi1">
            <label>tipo usuario</label>
            <input type="text" class="edi" name="tus_id" value="" /><br />
        </div>
        <div class="edi1">
            <label>login</label>
            <input type="text" class="edi" name="usu_login" value="" /><br />
        </div>

        <div class="edi1">
            <label>contraseña</label>
            <input type="password" class="edi" name="usu_clave" value="" /><br />
        </div>

        <input type="submit" class="edi2" name="enviar" value="Registrar" />


</form>
</fieldset>