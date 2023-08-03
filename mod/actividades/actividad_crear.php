<?php require_once('fckeditor/fckeditor.php'); ?>

<form id="editor" method="POST" action="page.php?op=15">
    <h1>
        <center>ACTIVIDADES</center>
    </h1>
    <b>Codigo Actividad </b>
    <div class="item"> <input class="input" type="text" name="act_id" value=""> <br> </div>
    <b>Nombre Actividad </b>
    <div class="item"> <input class="input" type="text" name="act_titulo" value=""><br></div>
    <br><b> Contenido </b>
    <div class="item">

        <?php $oFCKeditor = new FCKeditor('contenido');
        $oFCKeditor->BasePath = 'fckeditor/';
        $oFCKeditor->ToolbarSet = htmlspecialchars('Basic');
        $oFCKeditor->Value = '';
        $oFCKeditor->Create();
        ?> </div>
    <b>Nivel del Riesgo</b> <select name="act_nivel">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select><br><br>
    <b>Parte del Cuerpo</b> <select name="act_parte_actua">
        <option value="hombros">hombros </option>
        <option value="codo">codo </option>
        <option value="muñecas">muñecas </option>
        <option value="cuello">cuello </option>
        <option value="cadera">cadera </option>
        <option value="piernas">piernas </option>
        <option value="tobillo">tobillo </option>
        <option value="manos">manos </option>
        <option value="pecho">pecho </option>
        <option value="columna">columna </option>
    </select><br>
    <input id="env" type="submit" value="Enviar">
</form>